<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name' => 'required',
            'content' => 'required',
            'content_short' => 'required',
            'price' => 'required',
            'image' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Tên sản phẩm không được để trống.',
            'content.required' => 'Nội dung sản phẩm không được để trống.',
            'content_short.required' => 'Nội dung ngắn sản phẩm không được để trống.',
            'price.required' => 'Giá sản phẩm không được để trống.',
            'image.required' => 'Ảnh sản phẩm không được để trống.',
        ];
    }
}