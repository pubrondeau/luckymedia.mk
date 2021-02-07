@extends('_layouts.master')

@push('scripts')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/tiny-slider.css">
    <!--[if (lt IE 9)]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.helper.ie8.js"></script>
    <![endif]-->
@endpush

@section('body')
    <div class="container mt-24 mb-32">
        <div class="row items-center">
            <div class="lg:col-5">
                <h2 class="text-2xl lg:text-3xl xl:text-5xl leading-none">We are</h2>
                <h1 class="text-3xl lg:text-4xl xl:text-6xl font-bold leading-normal">Lucky Media</h1>
                <div style="width: 100px; height:6px" class="bg-blue-500 mt-4"></div>
            </div>
            <div class="hidden lg:block lg:col-6 lg:offset-1 relative">
                <img class="w-4/5" src="assets/images/phone.png" alt="">
                <img style="margin-top: -400px; margin-left: 200px; z-index: -1" class="absolute hidden xl:block"
                     src="assets/images/triangle.png" alt="">
            </div>
        </div>
    </div>

    <img class="w-full h-auto" src="assets/images/mountain_hero.png" alt="">

    <div id="about" class="bg-black">
        <div class="container py-16">
            <div class="row justify-center">
                <svg class="block fill-current w-12 h-12 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                     viewBox="0 0 48 48">
                    <path d="M0 24l10.286-10.286L20.57 24 10.286 34.286 0 24zM13.714 10.286L24 0l10.286 10.286L24 20.57 13.714 10.286zM13.714 37.714L24 27.43l10.286 10.285L24 48 13.714 37.714zM27.429 24l10.285-10.286L48 24 37.714 34.286 27.43 24z"/>
                </svg>
            </div>
            <div class="row mt-24">
                <div class="lg:col-2">
                    <x-heading-sm color="white" title="A propos de nous?"></x-heading-sm>
                </div>
            </div>
            <div class="row mt-12 mb-56">
                <div class="lg:col-5 mb-5 lg:mb-0">
                    <h2 class="text-2xl md:text-4xl text-left text-white font-bold">
                        Nous sommes une petite agence de design web parfaitement formée, basée dans la belle ville de Saint avé. 
                        The art of beautiful design and professional digital experience.
                    </h2>
                </div>
                <div class="lg:col-6 lg:offset-1">
                    <p class="font-medium text-white text-left leading-relaxed">
                        C'est en créant de bons sites web qu'on se réveille le matin. Des sites web qui sont beaux, qui sont agréables
                        à utiliser et qui font une réelle différence pour nos clients. Pour y parvenir, nous prenons du plaisir à faire 
                        les choses au pied levé, en investissant le temps nécessaire pour découvrir exactement ce qui vous rend spécial 
                        aux yeux de vos clients, puis en le mettant en ligne.
                     </p>
                </div>
            </div>
        </div>
    </div>

    <img style="transform: rotate(180deg);" class="w-full h-auto -mt-5" src="assets/images/mountain_hero.png" alt="">

    <div class="container -mt-24">
        <div class="row justify-center">
            <svg class="block fill-current w-12 h-12 text-black" xmlns="http://www.w3.org/2000/svg" fill="none"
                 viewBox="0 0 48 48">
                <path d="M0 24l10.286-10.286L20.57 24 10.286 34.286 0 24zM13.714 10.286L24 0l10.286 10.286L24 20.57 13.714 10.286zM13.714 37.714L24 27.43l10.286 10.285L24 48 13.714 37.714zM27.429 24l10.285-10.286L48 24 37.714 34.286 27.43 24z"/>
            </svg>
        </div>
    </div>


    {{-- What we do --}}
    @include('_partials.home.services')

    {{-- Featured Work --}}
    @include('_partials.home.work')

    {{--  Testimonials  --}}
    @include('_partials.home.testimonials')

    {{-- Technologies  --}}
    @include('_partials.home.tech')

@endsection
