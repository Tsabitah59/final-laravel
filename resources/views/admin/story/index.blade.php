@extends('layouts.adminhome')

@section('content')
<div class="bg-gray-100 flex-1 p-6 md:mt-16">

    <div class="flex justify-between mb-5 items-center">
        <h1 class="text-3xl">Story</h1>
        <button class="btn-shadow">Add Story</button>
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
                        Category
                    </th>
                    <th scope="col" class="px-6 py-3 text-lg">
                        Title
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
                <tr class="border-b-gray-300">
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
                        Laptop
                    </td>
                    <td class="px-6 py-4 flex gap-3">
                        <a href="#" class="font-bold text-green-600 hover:underline">Edit</a>
                        <a href="#" class="font-bold text-red-600 hover:underline">Delete</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>



</div>
<!-- end quick Info -->


</div>
@endsection