<div style="height: 366px;" class="w-full flex flex-col items-center shadow-lg p-12">
    @include('_components.icon', ['name' => $icon, 'class' => 'h-32 w-32 text-blue-500'])
    <h3 class="text-black text-center text-xl font-bold my-3">{{ $title }}</h3>
    <div style="height: 2px;" class="w-16 bg-blue-500 mb-3"></div>
    <p class="text-base text-gray-200 font-medium text-center">
        {{ $desc }}
    </p>
</div>