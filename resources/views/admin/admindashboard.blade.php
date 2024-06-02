@extends('layouts.adminhome')

@section('content')



<div class="bg-gray-100 flex-1 p-6 md:mt-16">
    <div>
        <h1 class="text-3xl">Dashboard</h1>
        <p class="mb-5">Hey there, welcome to Dhistoire Admin!</p>
    </div>

    <hr><br>

    <!-- General Report -->
    <div class="grid grid-cols-4 gap-6 xl:grid-cols-1">
        <!-- card -->
        <div class="report-card">
            <div class="card">
                <div class="card-body flex flex-col">

                    <!-- top -->
                    <div class="flex flex-row justify-between items-center">
                        <i class="ri-menu-search-fill h4 text-indigo-700"></i>
                    </div>
                    <!-- end top -->

                    <!-- bottom -->
                    <div class="mt-6">
                        <h1 class="h5 num-4"></h1>
                        <p>items sales</p>
                    </div>
                    <!-- end bottom -->

                </div>
            </div>
            <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
        </div>
        <!-- end card -->
        <!-- card -->
        <div class="report-card">
            <div class="card">
                <div class="card-body flex flex-col">

                    <!-- top -->
                    <div class="flex flex-row justify-between items-center">
                        <i class="ri-menu-search-fill h4 text-indigo-700"></i>
                    </div>
                    <!-- end top -->

                    <!-- bottom -->
                    <div class="mt-6">
                        <h1 class="h5 num-4"></h1>
                        <p>items sales</p>
                    </div>
                    <!-- end bottom -->

                </div>
            </div>
            <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
        </div>
        <!-- end card -->
        <!-- card -->
        <div class="report-card">
            <div class="card">
                <div class="card-body flex flex-col">

                    <!-- top -->
                    <div class="flex flex-row justify-between items-center">
                        <i class="ri-menu-search-fill h4 text-indigo-700"></i>
                    </div>
                    <!-- end top -->

                    <!-- bottom -->
                    <div class="mt-6">
                        <h1 class="h5 num-4"></h1>
                        <p>items sales</p>
                    </div>
                    <!-- end bottom -->

                </div>
            </div>
            <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
        </div>
        <!-- end card -->
        <!-- card -->
        <div class="report-card">
            <div class="card">
                <div class="card-body flex flex-col">

                    <!-- top -->
                    <div class="flex flex-row justify-between items-center">
                        <i class="ri-menu-search-fill h4 text-indigo-700"></i>
                    </div>
                    <!-- end top -->

                    <!-- bottom -->
                    <div class="mt-6">
                        <h1 class="h5 num-4"></h1>
                        <p>items sales</p>
                    </div>
                    <!-- end bottom -->

                </div>
            </div>
            <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
        </div>
        <!-- end card -->





    </div>
    <!-- End General Report -->




</div>
@endsection