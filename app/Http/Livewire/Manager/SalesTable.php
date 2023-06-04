<?php

namespace App\Http\Livewire\Manager;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class SalesTable extends Component
{
    use WithPagination;
    public $filterCategory;
    public $filterSale;
    public $search;
    public function render()
    {
        $query = Product::orderBy('created_at', 'desc');

        // Handle Category filter
        if($this->filterCategory && $this->filterCategory != 'All') {
            $query->where('category_id', $this->filterCategory);
        }

        // Handle Sale filter
        if ($this->filterSale && $this->filterSale != 'All') {
            if ($this->filterSale == 'onSale') {
                $query = $query->has('productSale');
            } else {
                $query = $query->doesntHave('productSale');
            }
        }
        
        // Handle searchbar
        if($this->search) {
            $query->where('name', 'like', '%' . $this->search . '%')
                ->orWhere('id', 'like', '%' . $this->search . '%')
                ->orWhere('price', 'like', '%' . $this->search . '%')
                ->orWhere('quantity', 'like', '%' . $this->search . '%');
        }

        $products = $query->paginate(20);

        $categories = Category::all();
        return view('livewire.manager.sales-table', compact('products', 'categories'));
    }
}
