<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CkEditorImageUploadRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'upload' => ['required', 'image', 'mimes:jpg,jpeg,png,webp,gif', 'max:2048'],
        ];
    }

    public function messages(): array
    {
        return [
            'upload.required' => 'Please select an image to upload.',
            'upload.image' => 'The uploaded file must be an image.',
            'upload.mimes' => 'The image must be a file of type: jpg, jpeg, png, webp, or gif.',
            'upload.max' => 'The image size must not exceed 2 MB.',
        ];
    }
}
