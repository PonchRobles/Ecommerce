<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\PayPal;
use App\ShoppingCart;
class ShopingCartsController extends Controller
{
    //
    public function index(){
      $shopping_cart_id= \Session::get('shopping_cart_id');
      $shopping_cart =  ShoppingCart::findOrCreateBySessionId($shopping_cart_id);
      $paypal= new PayPal($shopping_cart);

      $payment = $paypal->generate();

return redirect($payment->getApprovalLink());
        //  $products = $shopping_cart ->products()->get();
          //$total = $shopping_cart->total();

          //return view("shopping_carts.index",["products" => $products,"total"=> $total]);
    }
}
