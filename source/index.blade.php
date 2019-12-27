@extends('_layouts.master')

@section('body')
    <div class="container py-10">
        <div class="row justify-between items-center">
            <div class="col-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 140 55">
                    <path fill="#000"
                          d="M0 2.809a2.8 2.8 0 001.057 2.198l15.33 15.306a2.796 2.796 0 002.196 1.059c.894 0 1.667-.407 2.195-1.059L31.595 9.485v24.872a2.77 2.77 0 002.765 2.769 2.77 2.77 0 002.765-2.769V2.81A2.77 2.77 0 0034.36.04c-.895 0-1.668.407-2.196 1.058L18.583 14.655 5 1.099C4.473.448 3.701 0 2.806 0A2.813 2.813 0 000 2.809zM37.125 52.065a2.8 2.8 0 00-1.058-2.198L20.778 34.52a2.795 2.795 0 00-2.195-1.058c-.895 0-1.667.407-2.196 1.058L5.57 45.348V20.476a2.77 2.77 0 00-2.765-2.768C1.3 17.708.04 18.97.04 20.476v31.59a2.77 2.77 0 002.765 2.767c.894 0 1.667-.407 2.195-1.058l13.582-13.596 13.58 13.596a2.795 2.795 0 002.197 1.058c1.504 0 2.765-1.262 2.765-2.768zM50.258 6.88h2.115v16.73h10.49v1.954H50.259V6.88zM80.918 17.586c0 1.384-.204 2.564-.57 3.623-.365 1.017-.894 1.913-1.585 2.605a6.403 6.403 0 01-2.44 1.547c-.935.366-2.033.53-3.172.53-1.138 0-2.195-.164-3.171-.53-.936-.367-1.749-.855-2.44-1.547-.691-.692-1.22-1.547-1.586-2.565-.366-1.017-.57-2.198-.57-3.5V6.879H67.5v10.747c0 2.036.488 3.583 1.505 4.682 1.016 1.099 2.399 1.628 4.188 1.628 1.708 0 3.09-.53 4.107-1.547 1.016-1.017 1.504-2.564 1.504-4.6V6.88h2.115v10.707zM99.012 23.936a9.011 9.011 0 01-1.707 1.018c-.61.285-1.26.488-1.952.651-.691.163-1.464.244-2.318.244-1.342 0-2.602-.244-3.74-.732a9.41 9.41 0 01-2.97-2.036 8.545 8.545 0 01-1.95-3.053c-.489-1.18-.692-2.442-.692-3.786 0-1.343.244-2.605.691-3.745a10.52 10.52 0 011.952-3.094 8.898 8.898 0 012.968-2.076 9.507 9.507 0 013.782-.773c.854 0 1.626.081 2.318.203a7.492 7.492 0 011.91.611c.57.244 1.14.57 1.627.936.488.367.976.774 1.423 1.222l-1.423 1.546a13.481 13.481 0 00-2.562-1.831c-.935-.489-2.033-.733-3.293-.733a7.25 7.25 0 00-2.847.57 7.06 7.06 0 00-2.277 1.628c-.65.692-1.138 1.506-1.504 2.443-.366.936-.529 1.954-.529 3.012 0 1.1.163 2.117.529 3.053.366.936.854 1.75 1.504 2.443.65.692 1.424 1.22 2.277 1.628.895.407 1.83.61 2.847.61 1.26 0 2.399-.244 3.293-.692.936-.488 1.83-1.14 2.725-1.994l1.382 1.343a9.36 9.36 0 01-1.464 1.384zM119.262 25.564h-2.643l-7.156-9.037-3.985 4.03v5.008h-2.115V6.88h2.115v11.154L116.213 6.88h2.724l-8.011 8.182 8.336 10.502zM131.502 25.564h-2.115v-7.408L121.621 6.88h2.561l6.262 9.322 6.344-9.322h2.439l-7.766 11.276v7.409h.041zM64.978 35.986l-5.286 8.06h-.122l-5.245-7.979V48.28h-4.107V29.472h4.473l4.96 7.98 4.961-7.98h4.473V48.32h-4.107V35.986zM73.599 29.472h14.19v3.705H77.706v3.826h8.865v3.705h-8.864v3.948h10.206v3.705H73.599V29.472zM108.243 42.58c-.488 1.14-1.179 2.158-2.074 2.972-.895.855-1.952 1.506-3.172 1.995-1.22.488-2.561.732-4.066.732h-7.36V29.472h7.36c1.464 0 2.806.245 4.066.733 1.22.489 2.277 1.14 3.172 1.995a8.904 8.904 0 012.074 2.971c.488 1.14.732 2.362.732 3.705v.04a10.897 10.897 0 01-.732 3.664zm-3.619-3.704c0-.814-.122-1.588-.407-2.28-.284-.692-.65-1.302-1.138-1.79a5.488 5.488 0 00-1.789-1.181c-.692-.285-1.464-.407-2.318-.407H95.76v11.357h3.212c.854 0 1.626-.122 2.318-.407.691-.285 1.301-.651 1.789-1.14.488-.488.894-1.099 1.138-1.791.285-.692.407-1.425.407-2.28v-.081zM112.512 29.472h4.148V48.32h-4.148V29.472zM135.69 48.28l-1.708-4.234h-7.97l-1.708 4.233h-4.228l8.051-18.97h3.822L140 48.28h-4.31zm-5.693-13.963l-2.521 6.106h5.001l-2.48-6.106z"/>
                </svg>
            </div>
            <div class="col-6">
                <ul class="flex flex-row">
                    <li class="mr-8">
                        <a class="text-gray-500" href="">Home</a>
                    </li>
                    <li class="mr-8">
                        <a class="text-gray-300" href="">About Us</a>
                    </li>
                    <li class="mr-8">
                        <a class="text-gray-300" href="">Services</a>
                    </li>
                    <li class="mr-8">
                        <a class="text-gray-300" href="">Portfolio</a>
                    </li>
                    <li class="mr-8">
                        <a class="text-gray-300" href="">Blog</a>
                    </li>
                    <li>
                        <a class="text-gray-300" href="">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container mt-24 mb-32">
        <div class="row items-center">
            <div class="col-5">
                <h2 class="text-5xl leading-none">We are</h2>
                <h1 class="text-6xl font-bold leading-normal">Lucky Media</h1>
                <div style="width: 100px; height:6px" class="bg-blue-500 mt-4"></div>
            </div>
            <div class="col-6 offset-1 relative">
                <img class="w-4/5" src="assets/images/phone.png" alt="">
                <img style="margin-top: -400px; margin-left: 250px; z-index: -1" class="absolute"
                     src="assets/images/triangle.png" alt="">
            </div>
        </div>
    </div>

    <img class="w-full h-auto" src="assets/images/mountain_hero.png" alt="">

    <div class="bg-black">
        <div class="container py-16">
            <div class="row justify-center">
                <svg class="block fill-current w-12 h-12 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                     viewBox="0 0 48 48">
                    <path d="M0 24l10.286-10.286L20.57 24 10.286 34.286 0 24zM13.714 10.286L24 0l10.286 10.286L24 20.57 13.714 10.286zM13.714 37.714L24 27.43l10.286 10.285L24 48 13.714 37.714zM27.429 24l10.285-10.286L48 24 37.714 34.286 27.43 24z"/>
                </svg>
            </div>
            <div class="row mt-24">
                <div class="col-2">
                    @include('_components.heading-sm', ['color' => 'white', 'title' => 'About Us'])
                </div>
            </div>
            <div class="row mt-12 mb-56">
                <div class="col-5">
                    <h2 class="text-4xl text-left text-white font-bold">
                        We are a super awesome creative agency.
                    </h2>
                </div>
                <div class="col-6 offset-1">
                    <p class="font-medium text-white text-justify">
                        We help company set up business strategy including design brand identiy or product design
                        service. So company can focus on their core business. A wonderful serenity has taken possession
                        of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am
                        alone, and feel the charm.
                        <br> <br>
                        I should be incapable of drawing a single stroke at the present moment; and yet I feel that I
                        never was a greater artist than now. When, while the lovely valley teems with vapour around me
                    </p>
                </div>
            </div>
        </div>
    </div>

    <img style="transform: rotate(180deg);" class="w-full h-auto" src="assets/images/mountain_hero.png" alt="">

    <div class="container -mt-24">
        <div class="row justify-center">
            <svg class="block fill-current w-12 h-12 text-black" xmlns="http://www.w3.org/2000/svg" fill="none"
                 viewBox="0 0 48 48">
                <path d="M0 24l10.286-10.286L20.57 24 10.286 34.286 0 24zM13.714 10.286L24 0l10.286 10.286L24 20.57 13.714 10.286zM13.714 37.714L24 27.43l10.286 10.285L24 48 13.714 37.714zM27.429 24l10.285-10.286L48 24 37.714 34.286 27.43 24z"/>
            </svg>
        </div>
    </div>


    {{-- What we do --}}
    <div class="container mt-32">
        <div class="row">
            <div class="col-2">
                @include('_components.heading-sm', ['color' => 'black', 'title' => 'What we do'])
            </div>
        </div>
        <div class="row mt-20 mb-40">
            @foreach($page->homepage->cards as $card)
                <div class="col-4 mb-8">
                    @include('_components.card', ['icon' => $card->icon, 'title' => $card->title, 'desc' => $card->desc])
                </div>
            @endforeach
        </div>
    </div>

    {{-- Featured Work --}}
    <div class="bg-gray-50">
        <div class="container pb-56">
            <div class="row justify-center">
                <div class="flex flex-col items-center">
                    <div style="width: 2px;" class="h-24 bg-blue-500 -mt-12"></div>
                    <svg class="block fill-current w-12 h-12 text-black mt-12" xmlns="http://www.w3.org/2000/svg"
                         fill="none" viewBox="0 0 48 48">
                        <path d="M0 24l10.286-10.286L20.57 24 10.286 34.286 0 24zM13.714 10.286L24 0l10.286 10.286L24 20.57 13.714 10.286zM13.714 37.714L24 27.43l10.286 10.285L24 48 13.714 37.714zM27.429 24l10.285-10.286L48 24 37.714 34.286 27.43 24z"/>
                    </svg>
                    <h5 class="text-base text-black uppercase font-medium tracking-widest mt-12">Featured Work</h5>
                </div>
            </div>
            <div class="row justify-center relative mt-24">
                <div class="col-8 dots">
                    <div class="bg-white shadow-lg p-4">
                        <img class="w-full h-auto"
                             src="https://images.unsplash.com/photo-1496181133206-80ce9b88a853?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1351&q=80"
                             alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--  Testimonials  --}}
    <div class="container pb-56">
        <div class="row justify-center">
            <div class="flex flex-col items-center">
                <div style="width: 2px;" class="h-24 bg-blue-500 -mt-12"></div>
                <svg class="block fill-current w-12 h-12 text-black mt-12" xmlns="http://www.w3.org/2000/svg"
                     fill="none" viewBox="0 0 48 48">
                    <path d="M0 24l10.286-10.286L20.57 24 10.286 34.286 0 24zM13.714 10.286L24 0l10.286 10.286L24 20.57 13.714 10.286zM13.714 37.714L24 27.43l10.286 10.285L24 48 13.714 37.714zM27.429 24l10.285-10.286L48 24 37.714 34.286 27.43 24z"/>
                </svg>
                <h5 class="text-base text-black uppercase font-medium tracking-widest mt-12">Testimonials</h5>
            </div>
        </div>

        <div class="row mt-32">
            @for ($i = 0; $i < 3; $i++)
                <div class="col-4">
                    @include('_components.testimonial', ['body' => 'These guys are legit. I’ll never hire another agency as long as I’m working. They are also extremely helpful and amazing.', 'author' => 'Ali Karbassi', 'position' => 'CEO @ We All Code', 'img' => 'https://s3.amazonaws.com/uifaces/faces/twitter/jsa/128.jpg'])
                </div>
            @endfor
        </div>
    </div>

    {{-- Technologies  --}}
    <div class="bg-gray-50 py-24">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    @include('_components.heading-sm', ['color' => 'black', 'title' => 'Technologies'])
                </div>
            </div>
            <div class="row flex-wrap mt-32">
                @foreach($page->technologies as $item)
                    <a class="mr-12 last:mr-0" href="{{ $item->link }}">
                        <img src="{{ $item->img }}" srcset="{{ $item->img_large }}" class="w-auto h-16 opacity-50" alt="{{ $item->name }}">
                    </a>
                @endforeach
            </div>
        </div>
    </div>

@endsection
