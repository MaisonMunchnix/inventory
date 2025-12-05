<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $products = Product :: paginate(5);

    return view("products.index", compact('products'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:250',
            'description' => 'required|max:255',
            'quantity' => 'required|min:1',
        ]);
        $product = new Product();

        $product->name = $request->name;
        $product->description = $request->description;
        $product->quantity = $request->quantity;

        $product->save();

        return redirect()->route('products.index')->with("success", "Product added.");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        // $product = Product::find($product->$id);
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {

         $request->validate([
            'name' => 'required|string|max:250',
            'description' => 'required|max:255',
            'quantity' => 'required|min:1',
        ]);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->quantity = $request->quantity;

        $product->save();
        return redirect()->route('products.index')->with("success", "Product updated.");

        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with("success", "Product deleted.");

    }
}
