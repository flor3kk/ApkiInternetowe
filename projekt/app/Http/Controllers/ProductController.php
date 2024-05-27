<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProductRequest;
use App\Models\Order;
use function Laravel\Prompts\alert;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->get();

        // dd($products);
        return view('products.home', [
            'products' => $products
        ]);
    }

    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    public function edit($ID_produktu)
    {
        // KAZDY MOZE EDYTOWAC
        // $product = Product::findOrFail($ID_produktu);
        // return view('products.edit', compact('product'));


        $product = Product::findOrFail($ID_produktu);
        $categories = Category::all();
        $user = auth()->user();

        if ($user && ($user->id === 1)) {
            return view('products.edit', compact('product', 'categories'));
        } else {
            alert("BRAK UPRAWNIEN");
            return redirect()->route('login.authenticate');
        }
    }


    public function destroy(Product $product)
    {
        $user = auth()->user();

        if ($user && ($user->id === 1)) {
            if ($product->orders()->count() > 0) {
                return redirect()->route('products.home')->with('error', 'nie mozna usunac produktow ktore zostaly zamowione.');
            }

            $product->delete();
            return redirect()->route('products.home')->with('success', 'produkt usuniety pomyslnie.');
        } else {
            alert("BRAK UPRAWNIEN");
            return redirect()->route('login.authenticate');
        }
    }

    public function update(Request $request, Product $Product)
    {
        $request->validate([
            'name' => 'required|string|max:50|min:0',
            'price' => 'required|numeric|max:30|min:0',
            'available' => 'required|numeric|max:30|min:0',
            'calories' => 'required|string|max:30|min:0',
            'description' => 'required|string|max:50|min:0',
            'img' => 'required|string|max:50|min:0',
            'category_id' => 'required|numeric|exists:categories,id',
        ]);

        $input = $request->all();
        $Product->update($input);
        return redirect()->route('products.home');
    }

    public function create(){

        $categories = Category::all();
        $user = auth()->user();

        if ($user && ($user->id === 1)) {
            return view('products.create', compact('categories'));
        } else {
            alert("BRAK UPRAWNIEN");
            return redirect()->route('login.authenticate');
        }

        // KAZDY MOZE DODAWAC
        //return view('products.create');
    }

    public function store(StoreProductRequest $request){
        $input = $request->all();
        Product::create($input);

        return redirect()->route('products.home');
    }

    public function addToCart($id)
    {
        $product = Product::findOrFail($id);

        $cart = session()->get('cart', []);

        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        }  else {
            $cart[$id] = [
                "name" => $product->name,
                "price" => $product->price,
                "quantity" => 1
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'dodano produkt do koszyka!');
    }

    public function updatee(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Koszyk zaktualizowany!');
        }
        return redirect()->route('cart');
    }

    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Produkt usunięty z koszyka!');
        }
        return redirect()->route('cart');
    }

    public function cart()
    {
        return view('cart');
    }


    public function search(Request $request)
    {
        $query = $request->input('query');

        // Wyszukaj ogłoszenia zawierające wpisany ciąg znaków w tytule
        $products = Product::where('name', 'like', '%'.$query.'%')
                                        ->orWhere('description', 'like', '%'.$query.'%')
                                        ->get();

        // Przekieruj użytkownika do widoku z wynikami wyszukiwania i zmienna query
        return view('search', ['products' => $products, 'query' => $query]);
    }
}
