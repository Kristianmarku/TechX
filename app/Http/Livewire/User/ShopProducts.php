<?php
namespace App\Http\Livewire\User;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class ShopProducts extends Component
{
    public $filterCategory = 0;
    public $currentCategoryIndex = 0;
    public $categoriesPerPage = 4;
    public $search;

    public function updateFilterCategory($cat_id)
    {
        $this->filterCategory = $cat_id;
    }

    public function updateCategoryIndex($direction)
    {
        if ($direction === 'prev') {
            $this->currentCategoryIndex--;
        } else {
            $this->currentCategoryIndex++;
        }
    }

    public function render()
    {
        $categories = Category::latest()->get();
        $totalCategories = $categories->count();
        $startIndex = $this->currentCategoryIndex * $this->categoriesPerPage;
        $endIndex = $startIndex + $this->categoriesPerPage;
        $latestCategories = $categories->slice($startIndex, $endIndex);
        $this->currentCategoryIndex = min(max($this->currentCategoryIndex, 0), floor($totalCategories / $this->categoriesPerPage));

        $query = Product::orderBy('created_at', 'desc');

        if ($this->filterCategory) {
            $query->where('category_id', $this->filterCategory);
        }

        if($this->search) {
            $query->where('name', 'like', '%' . $this->search . '%')
                ->orWhere('description', 'like', '%' . $this->search . '%')
                ->orWhere('price', 'like', '%' . $this->search . '%');
        }

        $products = $query->get();

        return view('livewire.user.shop-products', compact('products', 'latestCategories', 'totalCategories'));
    }
}
