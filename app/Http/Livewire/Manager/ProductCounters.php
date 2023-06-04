<?php

namespace App\Http\Livewire\Manager;

use App\Models\Product;
use Livewire\Component;

class ProductCounters extends Component
{
    public function render()
    {
        $totalProductsCount = Product::all()->count();
        $inStockProductsCount = Product::where('quantity', '>', 1)->get()->count();
        $outOfStockProductsCount = Product::where('quantity', '=', 0)->get()->count();
        return view('livewire.manager.product-counters', compact('totalProductsCount', 'inStockProductsCount', 'outOfStockProductsCount'));
    }
}
