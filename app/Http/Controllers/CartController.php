<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
class CartController extends Controller
{
    public function addcart(Request $request){
        if(session()->get("admin.id")){
            $cart = new Cart();
        $cart->Quantity = $request->Quantity;
        $cart->ProductID = $request->ProductID;
        $cart->CustomerID = session()->get("admin.id");
        $cart->save();
        }else{
            return redirect("/login");
        }
    }
}
