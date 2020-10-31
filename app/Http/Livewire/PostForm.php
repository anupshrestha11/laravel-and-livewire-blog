<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class PostForm extends Component
{
    use WithFileUploads;

    public $title          = null;
    public $slug           = null;
    public $excerpt        = null;
    public $type           = null;
    public $featured_image = null;

    public function updated($field)
    {
        if ($this->title == '') {
            $this->slug = '';
        }
        $this->validateOnly($field, [
            'title'          => 'required|max:255',
            'slug'           => 'required|unique:posts|max:255',
            'excerpt'        => 'required',
            'featured_image' => 'required|image',
        ]);
    }

    public function updatedTitle($value)
    {

        $newValue    = strtolower($value);
        $pattren     = '/[^\w ]+/';
        $replacement = "";
        $initialSlug = preg_replace($pattren, $replacement, $newValue);
        $pattren     = '/ +/';
        $replacement = "-";
        $this->slug  = preg_replace($pattren, $replacement, $initialSlug);
        $this->validate([
            'slug' => 'required|unique:posts|max:255',
        ]);

    }

    public function render()
    {
        return view('livewire.post-form');
    }
}
