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

    <!-- Sales Overview -->
    <div class="card mt-6">

        <!-- header -->
        <div class="card-header flex flex-row justify-between">
            <h1 class="h6">Story Overview</h1>

            <div class="flex flex-row justify-center items-center">

                <a href="">
                    <i class="fad fa-chevron-double-down mr-6"></i>
                </a>

                <a href="">
                    <i class="fad fa-ellipsis-v"></i>
                </a>

            </div>

        </div>
        <!-- end header -->

        <!-- body -->
        <div class="card-body grid grid-cols-2 gap-6 lg:grid-cols-1">

            <div class="p-8">
                <h1 class="h2">5,337</h1>
                <p class="text-black font-medium">Story this month</p>

                <a href="#" class="btn-shadow mt-6">view details</a>

            </div>

            <div class="">
                <div id="sealsOverview"></div>
            </div>

        </div>
        <!-- end body -->

    </div>
    <!-- end Story Overview -->




</div>
@endsection