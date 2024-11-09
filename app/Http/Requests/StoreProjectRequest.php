<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
            "name" => ["required", "string", "min:3", "max:255"],
            "date" => ["required", "date"],
            "description" => ["required", "string", "min:3", "max:255"],
            "languages" => ["required", "string", "min:3", "max:255"],
        ];
    }

    public function messages()
    {
        return [
            "name.required" => "The 'Project Name' field is required.",
            "name.string" => "The 'Project Name' field must be a string.",
            "name.min" => "The 'Project Name' field must be at least 3 characters.",
            "name.max" => "The 'Project Name' field cannot exceed 255 characters.",

            "date.required" => "The 'Start Date' field is required.",
            "date.date" => "The 'Start Date' field must be a valid date.",

            "description.required" => "The 'Description' field is required.",
            "description.string" => "The 'Description' field must be a string.",
            "description.min" => "The 'Description' field must be at least 3 characters.",
            "description.max" => "The 'Description' field cannot exceed 255 characters.",

            "languages.required" => "The 'Languages Used' field is required.",
            "languages.string" => "The 'Languages Used' field must be a string.",
            "languages.min" => "The 'Languages Used' field must be at least 3 characters.",
            "languages.max" => "The 'Languages Used' field cannot exceed 255 characters.",
        ];
    }
}
