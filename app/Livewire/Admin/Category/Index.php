<?php

namespace App\Livewire\Admin\Category;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Str;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'tailwind';

    public $id, $name, $slug, $description, $meta_title, $meta_keyword, $meta_description, $status;

    public function rules() {
        return [
            'name'          => 'required|string',
            'slug'          => 'required|string',
            'description'   => 'required|string|max:500',
            
            'meta_title'        => 'required|string',
            'meta_keyword'      => 'required|string',
            'meta_description'  => 'required|string|max:500',

            'status'  => 'nullable',
        ];

    }

    // Reset Form
    public function resetInput() {
        $this->name = NULL;
        $this->slug = NULL;
        $this->description = NULL;

        $this->meta_title = NULL;
        $this->meta_keyword = NULL;
        $this->meta_description = NULL;

        $this->status = NULL;
    }

    public function storeCategory() {
        $validatedData = $this->validate();

        Category::create([
            'name'          => $this->name,
            'slug'          => Str::slug($this->slug),
            'description'   =>  $this->description,

            'meta_title'        =>  $this->meta_title,
            'meta_keyword'      =>  $this->meta_keyword,
            'meta_description'  =>  $this->meta_description,

            'status'         => $this->status == true ? '1' : '0'
        ]);

        session()->flash('message', 'Category Added Successfully');
        $this->dispatch('closeModal');
        $this->resetInput();
        $this->resetValidation();
    }

    public function closeModal() {
        $this->resetInput();
    }

    public function openModal() {
        $this->resetInput();
    }

    public function editCategory(int $id) {
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

    public function destroyCategory($id) {

        if($id){
            $deleteCat = Category::find($id);
            $deleteCat->delete();
            session()->flash('message', 'Category Deleted Successfully');
        }
    }

    public function render() {
        $categories = Category::orderBy('id', 'DESC')->paginate(10);
        return view('livewire.admin.category.index', ['categories' => $categories])
                    ->extends('layouts.adminhome')
                    ->section('content');
    }
}
