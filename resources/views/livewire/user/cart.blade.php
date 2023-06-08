<div class="content">
    <div class="top-content">
        <div class="container-1-a">
            <i id="close-cart-a" class="fa-solid fa-arrow-right-from-bracket"></i>
            <div class="cart-title-a">Shopping Cart</div>
        </div>
    
        <!-- ***** ITEMS ***** -->
        @if($cart)
            @forelse($cart->products as $product)
                <div class="item-a">
                    <div style="display: flex;">
                        <div class="image-a">
                            <img src="{{ asset('storage/cover_images/' . $product->cover_image ) }}" alt="Product Image">
                        </div>
                        <div class="text-a">
                            <h4>{{ $product->name }}</h4>
                            <h4>
                                <i wire:click="removeFromCart({{$product->id}})" class="fa-solid fa-square-minus text-danger" title="Delete One"></i> 
                                {{$product->pivot->quantity}}x {{ $product->productSale?->sale_price ?  $product->productSale?->sale_price : $product->price }}€
                            </h4>
                        </div>
                    </div>
                    <div>
                        <i wire:click="removeAllFromCart({{$product->id}})" class="fa-solid fa-trash text-danger" title="Delete All"></i>
                    </div>
                </div>
            @empty 
            <p>Your cart is currently empty. Start shopping now and fill it with amazing products!</p>
            @endforelse
        @else 
            <p>Your cart is currently empty. Start shopping now and fill it with amazing products!</p>
        @endif 
        <!-- ***** ITEMS END ***** -->
    </div>
    <div class="bottom-content">
        <div class="bottom-buttons-a">
            <div class="subtotal-a">
                <h4>Total</h4>
                <h4>{{ $this->calculateTotal() }}€</h4>
            </div>
    
            {{-- <button type="submit">VIEW CART</button> --}}
            <button wire:click="checkout">CHECKOUT</button>
        </div>
    </div>

</div>


@push('scripts')
    <script>
        Livewire.on('cartUpdated', () => {
            Livewire.emit('refreshCart');
        });
    </script>
@endpush