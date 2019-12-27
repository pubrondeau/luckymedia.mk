<div class="flex flex-col">
    <div class="bg-white border border-gray-100 h-56 shadow-xl p-10 relative">
        <v-icon class="text-blue-500 w-20 h-20 opacity-50 absolute -mt-20" name="quote"></v-icon>
        <p class="font-medium text-gray-200 text-justify">{{ $body }}</p>
    </div>
    <div class="flex flex-row items-center mt-8">
        <div class="w-16 h-16">
            <img class="w-full h-auto object-cover rounded-full" src="{{ $img }}" alt="">
        </div>
        <div class="flex flex-col ml-5">
            <h5 class="text-blue-500 font-bold uppercase">{{ $author }}</h5>
            <p class="font-medium text-gray-200 uppercase text-xs">{{ $position }}</p>
        </div>
    </div>
</div>