<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    <link href="https://fonts.googleapis.com/css?family=Poppins:500,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/tiny-slider.css">
    <!--[if (lt IE 9)]><script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.helper.ie8.js"></script><![endif]-->
</head>
<body class="antialiased font-sans">
<div id="app">

    {{-- Menu Component --}}
    <v-menu menus="{{ $page->homepage->menu }}"></v-menu>
    {{-- Menu Component --}}

    @yield('body')
</div>

<footer>
    @include('_partials.footer.project')
    @include('_partials.footer.copyright')
</footer>
<script src="{{ mix('js/main.js', 'assets/build') }}"></script>
@include('_partials.cms.identity_redirect')
</body>
</html>
