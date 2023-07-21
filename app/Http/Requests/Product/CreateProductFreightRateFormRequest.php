<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductFreightRateFormRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'shipper_account_no' => 'required',
            'recipient_account_no' => 'required',
            'shipper_country' => 'required',
            'recipient_country' => 'required',
            'shipper_postal_code' => 'required',
            'recipient_postal_code' => 'required',
            'shipper_state_code' => 'required',
            'recipient_state_code' => 'required',
            'shipper_city' => 'required',
            'recipient_city' => 'required',
            'street_line' => 'required',
            'item_id' => 'required',
            'package_type' => 'required',
            'freight_class' => 'required'
        ];
    }
}
