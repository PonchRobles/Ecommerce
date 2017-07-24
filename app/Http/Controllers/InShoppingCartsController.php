<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ShoppingCart;
use App\InShoppingCart;
class InShoppingCartsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        //
        $shopping_cart_id= \Session::get('shopping_cart_id');
        $shopping_cart =  ShoppingCart::findOrCreateBySessionId($shopping_cart_id);
      $response=  InShoppingCart::create([
          "shopping_cart_id" => $shopping_cart->id,
          "product_id" => $request->product_id
        ]);
        if($response)
        {
return redirect('/carrito');
        }else{
          return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        //
    }
}
