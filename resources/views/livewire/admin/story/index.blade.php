<div class="bg-gray-100 flex-1 p-6 md:mt-16">

    @include('livewire.admin.story.modal')

    
    @if (session('message'))
            <div class="alert alert-default mb-5">{{ session('message') }}</div>
    @endif


    <div class="flex justify-between mb-5 items-center">
        <h1 class="text-3xl">Story</h1>
        <button class="btn-shadow showModal">Add Story</button>
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
                        Category
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
                @forelse($stories as $story)
                <tr class="border-b-gray-300">
                    <td class="px-6 py-4">
                        {{ $story->id }}
                    </td>

                    <td class="px-6 py-4">
                    </td>

                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $story->name }}
                    </th>
                    <td class="px-6 py-4">
                    {{ $story->status == '1' ? 'Hidden' : 'Visible' }}
                    </td>
                    <td class="px-6 py-4 flex gap-3">
                        <a href="#" class="font-medium text-white bg-green-500 px-2 py-1 hover:font-bold rounded">Edit</a>
                        <a href="#" wire:click="destroyStory({{ $story->id }})" class="font-medium text-white bg-red-600 px-2 py-1 hover:font-bold rounded">Delete</a>
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
    document.querySelectorAll('.showModal').forEach(button => {
        button.addEventListener('click', function() {
            document.querySelector('.modal').classList.remove('hidden');
        });
    });

    document.querySelectorAll('.closeModal').forEach(close => {
        close.addEventListener('click', function() {
            document.querySelector('.modal').classList.add('hidden');
        });
    });
</script>
@endpush