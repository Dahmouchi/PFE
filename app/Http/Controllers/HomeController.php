<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Cart;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('indexAuth');
    }
    public function addcart(Request $request, $id)
    {
        if(Auth::id()){

            $product=Product::find($id);
            $cart=new Cart();
            $user=auth()->user();

            $cart->name=$user->name;
            $cart->quantity=$request->qnt;
            $cart->Product_title=$product->ProductName;
            $cart->price=$product->price;
            $cart->save();
            return redirect()->back();

        }else{
            return redirect('adminLogin');
        }
    }
}
