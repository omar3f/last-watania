<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateEditSectionsRequest extends Request
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
        return [
            'title' => 'required',
            'content' => 'required',
            'home' => 'required',
            'image' => 'required|image',
            'parent_id' => 'required',
            'page_id' => 'required'

        ];
    }
}
