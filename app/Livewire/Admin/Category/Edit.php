<?php

namespace App\Livewire\Admin\Category;

use App\Models\Category;
use Livewire\Component;

class Edit extends Component
{
    public $id, $name, $slug, $description, $meta_title, $meta_keyword, $meta_description, $status;

    public function mount($id) {
        $editCat = Category::find($id);
        
        if($editCat) {
            $this->id = $editCat->id;  
            $this->name = $editCat->name;     
            $this->slug = $editCat->slug;
            $this->description = $editCat->description;

            $this->meta_title = $editCat->meta_title;     
            $this->meta_keyword = $editCat->meta_keyword;     
            $this->meta_description = $editCat->meta_description;      
        }
    }

    public function render()
    {
        return view('livewire.admin.category.edit');
    }
}
