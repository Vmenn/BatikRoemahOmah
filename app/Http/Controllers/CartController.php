<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\product;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function __construct(Product $product){
        $this->product=$product;
    }

    public function index (){
        return view('pages.cart');
    }

    public function addToCart(Request $request){

// dd($request->all());t
if (empty($request->slug)) {
    request()->flash('error', 'Invalid Products');
    return back();
}
$product = Product::where('slug', $request->slug)->first();
// return $product;
if (empty($product)) {
    request()->flash('error', 'Invalid Products');
    return back();
}

$already_cart = Cart::where('user_id', auth()->user()->id)->where('order_id', null)->where('product_id', $product->id)->first();
// return $already_cart;
if ($already_cart) {

    // dd($already_cart);
    $already_cart->quantity = $already_cart->quantity + 1;
    $already_cart->amount =  $already_cart->price * $already_cart->quantity;
    // return $already_cart->quantity;
    if ($already_cart->product->stock < $already_cart->quantity || $already_cart->product->stock <= 0) return back()->with('error', 'Stock not sufficient!.');
    $already_cart->save();
} else {

    $cart = new Cart;
    $cart->user_id = auth()->user()->id;
    $cart->product_id = $product->id;
    $cart->price = $product->price ;
    $cart->quantity = 1;
    $cart->amount = $cart->price * $cart->quantity;
    if ($cart->product->stock < $cart->quantity || $cart->product->stock <= 0) return back()->with('error', 'Stock not sufficient!.');
    // var_dump($cart);
    // exit;
    $cart->save();
}
request()->flash('success', 'Product successfully added to cart');
return back();
    }

    public function cartDelete(Request $request){
        $cart = Cart::find($request->id);
        if ($cart) {
            $cart->delete();
            request()->flash('success','Cart successfully removed');
            return back();
        }
        request()->flash('error','Error please try again');
        return back();
    }

    public function cartUpdate(Request $request){
         // dd($request->all());
         if($request->quant){
            $error = array();
            $success = '';
            // return $request->quant;
            foreach ($request->quant as $k=>$quant) {
                // return $k;
                $id = $request->qty_id[$k];
                // return $id;
                $cart = cart::find($id);
                // return $cart;
                if($quant > 0 && $cart) {
                    // return $quant;

                    if($cart->product->stock < $quant){

                        return back();
                    }
                    $cart->quantity = ($cart->product->stock > $quant) ? $quant  : $cart->product->stock;
                    // return $cart;

                    if ($cart->product->stock <=0) continue;
                    $after_price=$cart->product->price;
                    $cart->amount = $after_price * $quant;
                    // return $cart->price;
                    $cart->save();
                    $success = 'Cart successfully updated!';
                }else{
                    $error[] = 'Cart Invalid!';
                }
            }
            return back()->with($error)->with('success', $success);
        }else{
            return back()->with('Cart Invalid!');
        }
    }
}
