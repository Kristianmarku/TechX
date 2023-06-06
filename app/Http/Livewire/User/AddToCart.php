<?php

namespace App\Http\Livewire\User;

use App\Models\Cart;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Yoeunes\Toastr\Facades\Toastr;

class AddToCart extends Component
{
    public $product;
    public $quantity;

    public function mount($productId)
    {
        $this->product = Product::findOrFail($productId);
    }

    public function addToCart()
    {
        if (!Auth::user()) {
            toastr()->error('You must be logged in.');
            return;
        } elseif (Auth::user()->role_id != 3) {
            toastr()->error('Unauthorized.');
            return;
        }

        $user = User::findOrFail(Auth::id());
        $cart = $user->cart;

        // Check if user has a cart
        if ($user->cart()->exists()) {
            $cart = $user->cart;
        } else {
            // User doesn't have a cart, create one.
            $cart = new Cart();
            $user->cart()->save($cart);
        }

        // Check if the product already exists in the cart
        $existingProduct = $cart->products()->where('product_id', $this->product->id)->first();

        $quantity = $this->quantity ?: 1;
        if ($quantity > 50) {
            toastr()->error('Quantity out of stock');
            return;
        }

        if ($existingProduct) {
            // Update the quantity of the existing product
            $cart->products()->updateExistingPivot($this->product->id, [
                'quantity' => $existingProduct->pivot->quantity + $quantity
            ]);
        } else {
            // Add product to the cart
            $product = Product::findOrFail($this->product->id);
            if ($quantity > 20) {
                toastr()->error('Quantity out of stock!');
                return;
            }

            $cart->products()->attach($product, ['quantity' => $quantity]);
        }

        toastr()->success('Product added to cart.');
        // Emit an event to update the cart 
        $this->emit('cartUpdated');

        // Reset the quantity property
        $this->quantity = 1;
    }


    public function render()
    {
        return view('livewire.user.add-to-cart');
    }
}