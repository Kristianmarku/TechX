<?php

namespace App\Http\Livewire\User;

use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use App\Notifications\OrderNotification;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Cart extends Component
{
    public $cart;
    protected $listeners = ['cartUpdated'];

    public function mount()
    {
        if (Auth::id()) {
            $user = User::findOrFail(Auth::id());
            $this->cart = $user->cart;
        }
    }

    public function refreshCart()
    {
        if (Auth::id()) {
            $user = User::findOrFail(Auth::id());
            $this->cart = $user->cart;
        }
    }

    public function removeFromCart($id)
    {
        $user = User::findOrFail(Auth::id());
        $cart = $user->cart;
    
        // Check if the user has a cart
        if ($user->cart()->exists()) {
            $cart = $user->cart;
    
            // Find the pivot record for the given product
            $pivot = $cart->products()->where('product_id', $id)->first();
            
            if ($pivot) {
                if ($pivot->pivot->quantity > 1) {
                    // If the quantity is greater than 1, decrement the quantity
                    $cart->products()->updateExistingPivot($id, ['quantity' => $pivot->pivot->quantity - 1]);
                } else {
                    // If the quantity is 1, remove the pivot record
                    $cart->products()->detach($id);
                }
    
                // Emit an event to update the cart if necessary
                $this->emit('cartUpdated');
            }
        } else {
            toastr()->error('No cart found.');
        }
    }

    public function removeAllFromCart($id)
    {
        $user = User::findOrFail(Auth::id());
        $cart = $user->cart;
    
        // Check if the user has a cart
        if ($user->cart()->exists()) {
            $cart = $user->cart;
    
            // Find the pivot record for the given product
            $pivot = $cart->products()->where('product_id', $id)->first();
            
            if ($pivot) {
       
                $cart->products()->detach($id);
    
            // Emit an event to update the cart if necessary
            $this->emit('cartUpdated');
            }
        } else {
            toastr()->error('No cart found.');
        }
    }

    public function calculateTotal()
    {
        $total = 0;

        if ($this->cart) {
            foreach ($this->cart->products as $product) {
                $quantity = $product->pivot->quantity;
                $price = $product->productSale ? $product->productSale->sale_price : $product->price;
                $subtotal = $quantity * $price;
                $total += $subtotal;
            }
        }

        return $total;
    }

    public function checkout()
    {
        // Retrieve the authenticated user
        $user = User::findOrFail(Auth::id());

        // Check if the user has a cart
        if ($user->cart()->exists()) {
            $cart = $user->cart;

             // Check if there are products in the cart
            if ($cart->products->isEmpty()) {
                toastr()->error('No products in the cart.');
                return;
            }

            // Create a new order
            $order = Order::create([
                'user_id' => $user->id,
                'total_amount' => $this->calculateTotal(),
                'status' => 'Pending',
            ]);

             // Process each product in the cart
            foreach ($cart->products as $product) {
                $quantity = $product->pivot->quantity;

                // Check if the product is in stock
                if ($quantity <= $product->quantity) {
                    // Decrease the quantity of products in the database
                    $product->quantity -= $quantity;
                    $product->save();

                    // Associate the cart products with the order
                    $order->products()->attach($product, ['quantity' => $quantity]);
                } else {
                    // Product is out of stock
                    toastr()->error('Product "' . '#' . $product->id . ' ' . $product->name . '" is out of stock.');
                    return;
                }
            }

            // Associate the cart products with the order
            foreach ($cart->products as $product) {
                $quantity = $product->pivot->quantity;
                $order->products()->attach($product, ['quantity' => $quantity]);
            }

            // Clear the user's cart
            $cart->products()->detach();

            // Emit an event to update the cart
            $this->emit('cartUpdated');
            $this->emit('refreshComponent');

            // Show a success message
            toastr()->success('Order placed successfully.');

            // Send the notification to the user
            $message = 'Your order (#'.$order->id.') has been placed successfully.';
            $user->notify(new OrderNotification($message));

        } else {
            toastr()->error('No cart found.');
        }
    }

    public function cartUpdated()
    {
        $this->refreshCart();
    }

    public function render()
    {
        return view('livewire.user.cart');
    }
}
