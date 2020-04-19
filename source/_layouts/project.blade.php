@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="{{ $page->title }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="{{ $page->getSeoDesc() }}" />

    <meta name="twitter:card" content="summary_large_image">
@section('body')

    <x-heading-image :title="$page->title" :client="$page->client"></x-heading-image>

    <div class="container my-16 lg:my-24">
        <div class="row">
            <div class="lg:col-8">
                <img class="w-full h-auto mb-5" src="{{ $page->cover }}" srcset="{{ $page->cover_lg }}" alt="">
            </div>
            <div class="lg:col-4 mb-16 lg:mb-0">
                <div class="flex flex-col">
                    <h4 class="text-xl lg:text-2xl font-bold">Description</h4>
                    <div class="mt-3 font-medium text-gray-200">
                        {{ $page->getDescription() }}
                    </div>
                </div>

                <div class="mt-5 flex flex-col">
                    <h4 class="text-xl lg:text-2xl font-bold">Technologies used</h4>
                    <div class="mt-3 flex flex-row">
                        <p class="font-medium text-gray-200 mr-1">{{ implode(', ', $page->technologies) }}</p>
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
                    <div class="mt-3 flex flex-row flex-wrap">
                        @foreach($page->tags as $tags)
                            <div class="bg-blue-400 px-2 py-1 text-blue-500 uppercase rounded mr-2 last:mr-0 mb-2">{{ $tags }}</div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="lg:col-8">
                @foreach($page->images as $image)
                    <img class="w-full h-auto" src="{{ $image }}" alt="">
                @endforeach
            </div>
        </div>
    </div>
@endsection
