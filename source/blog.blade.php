@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="{{ $page->siteName }} | Blog"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="Read from our blog"/>
@endpush

@section('body')

    <x-heading-white title="Blog"></x-heading-white>

    <div class="bg-gray-50">
        <div class="container py-24">
            <div class="row justify-center">
                @foreach($posts as $post)
                    <x-blog :post="$post"></x-blog>
                @endforeach
            </div>
        </div>
    </div>
@endsection
