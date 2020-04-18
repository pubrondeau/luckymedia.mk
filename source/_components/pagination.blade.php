@php
    $previous = $pagination->previous;
    $next = $pagination->next;
@endphp

<div class="flex flex-row">
    @if ($previous)
        <a class="link mr-4" href="{{ $page->baseUrl }}{{ $pagination->first }}">&lt;&lt;</a>
        <a class="link mr-4" href="{{ $page->baseUrl }}{{ $previous }}">&lt;</a>
    @endif

    @foreach ($pagination->pages as $pageNumber => $path)
        <a href="{{ $page->baseUrl }}{{ $path }}"
           class="link {{ $pagination->currentPage == $pageNumber ? 'link-active' : '' }}">
            {{ $pageNumber }}
        </a>
    @endforeach

    @if ($next)
        <a class="link mr-4" href="{{ $page->baseUrl }}{{ $next }}">&gt;</a>
        <a class="link mr-4" href="{{ $page->baseUrl }}{{ $pagination->last }}">&gt;&gt;</a>
    @endif
</div>
