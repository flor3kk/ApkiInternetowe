<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.home', [
            'products' => $products,
            'randomProd' => $products->random(3),
        ]);
    }

    public function show(Product $product) // Change $trip to $product
    {
        return view('products.show', compact('product'));
    }

    public function edit($ID_produktu)
    {
        $product = Product::findOrFail($ID_produktu);

        return view('products.edit', compact('product'));
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.home');
    }

    public function update(Request $request, Product $Product)
    {
        $request->validate([
            'nazwa' => 'required|string|max:50',
            'cena_za_kg' => 'required|numeric|max:30|min:0',
            'dostepna_ilosc_kg' => 'required|numeric|max:30|min:0',
        ]);

        $input = $request->all();
        $Product->update($input);
        return redirect()->route('products.home');
    }


}
