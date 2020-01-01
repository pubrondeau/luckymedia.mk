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
    @yield('body')
</div>

<footer>
    <div class="bg-black py-32 md:py-40 relative">
        <div class="container">
            <div class="row relative">
                <div class="md:col-7 flex flex-col">
                    <h1 class="text-3xl md:text-5xl text-white font-bold">Have a project in mind?</h1>
                    <p class="font-medium text-base text-white mt-3">Lorem ipsum dolores sit amet</p>
                    <a href="/contact"
                       class="w-40 py-3 border border-white text-center text-white uppercase mt-10 hover:bg-white hover:text-black">Contact
                        us</a>
                </div>
            </div>
        </div>
        <img style="height: 500px;" class="hidden md:block absolute right-0 top-0 object-cover" src="assets/images/black_mnt.png"
             srcset="assets/images/black_mnt@2x.png" alt="">
    </div>

    <div>
        <img src="assets/images/footer_mnt.png" srcset="assets/images/footer_mnt@2x.png" class="w-full h-auto" alt="">
        <div class="container lg:-mt-32 xl:-mt-40">
            <div class="row flex flex-col">
                <div class="col-12">
                    <p class="font-medium text-lg text-black mb-16">
                        Str. JNA 190, Gostivar, <br>
                        N. Macedonia
                    </p>
                    <p class="font-medium text-lg text-black mb-16">
                        +389 70 50 20 60 <br>
                        info@luckymedia.mk
                    </p>
                    <div class="flex flex-col md:flex-row md:justify-between mb-12">
                        <p class="text-sm md:text-lg font-medium text-black order-2 md:order-none">© 2020 Lucky Media — All Rights Reserved</p>
                        <div class="flex flex-row mb-5 md:mb-0">
                            <a href="https://www.facebook.com" class="text-lg text-black mr-10">Facebook</a>
                            <a href="https://www.facebook.com" class="text-lg text-black">Instagram</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="{{ mix('js/main.js', 'assets/build') }}"></script>
</body>
</html>
