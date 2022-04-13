<?php

namespace App\Http\Livewire\Category;

use AliBayat\LaravelCategorizable\Category;
use Livewire\Component;

class CategoryList extends Component
{
    public $categories;

    protected $listeners = [
        'categoryAdded' => 'mount',
    ];

    public function mount()
    {
        $this->categories = Category::all();
    }

    public function render()
    {
        return view('livewire.category.category-list');
    }
}