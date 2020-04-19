<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="{{ $page->siteDescription }}">

    <meta property="og:title" content="{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="{{ $page->siteDescription }}"/>
    <meta property="og:image" content="{{ $page->cover ? $page->cover : '/assets/images/lucky-meta.png' }}"/>

    <meta name="twitter:title" content="{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}">
    <meta name="twitter:description" content="{{ $page->siteDescription }}">
    <meta name="twitter:image" content="{{ $page->cover ? $page->cover : '/assets/images/lucky-meta.png' }}">
    <meta name="twitter:card" content="summary_large_image">

    @stack('meta')

    <title>{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}</title>

    {{-- Links Generics --}}
    <link rel="home" href="{{ $page->baseUrl }}">
    <link rel="icon" href="/assets/images/favicons/fav-32.ico" sizes="32x32">
    <link rel="icon" href="/assets/images/favicons/fav-57.ico" sizes="57x57">
    <link rel="icon" href="/assets/images/favicons/fav-76.ico" sizes="76x76">
    <link rel="icon" href="/assets/images/favicons/fav-96.ico" sizes="96x96">
    <link rel="icon" href="/assets/images/favicons/fav-128.ico" sizes="128x128">
    <link rel="icon" href="/assets/images/favicons/fav-192.ico" sizes="192x192">
    <link rel="icon" href="/assets/images/favicons/fav-228.ico" sizes="228x228">

    {{-- Links Android --}}
    <link rel="shortcut icon" sizes="196x196" href=“/assets/images/favicons/fav-196.ico">

    {{-- Links Apple --}}
    <link rel="apple-touch-icon" href="/assets/images/favicons/fav-120.ico" sizes="120x120">
    <link rel="apple-touch-icon" href="/assets/images/favicons/fav-152.ico" sizes="152x152">
    <link rel="apple-touch-icon" href="/assets/images/favicons/fav-180.ico" sizes="180x180">

    {{--  Css  --}}
    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    <link href="https://fonts.googleapis.com/css?family=Poppins:500,700&display=swap" rel="stylesheet">

    {{--  Javascript  --}}
    <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>

    {{-- Google Tags  --}}
    <!-- Global site tag (gtag.js) - Google Analytics -->
    @if ($page->production)
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-36311389-4"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-36311389-4');
    </script>
    @endif

    @stack('scripts')
</head>

<body class="antialiased font-sans">
<div id="app">

    <div style="z-index: 9999;" class="bg-white absolute sticky w-full top-0">
        <div class="container">
            <div class="row items-center justify-between py-5">
                <div class="col-4">
                    <a href="/">
                        <x-icon name="luckymedia" class="text-black h-10"></x-icon>
                    </a>
                </div>

                <nav class="hidden col-6 lg:flex flex-row justify-end">
                    <ul class="flex flex-row">
                        @foreach($page->homepage->menu as $menu)
                            <li class="mr-4 xl:mr-8 last:mr-0 py-2 transition-all ease-in duration-100 menu-item">
                                <a href="{{ $menu->link }}">{{ $menu->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </nav>

                <div class="menu-wrap lg:hidden">
                    <input id="burger" type="checkbox"/>
                    <label for="burger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </label>

                    <nav>
                        <ul class="mt-12 px-12 lg:mt-0">
                            @foreach($page->homepage->menu as $menu)
                                <li>
                                    <a href="{{ $menu->link }}">{{ $menu->name }}</a>
                                </li>
                            @endforeach
                        </ul>

                    </nav>
                </div>
            </div>
        </div>
    </div>


    @yield('body')
</div>

<footer>
    @include('_partials.footer.project')
    @include('_partials.footer.copyright')
</footer>
@include('_partials.cms.identity_redirect')
</body>

</html>
