<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ViewController extends Controller
{
    public function index(){
        // $value = session()->get('admin.Username');
        // return $value;

        $all = Product::all();
        $newA = Product::where('type','New')->get();
        return view('index',compact('all','newA'));
    }
    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }
    public function shop(){
        return view('shop');
    }
    public function single($id){
        $product = Product::find($id);
        return view('shop-details',compact('product'));
    }
    public function shoppingcart(){
        return view('shopingcart');

    }
    public function checkout(){
        return view('checkout');
    }
}
