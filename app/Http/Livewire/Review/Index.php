<?php

namespace App\Http\Livewire\Review;

use App\Models\Review;
use Livewire\Component;

class Index extends Component
{

    public function render()
    {
        $reviews = Review::select('user_id', 'body', 'ratings')->get();
        return view('livewire.review.index', compact('reviews'))->layout('layouts.front');
    }
}
