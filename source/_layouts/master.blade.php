<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    <link href="https://fonts.googleapis.com/css?family=Poppins:500,700&display=swap" rel="stylesheet">
</head>
<body class="antialiased font-sans">
<div id="app">
    @yield('body')
</div>

<footer>
    <div class="bg-black py-40 relative">
        <div class="container">
            <div class="row relative">
                <div class="col-7 flex flex-col">
                    <h1 class="text-5xl text-white font-bold">Have a project in mind?</h1>
                    <p class="font-medium text-base text-white mt-3">Lorem ipsum dolores sit amet</p>
                    <a href="/contact"
                       class="w-40 py-3 border border-white text-center text-white uppercase mt-10 hover:bg-white hover:text-black">Contact
                        us</a>
                </div>
            </div>
        </div>
        <img style="height: 500px;" class="absolute right-0 top-0 object-cover" src="assets/images/black_mnt.png"
             srcset="assets/images/black_mnt@2x.png" alt="">
    </div>

    <div>
        <img src="assets/images/footer_mnt.png" srcset="assets/images/footer_mnt@2x.png" class="w-full h-auto" alt="">
        <div class="container -mt-40">
            <div class="row flex flex-col">
                <p class="font-medium text-lg text-black mb-16">
                    Str. JNA 190, Gostivar, <br>
                    N. Macedonia
                </p>
                <p class="font-medium text-lg text-black mb-16">
                    +389 70 50 20 60 <br>
                    info@luckymedia.mk
                </p>
                <div class="flex flex-row justify-between mb-12">
                    <p class="font-medium text-lg text-black">© 2020 Lucky Media — All Rights Reserved</p>
                    <div class="flex flex-row">
                        <a href="https://www.facebook.com" class="text-lg text-black mr-10">Facebook</a>
                        <a href="https://www.facebook.com" class="text-lg text-black">Instagram</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="{{ mix('js/main.js', 'assets/build') }}"></script>
</body>
</html>
