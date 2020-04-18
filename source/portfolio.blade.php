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

    <x-heading-white title="Our Work"></x-heading-white>

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
                <x-pagination :pagination="$pagination"></x-pagination>
            </div>
        </div>


    </div>

{{--    <div class="container mb-32 md:mb-40 lg:mb-56">--}}
{{--        <div class="row">--}}
{{--            <div class="col-12 mb-12">--}}
{{--                <h2 class="text-3xl md:text-5xl font-bold">Open Source Work</h2>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="row">--}}
{{--            @for ($i = 0; $i < 6; $i++)--}}
{{--                <div class="md:col-6 lg:col-4 mb-8">--}}
{{--                    <a href="">--}}
{{--                        <div style="height: 352px;" class="bg-blue-500 p-6">--}}
{{--                            <div--}}
{{--                                    class="bg-white group w-full h-full p-8 flex items-end justify-start hover:bg-blue-500 animate">--}}
{{--                                <div class="w-full flex flex-row items-center justify-between">--}}
{{--                                    <div class="flex flex-col">--}}
{{--                                        <h4 class="text-xl font-bold group-hover:text-white">Title</h4>--}}
{{--                                        <p class="text-sm group-hover:text-white">VueJS | Laravel</p>--}}
{{--                                    </div>--}}
{{--                                    <x-icon name="link" class="w-12 h-12 text-white"></x-icon>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            @endfor--}}
{{--        </div>--}}
{{--    </div>--}}

@endsection
