<?php

namespace App\Http\Livewire\Manager;

use App\Models\Product;
use Livewire\Component;

class ProductsTable extends Component
{
    public function render()
    {
        $products = Product::all();
        return view('livewire.manager.products-table', compact('products'));
    }
}
