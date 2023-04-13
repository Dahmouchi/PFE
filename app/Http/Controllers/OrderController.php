<?php

namespace App\Http\Controllers;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $request ->validate([
            'name'=>'required',
            'adress'=>'required',
            'email'=>'required',
            'phone'=>'required',
        ]);
        $order = new Order();
        $order->client=$request->name;
        $order->adress=$request->adress;
        $order->phone=$request->phone;
        $order->price=$request->price;
        $order->email=$request->email;
        $order->etablissement=$request->etablissement;
        $order->save();
        return redirect()->back()->with('message','la commande est valider');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
