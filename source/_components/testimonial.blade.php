<div class="flex flex-col">
    <div class="bg-white border border-gray-100 h-64 md:h-56 shadow-xl p-5 relative">
        <x-icon name="quote" class="text-blue-500 w-20 h-20 opacity-50 absolute right-0 bottom-0"></x-icon>
        <div class="testimonial">{!! $content !!}</div>
    </div>
    <div class="flex flex-row items-center mt-8">
        <div class="w-16 h-16">
            <img class="w-full h-auto object-cover rounded-full" src="{{ $testimonial->img }}" alt="">
        </div>
        <div class="flex flex-col ml-5">
            <h5 class="text-blue-500 font-bold uppercase">{{ $testimonial->author }}</h5>
            <a target="_blank" href="{{ $testimonial->link }}" class="font-medium text-gray-200 uppercase text-xs pb-1 border-b-2 border-transparent hover:border-blue-500 hover:text-blue-500">{{ $testimonial->position }}</a>
        </div>
    </div>
</div>
