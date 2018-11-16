<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StaffMemberFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => 'required',
            'last_name' => 'required',
            'birth_date' => 'required',
            'salon' => 'required',
            'position' => 'required',
            'holiday_entitlement' => 'required',
            'basic_wage' => 'required',
            'hours_pd' => 'required',
            'days_pw' => 'required',
            'percentage_return' => 'required',
            'active' => 'required'
        ];
    }
}
