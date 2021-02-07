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
                            Nous aimons parler de numérique. <br>
                            Alors si vous avez un projet qui vous démange ou si vous voulez simplement vous présenter, écrivez-nous. <br>
                            Nous sommes toujours heureux de discuter...<br><br>
                            Saint avé<br><br>
                        </p>
                    </div>
                    <div class="md:w-1/2 flex flex-col">
                        <div class="flex flex-col">
                            <p class="font-medium tracking-wider text-black uppercase">Envoyez nous un message</p>
                            <div class="bg-blue-500 w-5 mt-2" style="height: 2px;"></div>
                        </div>
                        <form class="mt-6 flex flex-col" data-netlify="true" action="POST">
                            <div class="flex flex-col">
                                <label class="sr-only" for="name">Name</label>
                                <input placeholder="Name" class="form form-input" name="nom" id="name" type="text" required>
                            </div>
                            <div class="flex flex-col">
                                <label class="sr-only" for="email">Email</label>
                                <input placeholder="Email" class="form form-input mt-6" name="email" id="email"
                                    type="email" required>
                            </div>
                            <div class="flex flex-col">
                                <label class="sr-only" for="subject">Subject</label>
                                <input placeholder="Subject" class="form form-input mt-6" name="sujet" id="subject"
                                    type="text" required>
                            </div>
                            <div class="flex flex-col">
                                <label class="sr-only" for="message">Message</label>
                                <textarea placeholder="Message" class="form form-area py-4 mt-6" name="message"
                                    id="message" required></textarea>
                            </div>
                            <div class="flex justify-end">
                                <button class="flex flex-row items-center bg-blue-500 text-white text-sm py-4 px-8 mt-4 group">
                                    Envoyer message
                                    <x-icon name="arrow" class="w-6 h-6 text-white ml-1 group-hover:ml-4 transition-all duration-150 ease-in-out"></x-icon>
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
