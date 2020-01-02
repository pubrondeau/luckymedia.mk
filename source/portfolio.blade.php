@extends('_layouts.master')

@section('body')

    @include('_components.heading-image', ['title' => 'Our Work'])

    <div class="container mt-24 lg:mt-32 mb-48">
        <div class="row items-center">
            <div class="lg:col-7 lg:offset-1">
                <img class="w-full h-auto object-cover" src="https://images.unsplash.com/photo-1515378791036-0648a3ef77b2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" alt="">
            </div>
            <div class="lg:col-3 lg:-ml-8">
                <div class="lg:h-64 h-40 bg-blue-500 rounded-br-lg rounded-bl-lg lg:rounded-bl-none lg:rounded-tr-lg lg:rounded-br-lg flex flex-col justify-center items-start px-5">
                    <p class="text-xs uppercase font-medium text-white">Democracy Lab</p>
                    <h4 class="font-bold text-white text-xl">Website Redesign</h4>
                    <a href="#" class="border border-white text-sm px-2 py-1 text-white uppercase rounded mt-4 hover:bg-white hover:text-blue-500 animate">Read More</a>
                </div>
            </div>
        </div>

        <div class="row items-center mt-20 lg:mt-32">
            <div class="lg:col-3 lg:offset-1 lg:-mr-8 order-last lg:order-none">
                <div class="lg:h-64 h-40 bg-blue-500 rounded-br-lg rounded-bl-lg lg:rounded-br-none lg:rounded-tl-lg lg:rounded-bl-lg flex flex-col justify-center items-start px-5">
                    <p class="text-xs uppercase font-medium text-white">Democracy Lab</p>
                    <h4 class="font-bold text-white text-xl">Website Redesign</h4>
                    <a href="#" class="border border-white text-sm px-2 py-1 text-white uppercase rounded mt-4 hover:bg-white hover:text-blue-500 animate">Read More</a>
                </div>
            </div>
            <div class="lg:col-7">
                <img class="w-full h-auto object-cover" src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" alt="">
            </div>
        </div>
    </div>

@endsection
