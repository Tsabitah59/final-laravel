<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <!-- Category -->
    <section class="category mx-auto mt-[60px]">
        <div class="card flex bg-white w-[1336px] h-[140px] mx-auto p-[20px] gap-[60px] rounded-xl">

<<<<<<< HEAD
    <!-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in as user") }}
=======
            <!-- Image Text -->
            <div class="ml-[190px]">
                <div class="">
                    <img src="" alt="" class="w-[100px] h-[100px]">
>>>>>>> 5c8209f58507bc2abab36124b4adb687bcc45aaa
                </div>
                <h4></h4>
            </div>

            <!-- Image Text -->
            <div>
                <div class="">
                    <img src="" alt="" class="w-[100px] h-[100px]">
                </div>
                <h4></h4>
            </div>

            <!-- Image Text -->
            <div>
                <div class="">
                    <img src="" alt="" class="w-[100px] h-[100px]">
                </div>
                <h4></h4>
            </div>

            <!-- Image Text -->
            <div>
                <div class="">
                    <img src="" alt="" class="w-[100px] h-[100px]">
                </div>
                <h4></h4>
            </div>

            <!-- Image Text -->
            <div>
                <div class="">
                    <img src="" alt="" class="w-[100px] h-[100px]">
                </div>
                <h4></h4>
            </div>

            <!-- Image Text -->
            <div>
                <div class="">
                    <img src="" alt="" class="w-[100px] h-[100px]">
                </div>
                <h4></h4>
            </div>
        </div>
<<<<<<< HEAD
    </div> -->

    <!-- Slider -->
    <!-- Slider End -->

    <!-- Category -->
    <section class="category mx-auto mt-[60px]">
        <div class="card flex bg-white w-[1336px] h-[140px] mx-auto p-[20px] gap-[60px] rounded-xl">

            <!-- Image Text -->
            <div class="ml-[190px]">
                <div class="">
                    <img src="" alt="" class="w-[100px] h-[100px]">
                </div>
                <h4></h4>
            </div>

            <!-- Image Text -->
            <div>
                <div class="">
                    <img src="" alt="" class="w-[100px] h-[100px]">
                </div>
                <h4></h4>
            </div>

            <!-- Image Text -->
            <div>
                <div class="">
                    <img src="" alt="" class="w-[100px] h-[100px]">
                </div>
                <h4></h4>
            </div>

            <!-- Image Text -->
            <div>
                <div class="">
                    <img src="" alt="" class="w-[100px] h-[100px]">
                </div>
                <h4></h4>
            </div>
            
            <!-- Image Text -->
            <div>
                <div class="">
                    <img src="" alt="" class="w-[100px] h-[100px]">
                </div>
                <h4></h4>
            </div>

            <!-- Image Text -->
            <div>
                <div class="">
                    <img src="" alt="" class="w-[100px] h-[100px]">
                </div>
                <h4></h4>
            </div>
        </div>
=======
>>>>>>> 5c8209f58507bc2abab36124b4adb687bcc45aaa
    </section>
    <!-- Category -->

    <!-- New Story -->
    <section class="ml-[99px] itemm-center mx-auto">
        <h3 class="text-[27px] font-semibold mt-[70px] text-[#1B3764]">Trending Story</h3>
        <div class="flex">
            <hr class="border-t-4 border-[#1B3764] w-20 mt-2">
<<<<<<< HEAD
            <hr class="border-t-4 border-[#1B3764] w-20 mt-2">
=======
            <hr class="border-t-4 border-[#1B3764] w-16 mt-2">
>>>>>>> 5c8209f58507bc2abab36124b4adb687bcc45aaa
        </div>


        <!-- Card Body -->
        @if(isset($trendingStory) && count($trendingStory) > 0)
        <div class="card-body mx-auto mt-[40px]">
            <!-- Card -->
            <div class="card mx-auto flex gap-5">

                <!-- Card Item -->
                @foreach($trendingStory as $story)
                <div class="group card-item shadow-sm shadow-transparent bg-white hover:bg-[#1B3764] w-[250px] h-[330px] pt-3 rounded-lg pl-3 pr-3 transition-all duration-700">
                    <a class="card-img">
<<<<<<< HEAD
                        <img src="{{ assets($story->storyImage->image) }}" alt="" class="w-[223px] h-[156px] mx-auto" style="border-radius: 10px 10px 0 0;">
=======
                        <img src="" alt="" class="w-[223px] h-[156px] mx-auto" style="border-radius: 10px 10px 0 0;">
>>>>>>> 5c8209f58507bc2abab36124b4adb687bcc45aaa
                    </a>
                    <div class="text-card">
                        <h3 class="mt-[9px] text-[#1B3764]  group-hover:text-white text-[18px] transition-all duration-700" style="font-family: 'Quicksand', sans-serif; font-weight: 600;">{{ $story->name}}</h3>
                        <p class="desc text-[12px] text-[#1B3764]  group-hover:text-white mt-3 transition-all duration-700">{{ $story->synopsis}}</p>
                    </div>
                    <div class="card-btn flex gap-[30px]">
                        <div>
                            <button class="btn mt-5 text-white bg-[#1B3764]  group-hover:bg-[#FFCA42] rounded-full w-[144px] h-[30px] transition-all duration-700">Read More</button>
                        </div>
                        <div class="mt-[23px] flex gap-3">
                            <i class="ri-heart-3-fill text-[#FFCA42]  group-hover:text-white text-xl transition-all duration-700"></i>
                            <i class="ri-bookmark-fill text-[#FFCA42]  group-hover:text-white text-xl transition-all duration-700"></i>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @else
        <h3>No trending stories available.</h3>
        @endif
    </section>

</x-app-layout>