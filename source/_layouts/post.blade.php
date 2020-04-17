@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="{{ $page->siteName }} | {{ $page->title }}"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="{{ $page->getDescription() }}"/>
    <meta property="og:image" content="{{ $page->cover }}"/>
@endpush

@section('body')

    <div class="flex flex-col">
        <div class="bg-white flex items-center py-5 md:py-12">
            <div class="container">
                <div class="row my-auto items-center">
                    <div class="col-12 text-center">
                        <h2 class="text-2xl md:text-5xl font-bold text-gray-500">{{ $page->title }}</h2>
                        <p class="text-base font-semibold text-blue-500">APRIL 1, 2020</p>
                    </div>
                </div>
            </div>
        </div>

        <div style="background-image: url('/assets/images/shadow.png')"
             class="h-8 w-full -mb-10 bg-center bg-no-repeat"></div>
    </div>


    <div class="container my-16 lg:my-24">
        <div class="row justify-center">
            <div class="lg:col-8">
                <img class="w-full h-auto mb-5" src="{{ $page->cover }}" srcset="{{ $page->cover_lg }}" alt="">
                <div>
                    {!! $page->getContent() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
