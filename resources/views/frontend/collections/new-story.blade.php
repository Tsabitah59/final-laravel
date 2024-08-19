<x-app-layout>
    <div class="bg-[#1B3764] w-full h-[250px] p-[50px]">
        <h2 class="font-semibold text-[40px] text-white leading-tight text-center">
            {{ __('New Story') }}
        </h2>
        <hr class="border-t-4 border-[#FFCA42] w-20 mt-2 mx-auto">
        <p class="text-center mt-4 text-white"> Let's read some fairy tale legends from our website, <br> increase your creativity by reading stories from this website.</p>
    </div>

    <!-- NewStory -->
    <section class="ml-[99px] itemm-center mx-auto">
        <!-- Card Body -->
        @if(isset($trendingStory) && count($trendingStory) > 0)
        <div class="card-body mx-auto mt-[40px]">
            <!-- Card -->
            <div class="card mx-auto flex gap-5 overflow-auto scrollbar-hide">

                <!-- Card Item -->
                @foreach($trendingStory as $story)
                <div class="group card-item shadow-sm shadow-transparent bg-white hover:bg-[#1B3764] w-[250px] h-[330px] pt-3 rounded-lg pl-3 pr-3 transition-all duration-700">
                    <a class="card-img">
                        <img src="{{ $story->image }}" alt="" class="w-[223px] h-[156px] mx-auto" style="border-radius: 10px 10px 0 0;">
                    </a>
                    <div class="text-card">
                        <h3 class="mt-[9px] text-[#1B3764]  group-hover:text-white text-[18px] transition-all duration-700" style="font-family: 'Quicksand', sans-serif; font-weight: 600;">{{ $story->name}}</h3>
                        <p class="desc text-[12px] text-[#1B3764]  group-hover:text-white mt-3 transition-all duration-700">{{ $story->synopsis }}</p>
                    </div>
                    <div class="card-btn flex gap-[30px] mt-6 items-center">
                        <div>
                            <a href="{{ url($story->slug) }}" class="btn mt-5 text-white bg-[#1B3764]  group-hover:bg-[#FFCA42] rounded-full px-7 py-2 transition-all duration-700">Read More</a>
                        </div>
                        <div class="flex gap-3">
                            <i class="ri-heart-3-fill text-[#FFCA42]  group-hover:text-white text-xl transition-all duration-700"></i>
                            <i class="ri-bookmark-fill text-[#FFCA42]  group-hover:text-white text-xl transition-all duration-700"></i>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @else
        <h3>No new stories available.</h3>
        @endif
    </section>

    <x-footer>
    </x-footer>
</x-app-layout>