<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function store(Request $request)
        {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'quantity' => 'required|integer',
                'price' => 'required|numeric',
                'user_id'=>'required|exists:users,id',
            ]);

            Product::create($validated);

            return redirect()->route('products.index')->with('success', 'Product created successfully.');
        }
    public function create()
        {
            $users = User::orderBy('name')->get();
            return view('products.create', compact('users'));
        }
    public function show ($id)
    {
        $product = Product::findOrfail($id);
        return view('products.show', compact('product'));
    }
    public function update(Request $request,$id)
    {
        $product = Product::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'quantity' => 'required|integer',
            'price' => 'required|numeric',
            'user_id'=>'required|exists:users,id',
        ]);
        $product->update($validated);
        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }
    public function edit($product)
    {
        $users = User::orderBy('name')->get();

        return view('products.edit', compact('product', 'users'));
    }

    public function delete($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
}   
