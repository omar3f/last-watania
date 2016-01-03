<?php
namespace App\Http\Requests;
use App\Http\Requests\Request;
use Illuminate\Support\Facades\Input;
class SliderCreateReqest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'title'     =>'required|min:5',
            'desc'      =>'required|min:5',
            'sort'      =>'required|int',
            'image'     =>'required|image|max:1024'
        ];
        if(Input::get('__method') == 'edit'){
            $rules = [
                'image'     =>'image|max:1024'
            ];
        }
        return $rules;
    }
}