<?php

namespace App\Http\Requests\Order;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\Order\StoreOrderRequest;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class UpdateOrderRequest extends StoreOrderRequest
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
        $order_id = $this->route('order');

        return array_merge(parent::rules(), [
            'number' => [Rule::unique('orders')->ignore((isset($order_id) ? $order_id : "0"), 'id')],
        ]);
    }
}
