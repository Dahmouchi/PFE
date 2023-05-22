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
        if(Auth::check()){
             $carts =Cart::all();
        return view('produit.cartproduct',compact('carts'));
        }else{
            return redirect()->Route("log");
        }

    }
    public function addcart(Request $request,$id)
    {

        if(Auth::check()){
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
            return redirect()->Route("log");
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
    public function destroyall(string $name)
    {
        $carts=Cart::all()->where('name',$name);
        foreach($carts as $data){
            Cart::destroy($data->id);
        }
        $user=User::findorFail(Auth::user()->id);
        $user->cartqnt='0';
        $user->save();
        return redirect()->back();
    }
}
