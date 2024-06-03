<div wire:ignore.self class="modal fixed z-20 h-screen w-full left-0 top-0 flex justify-center items-center bg-black bg-opacity-50 hidden">
    <div class="bg-white rounded-lg shadow-sm w-1/3 px-6 py-6">

        <!-- Header -->
        <div class="mb-5">
            <h2 class="h4">Add Category</h2>
        </div>

        <hr>

        <form class="mt-5" wire:submit.prevent="storeCategory">

            <div class="mb-4">
                <label class="block mb-2 text-sm font-medium">Category Name</label>
                <input type="text" wire:model.defer="name" required class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg block w-full px-5 py-2" placeholder="Input Category" required />
            </div>

            <div class="mb-4">
                <label class="block mb-2 text-sm font-medium">Category Slug</label>
                <input type="text" wire:model.defer="slug" required class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg block w-full px-5 py-2" placeholder="Input Category Slug" required />
            </div>

            <div class="mb-4">
                <label class="block mb-2 text-sm font-medium">Description</label>
                <textarea  wire:model.defer="description" required class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg block w-full px-5 py-2" placeholder="Input Description" required></textarea>
            </div>

            <div class="mb-4 flex items-start">
                <label class="block mb-2 text-sm font-medium mr-3">Status</label>
                <input type="checkbox" wire:model.defer="status" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg w-5 h-5" placeholder="Input Category" required />
            </div>

        </form>


        <div class="flex justify-end items-center w-100 border-t p-3">
            <button type="button" class="btn-gray mr-3 closeModal">Cancel</button>
            <button type="submit" class="btn-shadow">Save</button>
        </div>
    </div>
</div>