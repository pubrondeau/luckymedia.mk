<div class="col-12 md:col-6 lg:col-11 xl:col-10 flex flex-col lg:flex-row mb-10">
    <a class="zoom overflow-hidden relative lg:w-md" style="height: 300px;" href="{{ $post->getUrl() }}">
        <img src="{{ $post->cover }}"
             class="zoom__img w-full h-full object-cover" alt="">
    </a>
    <div class="bg-white p-8 flex-1 flex flex-col justify-between">
        <div class="flex flex-col">
            <p class="text-xs uppercase font-semibold text-blue-500">{{ date('F j, Y', $post->date) }}</p>
            <a href="{{ $post->getUrl() }}" class="text-xl lg:text-3xl text-gray-500 font-bold hover:text-blue-500">
                {{ $post->title }}
            </a>
            <p class="text-sm text-gray-200 mt-1">
                {{ $post->getShortDescription() }}
            </p>
        </div>

        <div class="flex flex-row items-center mt-4 lg:mt-0">
            <x-icon name="tag" class="w-5 h-5 text-blue-500"></x-icon>
            <p class="text-gray-200 text-xs ml-2">{{ implode(", ", $post->tags) }}</p>
        </div>
    </div>
</div>
