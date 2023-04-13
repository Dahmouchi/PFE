<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('produit.Menu');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product =new Product();
        $product->ProductName=$request->title;
        $product->description=$request->description;
        $product->Price=$request->price;
        $product->category=$request->category;
        $file=$request->image_product;
        $extension=$file->getClientOriginalExtension();
        $filename=time().'.'.$extension;
        $file->move('images/productImage/',$filename);
        $product->image=$filename;
        $product->save();
        return view('indexAuth');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $products=Product::all();
        return view('produit.Menu',compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
      
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
