<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Portfolio') }}
        </h2>
    </x-slot>
    <div class="p-12">
        <div class="flex flex-wrap">
            <div class="w-full">
                <h1 class="text-xl">
                    {{__('basic_info')}}
                </h1>
            </div>
        </div>
        @include('admin.portfolios.create_form')
    </div>
</x-app-layout>
