<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreVoucherRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'code' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'quantity' => 'required|integer|min:1',
            'discount_percentage' => 'required|numeric|min:0|max:100',
            'max_discount_amount' => 'required|numeric|min:0',
        ];
    }

    public function messages()
    {
        return [
            'code.required' => 'Mã giảm giá không được để trống.',
            'start_date.required' => 'Ngày bắt đầu không được để trống.',
            'end_date.after_or_equal' => 'Ngày kết thúc phải sau hoặc bằng ngày bắt đầu.',
            'quantity.min' => 'Số lượng phải lớn hơn 0.',
            'discount_percentage.max' => 'Giảm giá không vượt quá 100%.',
        ];
    }
}   
