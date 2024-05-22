<?php

namespace App\Http\Controllers;

use App\Models\OrderReadyModel;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function submitOrder(Request $request)
    {
        $request -> validate([
            'computer_id' => 'required|exists:computers,id',
            'name' => 'required|string',
            'city' => 'required|string',
            'phone_number' => 'required|string',
            'comment' => 'nullable|string',
        ]);

        $newRequest = new OrderReadyModel([
            'computer_id' => $request -> input('computer_id'),
            'name' => $request -> input('name'),
            'city' => $request -> input('city'),
            'phone_number' => $request -> input('phone_number'),
            'comment' => $request -> input('comment'),
        ]);

        $newRequest ->save();

        return redirect()->back()->with('success-order', 'Ваш заказ успешно отправлен.');
    }
}
