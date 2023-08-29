<x-base-layout>

    <x-slot name="title">
        @if (!empty($pageTitle))
            {{ $pageTitle }}
        @else
            {{ config('app.name') }}
        @endif
        @livewireStyles
    </x-slot>

    <div>
        {{-- Navbar --}}
    </div>
    <main class="flex-1">
        {{ $slot }}
    </main>
    <div>
        {{-- Footer --}}
    </div>
</x-base-layout>
