<?php

namespace App\Http\Requests\Pages;

use App\Http\Requests\Request;
use Illuminate\Support\Facades\Auth;

class CreatePageRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'url' => 'required|alpha_dash',
            'content' => 'required',
            'image' => 'required|image',
            'parent_id' => 'required'
        ];
    }
}
