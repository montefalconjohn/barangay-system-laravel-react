<?php

namespace App\Http\Requests;

use Anik\Form\FormRequest;
use Illuminate\Http\Request;

class CivilStatusesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
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
            'civil_status_name' => 'required|string|unique:civil_statuses'
        ];
    }

    /**
     * Validation for patch method request
     */
    private function patchValidation()
    {
        // the rule in email is to avoid the unique constraint error
        return [
            'civil_status_name' => 'string|unique:civil_statuses,civil_status_name,' . $this->id
        ];
    }
}
