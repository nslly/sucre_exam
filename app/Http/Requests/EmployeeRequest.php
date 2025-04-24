<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use App\Enums\GenderIdentification;
use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
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
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'gender' => ['required', Rule::in(GenderIdentification::cases())], 
            'birthday' => ['required', 'date', 'date_format:Y-m-d'],
            'monthly_salary' => ['required', 'numeric', 'min:1', 'max:999999999999'],        
        ];
    }
}
