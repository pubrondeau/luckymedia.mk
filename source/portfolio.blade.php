---
pagination:
    collection: projects
    perPage: 3
---

@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="{{ $page->siteName }} | Portfolio"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="Checkout our latest work"/>
@endpush

@section('body')

    @include('_components.heading-image', ['title' => 'Our Work'])

    <div class="container-fluid mt-24 lg:mt-32 mb-48">
        @foreach($pagination->items as $project)
            @if($loop->odd)
                @include('_partials.portfolio.left')
            @endif
            @if($loop->even)
                @include('_partials.portfolio.right')
            @endif
        @endforeach


        <div class="row mt-32">
            <div class="col-12 flex justify-center">
                <div class="flex flex-row">
                    @if ($previous = $pagination->previous)
                        <a class="link mr-4" href="{{ $page->baseUrl }}{{ $pagination->first }}">&lt;&lt;</a>
                        <a class="link mr-4" href="{{ $page->baseUrl }}{{ $previous }}">&lt;</a>
                    @endif

                    @foreach ($pagination->pages as $pageNumber => $path)
                        <a href="{{ $page->baseUrl }}{{ $path }}"
                           class="{{ $pagination->currentPage == $pageNumber ? 'border-blue-500 bg-blue-500 text-white' : '' }} border-gray-300 border-2 text-gray-300 px-4 py-2 mr-4 rounded hover:bg-blue-500 hover:border-blue-500 hover:text-white">
                            {{ $pageNumber }}
                        </a>
                    @endforeach

                    @if ($next = $pagination->next)
                        <a class="link mr-4" href="{{ $page->baseUrl }}{{ $next }}">&gt;</a>
                        <a class="link mr-4" href="{{ $page->baseUrl }}{{ $pagination->last }}">&gt;&gt;</a>
                    @endif
                </div>
            </div>
        </div>


    </div>

    <div class="container mb-32 md:mb-40 lg:mb-56">
        <div class="row">
            <div class="col-12 mb-12">
                <h2 class="text-3xl md:text-5xl font-bold">Open Source Work</h2>
            </div>
        </div>
        <div class="row">
            @for ($i = 0; $i < 6; $i++)
                <div class="md:col-6 lg:col-4 mb-8">
                    <a href="">
                        <div style="height: 352px;" class="bg-blue-500 p-6">
                            <div
                                    class="bg-white group w-full h-full p-8 flex items-end justify-start hover:bg-blue-500 animate">
                                <div class="w-full flex flex-row items-center justify-between">
                                    <div class="flex flex-col">
                                        <h4 class="text-xl font-bold group-hover:text-white">Title</h4>
                                        <p class="text-sm group-hover:text-white">VueJS | Laravel</p>
                                    </div>
                                    @include('_components.icon', ['name' => 'link', 'class' => 'w-12 h-12 text-white'])
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endfor
        </div>
    </div>

@endsection
