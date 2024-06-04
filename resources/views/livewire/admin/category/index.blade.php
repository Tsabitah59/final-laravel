<div class="bg-gray-100 flex-1 p-6 md:mt-16">

    @include('livewire.admin.category.modal')

    <div class="flex justify-between mb-5 items-center">
        <h1 class="text-3xl">Category</h1>
        <button class="btn-shadow showModal">Add Category</button>
    </div>

    <hr>

    <div class="relative overflow-x-auto mt-5">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3 text-lg">
                        ID
                    </th>
                    <th scope="col" class="px-6 py-3 text-lg">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3 text-lg">
                        Status
                    </th>
                    <th scope="col" class="px-6 py-3 text-lg">
                        Action
                    </th>
                </tr>
            </thead>

            <tbody class="bg-white border border-gray-300">
                @forelse($categories as $category)
                <tr class="border-b-gray-300">
                    <td class="px-6 py-4">
                        {{ $category->id }}
                    </td>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $category->name }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $category->status == '1' ? 'Hidden' : 'Visible' }}
                    </td>
                    <td class="px-6 py-4 flex gap-3">
                        <a href="#" wire:click="editBrand" data-bs-target="#updateCategoryModal" class="font-bold text-green-600 hover:underline">Edit</a>
                        <a href="#" class="font-bold text-red-600 hover:underline">Delete</a>
                    </td>
                </tr>
                @empty
                <p>No Category Found</p>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@push('script')
<script>
    const modal = document.querySelector('.modal');
    const showModal = document.querySelector('.showModal');
    const closeModal = document.querySelectorAll('.closeModal');

    showModal.addEventListener('click', function() {
        modal.classList.remove('hidden')
    });

    closeModal.forEach(close => {
        close.addEventListener('click', function() {
            modal.classList.add('hidden')
        });
    });

    window.addEventListener('closeModal', event => {
        $('#addCategoryModal').modal('hide');
    })
</script>
@endpush