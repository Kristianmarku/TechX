<?php

namespace App\Http\Livewire\Manager;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class ProductsTable extends Component
{
    public $search;
    public $filterCategory;
    public function render()
    {
        $query = Product::orderBy('created_at', 'desc');

        if($this->filterCategory){
            $query->where('category_id', $this->filterCategory);
        }

        if($this->search){
            $query->where('name', 'like', '%' . $this->search . '%')
                ->orWhere('description', 'like', '%' . $this->search . '%')
                ->orWhere('price', 'like', '%' . $this->search . '%');
        }

        $products = $query->get();

        $categories = Category::all();

        return view('livewire.manager.products-table', compact('products', 'categories'));
    }
}
