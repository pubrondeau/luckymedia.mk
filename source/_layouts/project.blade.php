@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="{{ $page->siteName }} | {{ $page->title }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="{{ $page->getDescription() }}" />
    <meta property="og:image" content="{{ $page->cover }}" />
@endpush

@section('body')

    @include('_components.heading-image', ['title' => $page->title, 'client' => $page->client])

    <div class="container mt-16 lg:mt-24">
        <div class="row">
            <div class="lg:col-8">
                @foreach($page->images as $image)
                    <img class="w-full h-auto mb-16 lg:mb-24" src="{{ $image }}" alt="">
                @endforeach
            </div>
            <div class="lg:col-4 mb-24 lg:mb-0">
                <div class="flex flex-col">
                    <h4 class="text-xl lg:text-2xl font-bold">Description</h4>
                    <div class="mt-3 font-medium text-gray-200 text-justify">
                        {{ $page->getDescription() }}
                    </div>
                </div>

                <div class="mt-5 flex flex-col">
                    <h4 class="text-xl lg:text-2xl font-bold">Technologies used</h4>
                    <div class="mt-3 flex flex-row">
                        @foreach($page->technologies as $items)
                            <p class="font-medium text-gray-200 mr-1">{{ $items }} {{ $loop->last ? ' ' : ',' }}</p>
                        @endforeach
                    </div>
                </div>

                <div class="mt-5 flex flex-col">
                    <h4 class="text-xl lg:text-2xl font-bold">Date</h4>
                    <div class="mt-3 flex flex-row">
                        <p class="font-medium text-gray-200 mr-4">{{ date('F j, Y', $page->date) }}</p>
                    </div>
                </div>

                <div class="mt-5 flex flex-col">
                    <h4 class="text-xl lg:text-2xl font-bold">Link</h4>
                    <div class="mt-3 flex flex-row">
                        <a class="font-medium text-gray-200 hover:text-blue-500 mr-4"
                           href="{{ $page->link }}">{{ $page->link }}</a>
                    </div>
                </div>

                <div class="mt-5 flex flex-col">
                    <h4 class="text-xl lg:text-2xl font-bold">Tags</h4>
                    <div class="mt-3 flex flex-row">
                        @foreach($page->tags as $tags)
                            <div class="bg-blue-400 px-2 py-1 text-blue-500 uppercase rounded mr-2 last:mr-0">{{ $tags }}</div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection