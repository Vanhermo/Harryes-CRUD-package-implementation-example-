<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ModelExampleUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => 'sometimes|required', 'email' => 'sometimes|required', 'age' => 'sometimes|required'
        ];
    }
}