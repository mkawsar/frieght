<?php

namespace App\Http\Requests\Product;

use App\Enums\WeightUnit;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;

class CreateProductFormRequest extends FormRequest
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
            'title' => 'required|min:10|max:100',
            'price' => 'required',
            'currency' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'uom' => 'required',
            'upc' => 'required',
            'sku' => 'required',
            'length' => 'required',
            'width' => 'required',
            'height' => 'required',
            'weight' => 'required',
            'weight_unit' => ['required', new Enum(WeightUnit::class)]
        ];
    }
}
