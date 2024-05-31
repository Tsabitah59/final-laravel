@extends('layouts.adminhome')

@section('content')
<div class="bg-gray-100 flex-1 p-6 md:mt-16">

    <div class="flex justify-between mb-5 items-center">
        <h1 class="text-3xl">Category</h1>
        <button class="btn-shadow">Add Category</button>
    </div>

    <hr>

    <div class="relative overflow-x-auto rounded-lg mt-5">
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
            <tbody class="bg-white">
                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50">
                    <td class="px-6 py-4">
                        Silver
                    </td>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Apple MacBook Pro 17"
                    </th>
                    <td class="px-6 py-4">
                        Laptop
                    </td>
                    <td class="px-6 py-4">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>



</div>
<!-- end quick Info -->


</div>
@endsection