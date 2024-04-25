<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

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
