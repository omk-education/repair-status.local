<?php

namespace App\Http\Requests\Order;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderRequest extends FormRequest
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
            'number' => ['required', 'string', 'size:6', 'unique:orders'],
            'description' => ['required', 'string'],
            'diagnostics' => ['nullable', 'string'],
            'notice' => ['nullable', 'string'],
            'status' => ['required', 'string'],
        ];
    }
}
