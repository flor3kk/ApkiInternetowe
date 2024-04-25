<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

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

        if (auth()->user()->id === 1) {
            return view('products.edit', compact('product'));
        } else {
            alert("BRAK UPRAWNIEN");
            return redirect()->route('products.home');
        }
    }

    public function destroy(Product $product)
    {
        // KAZDY MZOE USUWAC
        // $product->delete();
        // return redirect()->route('products.home');

        if (auth()->user()->id === 1) {
            $product->delete();
            return redirect()->route('products.home');
        } else {
            alert("BRAK UPRAWNIEN");
            return redirect()->route('products.home');
        }
    }

    public function update(Request $request, Product $Product)
    {
        $request->validate([
            'name' => 'required|string|max:50|min:0',
            'price' => 'required|numeric|max:30|min:0',
            'available' => 'required|numeric|max:30|min:0',
            'description' => 'required|string|max:50|min:0',
        ]);

        $input = $request->all();
        $Product->update($input);
        return redirect()->route('products.home');
    }


}
