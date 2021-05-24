<?php

namespace App\Http\Livewire;

use App\Models\Tag;
use Livewire\Component;

class Tags extends Component
{
    public $tags;

    public function mount()
    {
        $this->tags = Tag::all();
    }

    public function render()
    {
        return view('includes.cloud-tags');
    }
}
