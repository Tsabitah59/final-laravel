
<div class="container mx-auto mt-[20px]">
     @foreach($trendingStory as $story)
     <!-- image -->
     <div class="md:h-[444px] py-12 flex items-center relative overflow-hidden">
          <img src="{{ assets($story->storyImage->image) }}" alt="">
     </div>

     <!-- judul -->
     <div class="flex flex-row">
          <h1 class="text-black mt-[90px] text-center mx-auto text-[25px] xl:text-[43px] font-semibold" 
          style="font-family: 'Quicksand', sans-serif; font-weight: 600;">{{ $story->name}}</h1>
     </div>

     <!-- cerita -->
     <div class="flex flex-row">
          <div class="mt-[30px] mb-[50px] bg-satu p-4 rounded-xl w-full">
               <p class="desc text-[12px]" style="font-family: 'Quicksand', sans-serif; font-weight: 600;">{{ $story->synopsis}}</p>
          </div>
     </div>
</div>