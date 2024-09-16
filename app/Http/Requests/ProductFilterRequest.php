<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductFilterRequest extends FormRequest
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
            'properties' => 'nullable|array',
            'properties.*' => 'array',
            'properties.*.*' => 'string',
            'page' => 'nullable|integer|min:1',
        ];
    }


    public function messages()
    {
        return [
            'properties.array' => 'The properties must be an array',
            'properties.*.array' => 'Each property must be an array of values.',
            'properties.*.*.string' => 'The values of the properties must be strings.',
            'page.integer' => 'The parameter "page" must be an integer.',
            'page.min' => 'The parameter "page" must be greater than zero.',
        ];
    }
}
