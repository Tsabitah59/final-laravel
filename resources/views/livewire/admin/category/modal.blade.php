<!-- Add Modal -->
<div wire:ignore.self class="modal fixed z-20 h-screen w-full left-0 top-0 flex justify-center items-center bg-black bg-opacity-50 hidden">
    <div class="bg-white rounded-lg shadow-sm w-1/3 px-6 py-6">

        <!-- Header -->
        <div class="mb-5">
            <h2 class="h4">Add Category</h2>
        </div>

        <hr>

        <form class="mt-5" wire:submit.prevent="storeCategory">
            <div class="overflow-y-scroll h-96">
                <div class="atas">
                    <div class="mb-4">
                        <label class="block mb-2 text-sm font-medium">Category Name</label>
                        <input type="text" wire:model.defer="name" required class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg block w-full px-5 py-2" placeholder="Input Category" required />
                        @error('name')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
        
                    <div class="mb-4">
                        <label class="block mb-2 text-sm font-medium">Category Slug</label>
                        <input type="text" wire:model.defer="slug" required class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg block w-full px-5 py-2" placeholder="Input Category Slug" required />
                        @error('slug')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
        
                    <div class="mb-4">
                        <label class="block mb-2 text-sm font-medium">Description</label>
                        <textarea wire:model.defer="description" required class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg block w-full px-5 py-2" placeholder="Input Description" required></textarea>
                        @error('description')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <br>
    
                <div class="bawah">
                    <h6 class="text-xl mb-3">SEO Tags</h6>
                    
                    <div class="mb-4">
                        <label class="block mb-2 text-sm font-medium">Meta Title</label>
                        <input type="text" wire:model.defer="meta_title" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg block w-full px-5 py-2" placeholder="Input Meta Title" required />
                        @error('meta_title')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
        
                    <div class="mb-4">
                        <label class="block mb-2 text-sm font-medium">Meta Keyword</label>
                        <input type="text" wire:model.defer="meta_keyword" required class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg block w-full px-5 py-2" placeholder="Input Meta Keyword" required />
                        @error('meta_keyword')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
        
                    <div class="mb-4">
                        <label class="block mb-2 text-sm font-medium">Meta Description</label>
                        <textarea wire:model.defer="meta_description" required class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg block w-full px-5 py-2" placeholder="Input Meta Description" required></textarea>
                        @error('meta_description')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <div class="mb-4 flex items-start">
                    <label class="block mb-2 text-sm font-medium mr-3">Status</label>
                    <input type="checkbox" wire:model.defer="status" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg w-5 h-5" placeholder="Input Category" />
                </div>
            </div>


            <div class="flex justify-end items-center w-100 border-t p-3">
            <button type="button" wire:click="closeModal" class="btn-gray mr-3 closeModal">Cancel</button>
            <button type="submit" class="btn-shadow">Save</button>
        </div>
        </form>
        
    </div>
</div>

<!-- Edit Modal -->
<div wire:ignore.self id="updateCategoryModal" class="modal fixed z-20 h-screen w-full left-0 top-0 flex justify-center items-center bg-black bg-opacity-50 hidden">
    <div class="bg-white rounded-lg shadow-sm w-1/3 px-6 py-6">

        <!-- Header -->
        <div class="mb-5">
            <h2 class="h4">Edit Category</h2>
        </div>

        <hr>

        <form class="mt-5" wire:submit.prevent="updateCategory">
            <div class="overflow-y-scroll h-96">
                <div class="atas">
                    <div class="mb-4">
                        <label class="block mb-2 text-sm font-medium">Category Name</label>
                        <input type="text" wire:model.defer="name" required class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg block w-full px-5 py-2" placeholder="Input Category" required />
                        @error('name')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
        
                    <div class="mb-4">
                        <label class="block mb-2 text-sm font-medium">Category Slug</label>
                        <input type="text" wire:model.defer="slug" required class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg block w-full px-5 py-2" placeholder="Input Category Slug" required />
                        @error('slug')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
        
                    <div class="mb-4">
                        <label class="block mb-2 text-sm font-medium">Description</label>
                        <textarea wire:model.defer="description" required class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg block w-full px-5 py-2" placeholder="Input Description" required></textarea>
                        @error('description')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <br>
    
                <div class="bawah">
                    <h6 class="text-xl mb-3">SEO Tags</h6>
                    
                    <div class="mb-4">
                        <label class="block mb-2 text-sm font-medium">Meta Title</label>
                        <input type="text" wire:model.defer="meta_title" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg block w-full px-5 py-2" placeholder="Input Meta Title" required />
                        @error('meta_title')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
        
                    <div class="mb-4">
                        <label class="block mb-2 text-sm font-medium">Meta Keyword</label>
                        <input type="text" wire:model.defer="meta_keyword" required class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg block w-full px-5 py-2" placeholder="Input Meta Keyword" required />
                        @error('meta_keyword')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
        
                    <div class="mb-4">
                        <label class="block mb-2 text-sm font-medium">Meta Description</label>
                        <textarea wire:model.defer="meta_description" required class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg block w-full px-5 py-2" placeholder="Input Meta Description" required></textarea>
                        @error('meta_description')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <div class="mb-4 flex items-start">
                    <label class="block mb-2 text-sm font-medium mr-3">Status</label>
                    <input type="checkbox" wire:model.defer="status" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg w-5 h-5" placeholder="Input Category" />
                </div>
            </div>


            <div class="flex justify-end items-center w-100 border-t p-3">
            <button type="button" wire:click="closeModal" class="btn-gray mr-3 closeModal">Cancel</button>
            <button type="submit" class="btn-shadow">Update</button>
        </div>
        </form>
        
    </div>
</div>