<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Cart;
use App\Models\User;

class CartController extends Controller
{
    public function show()
    {
        $carts =Cart::all();
        return view('produit.cartproduct',compact('carts'));
    }
    public function addcart(Request $request,$id)
    {

        if(Auth::id()){
            $user=User::find(Auth::user()->id);
            $user->cartqnt++;
            $user->save();
            $product=Product::find($id);
            $cart=new Cart();
            $user=auth()->user();
            $cart->name=$user->name;
            $cart->quantity=$request->qnt;
            $cart->Product_title=$product->ProductName;
            $cart->price=$product->price;
            $cart->image=$product->image;
            $cart->save();
            return redirect()->back();

        }else{
            return redirect('adminLogin');
        }
    }
    public function destroy($id)
    {

        Cart::destroy($id);
        $user=User::find(Auth::user()->id);
        $user->cartqnt--;
        $user->save();
        return redirect()->back();
    }
    public function updateqnt()
    {



    }
}
