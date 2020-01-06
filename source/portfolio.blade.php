---
pagination:
    collection: projects
    perPage: 4
---

@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="{{ $page->siteName }} | Portfolio" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="Checkout our latest work" />
@endpush

@section('body')

    @include('_components.heading-image', ['title' => 'Our Work'])

    <div class="container mt-24 lg:mt-32 mb-48">
        @foreach($pagination->items as $project)
            @if($loop->odd)
                <div class="row items-center mt-20 lg:mt-32">
                    <div class="lg:col-7 lg:offset-1">
                        <img class="w-full h-auto object-cover"
                             src="{{ $project->cover }}"
                             alt="">
                    </div>
                    <div class="lg:col-3 lg:-ml-8">
                        <div class="lg:h-64 h-40 bg-blue-500 rounded-br-lg rounded-bl-lg lg:rounded-bl-none lg:rounded-tr-lg lg:rounded-br-lg flex flex-col justify-center items-start px-5">
                            <p class="text-xs uppercase font-medium text-white">{{ $project->client }}</p>
                            <h4 class="font-bold text-white text-xl">{{ $project->title }}</h4>
                            <a href="{{ $project->getUrl() }}"
                               class="border border-white text-sm px-2 py-1 text-white uppercase rounded mt-4 hover:bg-white hover:text-blue-500 animate">Read
                                More</a>
                        </div>
                    </div>
                </div>
            @endif
            @if($loop->even)
                <div class="row items-center mt-20 lg:mt-32">
                    <div class="lg:col-3 lg:offset-1 lg:-mr-8 order-last lg:order-none">
                        <div class="lg:h-64 h-40 bg-blue-500 rounded-br-lg rounded-bl-lg lg:rounded-br-none lg:rounded-tl-lg lg:rounded-bl-lg flex flex-col justify-center items-start px-5">
                            <p class="text-xs uppercase font-medium text-white">{{ $project->client }}</p>
                            <h4 class="font-bold text-white text-xl">{{ $project->title }}</h4>
                            <a href="{{ $project->getUrl() }}"
                               class="border border-white text-sm px-2 py-1 text-white uppercase rounded mt-4 hover:bg-white hover:text-blue-500 animate">Read
                                More</a>
                        </div>
                    </div>
                    <div class="lg:col-7">
                        <img class="w-full h-auto object-cover"
                             src="{{ $project->cover }}"
                             alt="">
                    </div>
                </div>
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
                            <div class="bg-white group w-full h-full p-8 flex items-end justify-start hover:bg-blue-500 animate">
                                <div class="w-full flex flex-row items-center justify-between">
                                    <div class="flex flex-col">
                                        <h4 class="text-xl font-bold group-hover:text-white">Title</h4>
                                        <p class="text-sm group-hover:text-white">VueJS | Laravel</p>
                                    </div>
                                    <v-icon name="link" class="w-12 h-12 text-white"></v-icon>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endfor
        </div>
    </div>

@endsection
