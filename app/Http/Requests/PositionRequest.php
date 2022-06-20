<?php

namespace App\Http\Requests;

use Anik\Form\FormRequest;
use Illuminate\Http\Request;

class PositionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *c
     * @return bool
     */
    protected function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    protected function rules(): array
    {
        return Request::isMethod('post') ? $this->postValidation() : $this->patchValidation();
    }

    /**
     * Validation for post method request
     */
    private function postValidation()
    {
        return [
            'position_name' => 'required|string|unique:positions'
        ];
    }

    /**
     * Validation for patch method request
     */
    private function patchValidation()
    {
        // the rule in email is to avoid the unique constraint error
        return [
            'position_name' => 'string|unique:positions,position_name,' . $this->id
        ];
    }
}
