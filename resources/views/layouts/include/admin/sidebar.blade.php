<div id="sideBar" class="relative flex flex-col flex-wrap bg-white border-r border-gray-300 p-6 flex-none w-64 md:-ml-64 md:fixed md:top-0 md:z-30 md:h-screen md:shadow-xl animated faster">


    <!-- sidebar content -->
    <div class="flex flex-col">

        <!-- sidebar toggle -->
        <div class="text-right hidden md:block mb-4">
            <button id="sideBarHideBtn">
                <i class="fad fa-times-circle"></i>
            </button>
        </div>
        <!-- end sidebar toggle -->

        <!-- link -->
        <a href="{{ route('home') }}" class="mb-3 capitalize font-medium hover:text-teal-600 transition ease-in-out duration-500">
            <i class="ri-dashboard-fill mr-2"></i>
            Dashboard
        </a>
        <!-- end link -->

        <!-- link -->
        <a href="{{ route('category') }}" class="mb-3 capitalize font-medium hover:text-teal-600 transition ease-in-out duration-500">
            <i class="ri-menu-search-fill mr-2"></i>
            Category
        </a>
        <!-- end link -->

        <!-- link -->
        <a href="{{ route('story') }}" class="mb-3 capitalize font-medium hover:text-teal-600 transition ease-in-out duration-500">
            <i class="ri-book-fill mr-2"></i>
            Story
        </a>
        <!-- end link -->

        <!-- link -->
        <a href="{{ route('user') }}" class="mb-3 capitalize font-medium hover:text-teal-600 transition ease-in-out duration-500">
            <i class="ri-book-fill mr-2"></i>
            User
        </a>
        <!-- end link -->

        <!-- link -->
        <a href="{{ route('story') }}" class="mb-3 capitalize font-medium hover:text-teal-600 transition ease-in-out duration-500">
            <i class="ri-book-fill mr-2"></i>
            Setting
        </a>
        <!-- end link -->





    </div>
    <!-- end sidebar content -->

</div>