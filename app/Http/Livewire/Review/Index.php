<?php

namespace App\Http\Livewire\Review;

use Livewire\Component;

class Index extends Component
{
    public $pageTitle;

    public function mount()
    {
        $this->pageTitle = __('review');
    }

    public function render()
    {
        return view('livewire.review.index')->layout('layouts.front');
    }
}
