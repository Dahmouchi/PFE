<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\User;
use App\Models\Archive;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.Dashboard');
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
        $order->confirmation='0';
        $order->save();
        return redirect()->back()->with('message','la commande est valider');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {

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
    public function update(Request $request,$id)
    {

        $order = Order::findorFail($id);
        $order->confirmation  = '1';
        $order->save();
        $user=User::all()->where('name',$order->client);
        foreach($user as $data){
            $data->cartqnt = '0';
            $data->save();
        }
        $cart=Cart::all()->where('name',$order->client);

        foreach($cart as $data){
            $archive=new Archive();
            $archive->name=$data->name;
            $archive->quantity=$data->quantity;
            $archive->product_title=$data->product_title;
            $archive->price=$data->price;
            $archive->image=$data->image;
            $archive->save();

        }
        foreach($cart as $data){

            Cart::destroy($data->id);
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
