<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function store(Request $request)
        {
            $validatedData = $request->validate([
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
}   
