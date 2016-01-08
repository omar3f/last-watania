<?php

namespace App\Http\Requests\Sections;

use App\Http\Requests\Request;
use Illuminate\Support\Facades\Auth;

class CreateSectionRequest extends Request
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
            'description' => 'required',
            'image' => 'required|image',
            'home' => 'required|boolean',
            'page_id' => 'required',
            'parent_id' => 'required'
        ];
    }
}
