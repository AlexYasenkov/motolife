<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class OrderController extends Controller
{

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'town' => 'required',
            'email' => 'required|unique:orders',
            'phone' => 'required'
        ]);

        $data = $request->all();
        $order = new Order();
        $order->fill($data);
        //save
        $order->save();

        $message = 'Заказ поступил в обработку. Ожидайте когда мы свяжемся с Вами.';

        return redirect('/')->with('orderSuccess', $message);
    }

}
