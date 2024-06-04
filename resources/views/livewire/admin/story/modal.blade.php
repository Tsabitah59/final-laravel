<!-- Add Modal -->
<div wire:ignore.self id="addCategoryModal" class="modal fixed z-20 h-screen w-full left-0 top-0 flex justify-center items-center bg-black bg-opacity-50 hidden">
    <div class="bg-white rounded-lg shadow-sm w-1/3 px-6 py-6">

        <!-- Header -->
        <div class="mb-5">
            <h2 class="h4">Add Story</h2>
        </div>

        <hr>

        <form class="mt-5" wire:submit.prevent="storeCategory">
            <div class="overflow-y-scroll h-96">
                <div class="atas">
                    <div class="mb-4">
                        <label class="block mb-2 text-sm font-medium">Story Title</label>
                        <input type="text" wire:model.defer="name" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg block w-full px-5 py-2" placeholder="Input Title" />
                        @error('name')
                        <small class="text-red-600">{{ $message }}</small>
                        @enderror
                    </div>
        
                    <div class="mb-4">
                        <label class="block mb-2 text-sm font-medium">Story Slug</label>
                        <input type="text" wire:model.defer="slug" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg block w-full px-5 py-2" placeholder="Input Story Slug" required />
                        @error('slug')
                        <small class="text-red-600">{{ $message }}</small>
                        @enderror
                    </div>
        
                    <div class="mb-4">
                        <label class="block mb-2 text-sm font-medium">Synopsis</label>
                        <textarea wire:model.defer="synopsis" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg block w-full px-5 py-2" placeholder="Input Synopsis" required></textarea>
                        @error('synopsis')
                        <small class="text-red-600">{{ $message }}</small>
                        @enderror
                    </div>
                      
                    <div class="mb-4">
                        <label class="block mb-2 text-sm font-medium">Image</label>
                        <input type="file" wire:model.defer="image" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg block w-full px-5 py-2" required />
                        @error('image')
                        <small class="text-red-600">{{ $message }}</small>
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
                        <small class="text-red-600">{{ $message }}</small>
                        @enderror
                    </div>
        
                    <div class="mb-4">
                        <label class="block mb-2 text-sm font-medium">Meta Keyword</label>
                        <input type="text" wire:model.defer="meta_keyword" required class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg block w-full px-5 py-2" placeholder="Input Meta Keyword" required />
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
                    <label class="block mb-2 text-sm font-medium mr-3">Trending</label>
                    <input type="checkbox" wire:model.defer="status" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg w-5 h-5" />
                </div>

                <div class="mb-4 flex items-start">
                    <label class="block mb-2 text-sm font-medium mr-3">Status</label>
                    <input type="checkbox" wire:model.defer="status" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg w-5 h-5" />
                </div>
            </div>


            <div class="flex justify-end items-center w-100 border-t p-3">
            <button type="button" wire:click="closeModal" class="btn-gray mr-3 closeModal">Cancel</button>
            <button type="submit" class="btn-shadow">Save</button>
        </div>
        </form>
        
    </div>
</div>