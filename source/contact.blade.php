@extends('_layouts.master')

@push('meta')
<meta property="og:title" content="{{ $page->siteName }} | Contact" />
<meta property="og:type" content="website" />
<meta property="og:url" content="{{ $page->getUrl() }}" />
<meta property="og:description" content="Get in touch with us" />
@endpush

@section('body')
<div style="background: url('/assets/images/map@2x.png') no-repeat center center / cover;">
    <div class="container py-32">
        <div class="row">
            <div class="md:col-12 lg:col-10 mx-auto">
                <div class="bg-white rounded-lg p-10 flex flex-col md:flex-row">
                    <div class="flex flex-col mt-16 order-last md:order-none md:mt-0 md:w-1/2">
                        <div class="flex flex-col">
                            <p class="font-medium tracking-wider text-black uppercase">Details</p>
                            <div class="bg-blue-500 w-5 mt-2" style="height: 2px;"></div>
                        </div>
                        <p class="mt-6 leading-loose font-medium text-sm text-gray-300">
                            Str. Borce Jovanoski nr.32, Gostivar 1230 <br>
                            Republic of North Macedonia <br>
                            +389 70 50 20 60 <br>
                            info@luckymedia.mk <br>
                        </p>
                    </div>
                    <div class="md:w-1/2 flex flex-col">
                        <div class="flex flex-col">
                            <p class="font-medium tracking-wider text-black uppercase">Send us a message</p>
                            <div class="bg-blue-500 w-5 mt-2" style="height: 2px;"></div>
                        </div>
                        <form class="mt-6 flex flex-col" action="">
                            <div class="flex flex-col">
                                <label class="sr-only" for="name">Name</label>
                                <input placeholder="Name" class="form form-input" name="name" id="name" type="text">
                            </div>
                            <div class="flex flex-col">
                                <label class="sr-only" for="email">Email</label>
                                <input placeholder="Email" class="form form-input mt-6" name="email" id="email"
                                    type="email">
                            </div>
                            <div class="flex flex-col">
                                <label class="sr-only" for="subject">Subject</label>
                                <input placeholder="Subject" class="form form-input mt-6" name="subject" id="subject"
                                    type="text">
                            </div>
                            <div class="flex flex-col">
                                <label class="sr-only" for="message">Message</label>
                                <textarea placeholder="Message" class="form form-area py-4 mt-6" name="message"
                                    id="message"></textarea>
                            </div>
                            <div class="flex justify-end">
                                <button
                                    class="flex flex-row items-center bg-blue-500 text-white text-sm py-4 px-8 mt-4">
                                    Send Message
                                    @include('_components.icon', ['name' => 'arrow', 'class' => 'w-6 h-6 text-white
                                    ml-1'])
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection