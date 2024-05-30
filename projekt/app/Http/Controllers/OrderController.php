<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;
use function Laravel\Prompts\alert;


class OrderController extends Controller
{

    public function index()
    {
        $orders = Order::select('product_id', \DB::raw('COUNT(*) as total_orders'))
                        ->with('product:name,id')
                        ->groupBy('product_id')
                        ->get();

        return view('orders.index', compact('orders'));
    }

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
            return redirect()->route('login.authenticate');
        }
    }

    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('orders.show');
    }




    public function store(Request $request)
    {
        $cart = session('cart');

        foreach ($cart as $productId => $details) {
            $order = new Order();
            $order->product_id = $productId;
            $order->user_id = Auth::id();
            $order->order_date = now();
            $order->order_kg = $details['quantity'];
            $order->order_price = $details['price'] * $details['quantity'];
            $order->save();
        }

        session()->forget('cart');

        return redirect()->route('products.home')->with('success', 'Zamówienie zostało złożone pomyślnie!');
    }



    public function showUserDetails()
{
    if (Auth::check()) {
        $user = Auth::user();
        return view('info', ['user' => $user]);
    } else {
        alert("BRAK UPRAWNIEN");
        return redirect()->route('login.authenticate');
    }
}

    public function edit()
{
    $user = auth()->user();

    if ($user) {
        return view('userEdit', compact('user'));
    } else {
        return redirect()->route('login.authenticate');
    }
}

public function update(Request $request, User $user)
{
    $request->validate([
        'name' => 'required|string|max:20',
        'email' => 'required|email|unique:users,email,' . $user->id,
        'password' => 'required|string|min:6',
        'repass' => 'required|same:password',
    ], [
        'repass.same' => 'Potwierdzenie hasła nie zgadza się z hasłem.',
    ]);

    $input = $request->all();
    $user->update($input);
    return redirect()->route('info')->with('success', 'Dane użytkownika zostały zaktualizowane.');

}



    public function listOfUsers()
    {
        $user = auth()->user();
        // pobieramy wszystkich oprocz admina
        $users = User::where('id', '!=', 1)->get();

        if ($user && ($user->id === 1)) {
            return view('users', compact('users'));
        } else {
            alert("BRAK UPRAWNIEN");
            return redirect()->route('login.authenticate');
        }
    }

    public function deleteUser($id)
    {
        $user = User::findOrFail($id);

        if ($user->orders()->count() > 0) {
            return redirect()->route('orders.listOfUsers')->with('error', 'Nie można usunąć użytkownika, ponieważ ma powiązane zamówienia.');
        }

        $user->delete();

        return redirect()->route('orders.listOfUsers')->with('success', 'Użytkownik został usunięty.');
    }

}
