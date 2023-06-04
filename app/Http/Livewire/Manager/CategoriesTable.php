<?php

namespace App\Http\Livewire\Manager;

use App\Models\Category;
use Livewire\Component;

class CategoriesTable extends Component
{
    public function render()
    {
        $categories = Category::latest()->get();
        return view('livewire.manager.categories-table', compact('categories'));
    }
}
