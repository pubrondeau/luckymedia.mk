<div class="container pb-24 lg:pb-56">
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

    <div class="mt-20 lg:mt-32">
        <div class="testimonials">
            @foreach ($testimonials as $testimonial)
                <div class="lg:col-4 mb-24 last:mb-0 lg:mb-0">
                    <x-testimonial :content="$testimonial->getContent()" :testimonial="$testimonial"></x-testimonial>
                </div>
            @endforeach
        </div>
    </div>
</div>
