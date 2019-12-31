<div class="bg-gray-50 py-24">
    <div class="container">
        <div class="row">
            <div class="lg:col-2">
                @include('_components.heading-sm', ['color' => 'black', 'title' => 'Technologies'])
            </div>
        </div>
        <div class="row items-center flex-col lg:flex-row lg:flex-wrap mt-20 lg:mt-32">
            @foreach($page->technologies as $item)
                <a class="mb-16 last:mb-0 lg:mb-0 lg:mr-12 last:mr-0" href="{{ $item->link }}">
                    <img src="{{ $item->img }}" srcset="{{ $item->img_large }}" class="w-auto h-20 lg:h-12 xl:h-16 opacity-50"
                         alt="{{ $item->name }}">
                </a>
            @endforeach
        </div>
    </div>
</div>