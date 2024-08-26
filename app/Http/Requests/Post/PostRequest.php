<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|max:200',
            'thumb' => 'required',
            'description' => 'required',
            'content' => 'required',
            'menu_id' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Vui lòng nhập tiêu đề bài viết',
            'title.max' => 'Tên sản phẩm không được vượt quá 200 ký tự',
            'thumb.required' => 'Ảnh đại diện không được để trống',
            'description.required' => 'Mô tả bài viết không được để trống',
            'content.required' => 'Nội dung bài viết không được để trống',
            'menu_id.required' => 'Danh mục không được để trống'
        ];

    }
}
