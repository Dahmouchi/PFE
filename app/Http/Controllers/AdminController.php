<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\Cart;
use App\Models\Employee;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function showProduct()
    {
        $products=Product::all();
        return view('dashboard.products',compact('products'));
    }
    public function showOrder()
    {
        $product=Product::all();
        $products=Cart::all();
        $orders=Order::all();
        $user=User::all();
        return view('dashboard.dashboard',compact('orders','products','product','user'));
    }
    public function showEmployee()
    {
        $emp=Employee::all();
        return view('dashboard.employee',compact('emp'));
    }
    public function serch($client)
    {
        $commands=Cart::all()->where('name',$client);
        $user = User::all()->where('name',$client);
        $order = Order::all()->where('client',$client);
        return view('dashboard.commads',compact('commands','user','order'));
    }
    public function setting()
    {
        return view('dashboard.settings');
    }

}
