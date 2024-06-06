@extends('layouts.adminhome')

@section('content')
<div class="bg-gray-100 flex-1 p-6 md:mt-16">

     <div class="flex justify-between mb-5 items-center">
          <h1 class="text-3xl">Edit Category</h1>
          <a href="{{ route('category') }}" class="btn-shadow showModal">Back</a>
     </div>

     <hr>

     <div class="relative overflow-x-auto mt-5">
          <form class="mt-5" wire:submit.prevent="updateCategory" action="" method="POST">
               <input type="hidden" wire:model="Id">
               <div class="h-auto">
                    <div>
                         <div class="mb-4">
                              <label class="block mb-2 text-sm font-medium">Category Name</label>
                              <input type="text" name="name" wire:model.defer="name" required class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg block w-full px-5 py-2" placeholder="Input Category" required />
                              @error('name')
                              <small class="text-red-600">{{ $message }}</small>
                              @enderror
                         </div>

                         <div class="mb-4">
                              <label class="block mb-2 text-sm font-medium">Category Slug</label>
                              <input type="text" name="slug" wire:model.defer="slug" required class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg block w-full px-5 py-2" placeholder="Input Category Slug" required />
                              @error('slug')
                              <small class="text-red-600">{{ $message }}</small>
                              @enderror
                         </div>

                         <div class="mb-4">
                              <label class="block mb-2 text-sm font-medium">Description</label>
                              <textarea name="description" wire:model.defer="description" required class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg block w-full px-5 py-2" placeholder="Input Description" required></textarea>
                              @error('description')
                              <small class="text-red-600">{{ $message }}</small>
                              @enderror
                         </div>
                    </div>

                    <br>

                    <div>
                         <h6 class="text-xl mb-3">SEO Tags</h6>
                         
                         <div class="mb-4">
                              <label class="block mb-2 text-sm font-medium">Meta Title</label>
                              <input wire:model.defer="meta_title" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg block w-full px-5 py-2" placeholder="Input Meta Title" required />
                              @error('meta_title')
                              <small class="text-red-600">{{ $message }}</small>
                              @enderror
                         </div>

                         <div class="mb-4">
                              <label class="block mb-2 text-sm font-medium">Meta Keyword</label>
                              <input type="text"vwire:model.defer="meta_keyword" required class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg block w-full px-5 py-2" placeholder="Input Meta Keyword" required />
                              @error('meta_keyword')
                              <small class="text-red-600">{{ $message }}</small>
                              @enderror
                         </div>

                         <div class="mb-4">
                              <label class="block mb-2 text-sm font-medium">Meta Description</label>
                              <textarea wire:model.defer="meta_description" required class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg block w-full px-5 py-2" placeholder="Input Meta Description" required></textarea>
                              @error('meta_description')
                              <small class="text-red-600">{{ $message }}</small>
                              @enderror
                         </div>
                    </div>

                    <div class="mb-4 flex items-start">
                         <label class="block mb-2 text-sm font-medium mr-3">Status</label>
                         <input type="checkbox" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg w-5 h-5" placeholder="Input Category" />
                    </div>
               </div>


               <div class="flex justify-end items-center w-100 border-t p-3">
                    <button type="submit" href="{{ route('category') }}" class="btn-shadow">Save</button>
               </div>
          </form>
     </div>
</div>
@endsection
