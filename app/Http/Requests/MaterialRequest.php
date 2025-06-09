<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MaterialRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required', 'string', 'max:255',
            'material_type_id' => 'required', 'integer', 'exists:material_types,id',
            'price' => 'required', 'numeric', 'min:0',
            'quantity' => 'required', 'integer', 'min:0',
            'quantityM' => 'required', 'integer', 'min:0',
            'quantityP' => 'required', 'numeric', 'min:0',
            'unit_id' => 'required', 'integer', 'exists:units,id',

        ];
    }
}
