<?php

namespace App\Http\Requests\Admin\Post;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'title' => 'required|string',
            'content' => 'required|string',
            'preview_image' => 'required|file',
            'main_image' => 'required|file',
            'category_id' => 'required|integer|exists:category,id',
            'tag_ids' => 'nullable|array',
            'tag_ids.*' => 'nullable|integer|exists:tags,id'
        ];
    }

    public function messages()
    {
        return [
            'title.required' =>'Required field',
            'title.string' =>'String Required',
            'content.required' =>'Required field',
            'content.string' =>'String Required',
            'preview_image.required' =>'Required field',
            'preview_image.file' =>'Choise File',
            'main_image.required' =>'Required field',
            'main_image.file' =>'Choise File',
            'category_id.required' =>'Required field',
            'category_id.integer' =>'Number Required',
            'category_id.exists' =>'Exists Category',
            'tag_ids.array'=>'Massive'
        ];
    }
}
