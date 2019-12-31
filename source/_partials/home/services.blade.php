<div class="container mt-32">
    <div class="row">
        <div class="lg:col-2">
            @include('_components.heading-sm', ['color' => 'black', 'title' => 'What we do'])
        </div>
    </div>
    <div class="row mt-20 mb-40">
        @foreach($page->homepage->cards as $card)
            <div class="md:col-6 lg:col-4 mb-8">
                @include('_components.card', ['icon' => $card->icon, 'title' => $card->title, 'desc' => $card->desc])
            </div>
        @endforeach
    </div>
</div>