<?php
namespace App\Http\Requests;
use App\Http\Requests\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Input;
class CreateNewPageRequest extends Request
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
            'content'   =>'required|min:5',
            'image'     =>'required|image|max:1024',
            'url'       =>'required|alpha_dash'
        ];
        if(Input::get('__method') == 'edit'){
            $rules = [
                'image'     =>'image|max:1024'
            ];
        }
        return $rules;
    }
    public function response(array $errors)
    {
        if ($this->ajax() || $this->wantsJson()) {
            return new JsonResponse([
                'success' => false,
                'errors' => $errors
            ], 200);
        }
        return $this->redirector->to($this->getRedirectUrl())
            ->withInput($this->except($this->dontFlash))
            ->withErrors($errors, $this->errorBag);
    }
}