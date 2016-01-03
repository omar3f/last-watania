<?php
namespace App\Http\Controllers;
use App\Http\Requests\admin;
use App\Http\Requests\MainDataRequest;
use App\Http\Requests\SliderCreateReqest;
use App\MainData;
use App\Slider;
use App\Social;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\SocialRequest;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Session;
class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('panel.template');
    }
    public function page()
    {
        return view('panel.pages.profile');
    }
    public function mainData()
    {
        return view('panel.pages.maindata');
    }
    public function storeMainData(MainDataRequest $request)
    {
        $inputs = Input::except('_token');
        foreach ($inputs as $key => $value) {
            $data = MainData::findOrCreate($key);
            $data->key = $key;
            if ($value instanceof UploadedFile) {
                $file = Input::file($key);
                $destinationPath = 'images/';
                $filename = $file->getClientOriginalName();
                $file->move($destinationPath, $filename);
                $data->value = $destinationPath . $filename;
            } else {
                $data->value = $value;
            }
            $data->save();
        }
        return redirect('panel/main-data');
    }
    public function social()
    {
        return view('panel.pages.social');
    }
    public function storeSocialData(SocialRequest $request)
    {
        $inputs = Input::except('_token');
        foreach ($inputs as $key => $value) {
            $data = Social::findOrCreate($key);
            $data->key = $key;
            $data->value = $value;
            $data->save();
        }
        return redirect('panel/main-data/social');
    }
    //--------------------- admins
    public function admins()
    {
        $admins = User::all();
        return view('panel.pages.admins', compact('admins'));
    }
    public function destroyAdmin($id)
    {
        $user = User::find($id);
        $user->delete();
        Session::flash('user_delete', 'user deleted successfuly.');
        return redirect('panel/main-data/admins');
    }
    public function newAdmin()
    {
        return view('panel.pages.newadmin');
    }
    public function storeNewAdmin(admin $request)
    {
        User::create(['name' => $request->input('name'), 'email' => $request->input('email'), 'password' => bcrypt($request->input('password'))]);
        Session::flash('new_user', 'user has been created successfuly');
        return redirect('panel/main-data/admins');
    }
    //********** slider
    public function slider()
    {
//        $sliders = Slider::where('status','=',1)->orderBy('sort','ASC')->get();
        $sliders = Slider::all();
        return view('panel.pages.slider', compact('sliders'));
    }
    public function newSlide()
    {
        return view('panel.pages.new_slide');
    }
    public function storeNewSlide(SliderCreateReqest $request)
    {
        $inputs = new Slider();
        $file = $request->file('image');
        $destinationPath = 'images/slider';
        $filename = $file->getClientOriginalName();
        $file->move($destinationPath, $filename);
        $image = $destinationPath . '/' . $filename;
        $inputs->create(['title' => $request->input('title'), 'desc' => $request->input('desc'), 'image' => $image, 'sort' => $request->input('sort'), 'status' => $request->input('status')]);
        Session::flash('new_slide', 'slide has been added successfuly ');
        return redirect('panel/slider');
    }
    public function editSlide($id)
    {
        $slide = Slider::findOrFail($id);
        return view('panel.pages.edit_slide', compact('slide'));
    }
    public function updateSlide($id, SliderCreateReqest $request)
    {
        $data = Slider::findOrFail($id);
        if (Input::hasFile('image')) {
            File::delete($data->image);
            $file = $request->file('image');
            $destinationPath = 'images/slider';
            $filename = $file->getClientOriginalName();
            $file->move($destinationPath, $filename);
            $data->image = $destinationPath . '/' . $filename;
        }
        $data->title = $request->input('title');
        $data->desc = $request->input('desc');
        $data->sort = $request->input('sort');
        $data->status = $request->input('status');
        $data->save();
        Session::flash('update_slide', 'Slide has been updated successfuly');
        return redirect('panel/slider');
    }
    public function destroySlide($id)
    {
        $slide = Slider::find($id);
        $slide->delete();
        Session::flash('delete_slide', 'Slide has been deleted successfuly');
        return redirect('panel/slider');
    }
    public function hideSlide($id)
    {
        $slide = Slider::findOrFail($id);
        $slide->update(['status' => 0]);
        Session::flash('hideSlide', 'Slide has been hidden successfuly');
        return redirect('panel/slider');
    }
    public function showSlide($id)
    {
        $slide = Slider::findOrFail($id);
        $slide->update(['status' => 1]);
        Session::flash('showSlide', 'Slide has been visible successfuly');
        return redirect('panel/slider');
    }
}