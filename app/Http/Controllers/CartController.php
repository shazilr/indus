<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cart()
    {
        $cart = session()->get('cart', []);
        $total = collect($cart)->sum(fn($item) => $item['price'] * $item['quantity']);
        return view('front.cart', compact('cart', 'total'));
    }

    public function add(Request $request)
    {
        $id = $request->id;
        $title = $request->title;
        $price = $request->price;
        $image = $request->image;

        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity'] += 1;
        } else {
            $cart[$id] = [
                'title' => $title,
                'price' => $price,
                'quantity' => 1,
                'image' => $image
            ];
        }

        session()->put('cart', $cart);
        return redirect()->route('front.cart')->with('success', 'Product added to cart');
    }

    public function update(Request $request)
    {
        $cart = session()->get('cart');

        foreach ($request->quantity as $id => $qty) {
            $cart[$id]['quantity'] = $qty;
        }

        session()->put('cart', $cart);
        return redirect()->route('front.cart')->with('success', 'Cart updated');
    }

    public function remove($id)
    {
        $cart = session()->get('cart');
        unset($cart[$id]);
        session()->put('cart', $cart);
        return redirect()->route('front.cart')->with('success', 'Product removed');
    }
}
