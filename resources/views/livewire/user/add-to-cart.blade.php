<div>
    <input wire:model.lazy="quantity" type="number" class="form-control" placeholder="1" @guest disabled @endguest>
    <button wire:click="addToCart" class="add-to-cart-button">
        <i class="fa fa-shopping-bag"></i>
        <span class="button-text">ADD TO CART</span>
      </button>
</div>