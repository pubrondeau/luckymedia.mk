@extends('_layouts.master')

@push('scripts')
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.18.1/styles/atom-one-dark.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.18.1/highlight.min.js"></script>

    <script>hljs.initHighlightingOnLoad();</script>
@endpush

@push('meta')
    <meta property="og:title" content="{{ $page->title }}"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="{{ $page->getSeoDesc() }}"/>

    <meta name="twitter:card" content="summary_large_image">
@endpush

@section('body')

    <div class="flex flex-col">
        <div class="bg-white flex items-center py-5 md:py-12">
            <div class="container">
                <div class="row justify-center my-auto">
                    <div class="lg:col-8 text-center">
                        <h2 class="text-2xl md:text-5xl font-bold text-gray-500">{{ $page->title }}</h2>
                        <p class="text-base uppercase font-semibold text-blue-500 mt-2">{{ date('F j, Y', $page->date) }}</p>
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
                <img class="w-full h-auto mb-5" src="{{ $page->cover }}" alt="">
                <div class="markup">
                    {!! $page->getContent() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
