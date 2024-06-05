<?php

namespace App\Livewire\Admin\Story;

use App\Models\Category;
use App\Models\Story;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'tailwind';

    use WithFileUploads;

    public $category_id, $id, $name, $slug, $synopsis, $story, $image, $meta_title, $meta_keyword, $meta_description, $trending, $status;

    public function rules()
    {
        return [
            'category_id'   => 'required|integer',
            'name'          => 'required|string',
            'slug'          => 'required|string',
            'synopsis'      => 'required|string|max:1000',
            'story'         => 'required|string',
            'image'         => 'required|image|mimes:jpeg,jpg,png,gif|max:2048',

            'meta_title'        => 'required|string',
            'meta_keyword'      => 'required|string',
            'meta_description'  => 'required|string|max:500',

            'trending'  => 'nullable',
            'status'    => 'nullable',
        ];
    }

    // Reset Form
    public function resetInput()
    {
        $this->category_id = NULL;
        $this->name = NULL;
        $this->slug = NULL;
        $this->synopsis = NULL;
        $this->story = NULL;
        $this->image = NULL;

        $this->meta_title = NULL;
        $this->meta_keyword = NULL;
        $this->meta_description = NULL;

        $this->trending = NULL;
        $this->status = NULL;
    }

    public function storeStory() {
        $validatedData = $this->validate();

        Story::create([
            'category_id'   =>$this->category_id,
            'name'          => $this->name,
            'slug'          => Str::slug($this->slug),
            'synopsis'      =>  $this->synopsis,
            'story'         =>  $this->story,

            'meta_title'        =>  $this->meta_title,
            'meta_keyword'      =>  $this->meta_keyword,
            'meta_description'  =>  $this->meta_description,

            'trending'         => $this->trending == true ? '1' : '0',
            'status'         => $this->status == true ? '1' : '0'
        ]);

        if($this->image){
            $validatedData['image'] = $this->image->store('uploads', 'public');
        }

        session()->flash('message', 'Story Added Successfully');
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

    public function render()
    {
        $categories = Category::where('status', '0')->get();
        $stories = Story::orderBy('id', 'DESC')->paginate(10);
        return view('livewire.admin.story.index', ['stories' => $stories, 'categories' => $categories])
                    ->extends('layouts.adminhome')
                    ->section('content');;
    }
}
