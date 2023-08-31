<x-base-layout>

    <x-slot name="title">
        <title> {{ config('app.name') }}</title>
        @livewireStyles
    </x-slot>

    <main
        class="block w-full h-auto px-8 bg-repeat-y bg-contain md:bg-desktop-bg bg-mobile-bg md:bg-repeat sm:bg-cover md:p-20 pt-[112px] pb-[169px] xl:px-[135px] xl:bg-center xl:pt-[135px] lg:min-h-screen lg:flex lg:justify-center lg:items-center">
        {{ $slot }}
    </main>

</x-base-layout>
