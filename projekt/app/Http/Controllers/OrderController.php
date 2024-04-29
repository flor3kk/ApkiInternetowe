<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Order;


class OrderController extends Controller
{

    public function showOrders()
    {
        if (Auth::check()) {
            // id usera
            $userId = Auth::id();

            // pobieranie zamowienia
            $orders = Order::where('user_id', $userId)->get();

            return view('orders.show', ['orders' => $orders]);
        } else {
            // przekierwoanie do loginu
            return redirect()->route('login');
        }
    }

    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('orders.show');
    }

}
