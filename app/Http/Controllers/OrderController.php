<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function viewOrder(Request $request) {
        $order_id = $request->get('id');
        $order = Order::find($order_id);

       $data = [
           'order' => $order,
           'product' => $order->products
       ];

        return view('order.view', $data);
    }
}
