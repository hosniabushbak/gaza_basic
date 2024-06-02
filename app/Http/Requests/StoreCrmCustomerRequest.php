<?php

namespace App\Http\Requests;

use App\Models\CrmCustomer;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreCrmCustomerRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('crm_customer_create');
    }

    public function rules()
    {
        return [
            'first_name' => [
                'string',
                'nullable',
            ],
            'full_name' => [
                'required',
            ],
            'user_identification' => [
                'string',
                'required',
            ],
            'clinic_name' => [
                'string',
                'required',
            ],
            'phone_number' => [
                'string',
                'required',
            ],
            'birthday' => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
            'unrwa_clinic' => [
                'required',
            ],
        ];
    }
}
