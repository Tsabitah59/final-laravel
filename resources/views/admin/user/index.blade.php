@extends('layouts.adminhome')

@section('content')
<div class="bg-gray-100 flex-1 p-6 md:mt-16">

    <div class="flex justify-between mb-5 items-center">
        <h1 class="text-3xl">Users</h1>
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
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3 text-lg">
                        Join
                    </th>
                    <th scope="col" class="px-6 py-3 text-lg">
                        Update
                    </th>
                </tr>
            </thead>

            <tbody class="bg-white border border-gray-300">
                @foreach($users as $user)
                <tr class="border-b-gray-300">
                    <td class="px-6 py-4">
                        {{ $user->id }}
                    </td>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $user->name }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $user->email }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $user->created_at }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $user->updated_at }}
                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>



</div>
@endsection