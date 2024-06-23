<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\CartItem;
use App\Models\Product;
use App\Models\ShoppingCart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShoppingCartController extends Controller
{
    public function addToDatabaseCart(Request $request)
    {
        $cart= new ShoppingCart();
        $cart->totalPrice=0;
        $cart->user_id=Auth::id();
        $cart->save();
        $items = $request->input('items');
        foreach ($items as $item) {
            $cartItems = new CartItem();
            $cartItems->quantity =$item['quantity'];
            $cartItems->cart_id =$cart->id;
            $cartItems->product_id = $item['product_id'];
            $cartItems->save();
            $product = Product::find($item['product_id']);
           $cart->totalPrice += $item['quantity'] * $product->Price;
        }

        $cart->save(); 
        return response()->json([
            'status' => true,
            'data' => $cart,
            'message' => 'Items added to Shopping cart'
        ]);

        $cart->save();
    }

   // public function store(Request $request){

        //$this->addToSessionCart($request->input('product_id'), $request->input('quantity'));
       // $this->addToDatabaseCart($request);
       // $product = Product::find($request->input('product_id'));
       // return response()->json([
           // 'status'=>true,
         //   'data'=>$product,
         //   'message'=>'Item added to cart'
       // ]);
    //}
    private function addToSessionCart($productId, $quantity)
    {
        // Retrieve existing session cart (or initialize if empty)
        $sessionCart = session('cart', []);

        // Check if the product already exists in the cart
        if (array_key_exists($productId, $sessionCart)) {
            // Update the quantity for the existing product
            $sessionCart[$productId]['quantity'] += $quantity;
        } else {
            // Add a new product to the cart
            $sessionCart[$productId] = [
                'product_id' => $productId,
                'quantity' => $quantity,
            ];
        }

        // Save the updated session cart
        session(['cart' => $sessionCart]);
    }
    

}
