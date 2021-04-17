<?php

namespace App\Http\Livewire;

use Illuminate\Support\Str;
use Livewire\Component;

class Slug extends Component
{
    public $title = '';

    public $slug = '';

    public function updatedTitle()
    {
        $this->slug = Str::slug($this->title);
    }

    public function render()
    {
        return view('livewire.slug');
    }
}
