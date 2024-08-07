<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'nameDM' => 'required|min:5|max:50'
        ];
    }

    public function messages():array{
        return [
            'nameDM.required' => 'Không được để trống danh mục',
            'nameDM.min' => 'Tên danh mục phải có ít nhất 5 ký tự', 
            'nameDM.max' => 'Tên danh mục không được quá 50 ký tự', 
        ];
    }
}
