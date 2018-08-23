<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Cart;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        $product = Product::find($request->product_id);
        Cart::add([
            'id' => $request->product_id,
            'name' => $product->product_name,
            'qty' => $request->qty,
            'price' => $product->product_price,
            'options' => [
                'image' => $product->product_image
            ]
        ]);

        return redirect('/show-cart');
    }

    public function showCart()
    {
        $cartProducts = Cart::content();
        return view('front-end.cart.show-cart', [
            'cartProducts' => $cartProducts
        ]);
    }

    public function deleteCart($id)
    {
        Cart::remove($id);
        return redirect('/show-cart');
    }

    public function updateCart(Request $request)
    {
        Cart::update($request->cartId, $request->qty);
        return redirect('/show-cart');
    }
}
