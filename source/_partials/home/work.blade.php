@php
    {{ $project = $projects->sortByDesc('date')->first(); }}
@endphp

<div class="bg-gray-50">
    <div class="container pb-40">
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
        <div class="row justify-center relative mt-10">
            <div class="lg:col-8">
                    <img class="w-full h-auto" alt="project" srcset="{{ $project->cover_lg }}"  src="{{ $project->cover }}"/>
            </div>
        </div>
        <div class="row justify-center mt-10">
            <div class="lg:col-8">
                <div class="flex flex-col justify-center items-center mx-auto">
                    <p class="text-blue-500 uppercase font-bold mb-1 text-xs tracking-widest">{{ $project->client }}</p>
                    <h2 class="text-3xl font-bold">{{ $project->title }}</h2>
                    <div class="flex flex-row flex-wrap justify-center mb-16">
                        @foreach($project->tags as $tags)
                            <div class="bg-blue-400 px-2 py-1 text-blue-500 uppercase rounded mt-4 mr-2 last:mr-0">{{ $tags }}</div>
                        @endforeach
                    </div>
                    <a href="{{ $project->getUrl() }}" class="bg-blue-500 text-white px-8 py-2 uppercase">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>
