<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            özellikler
        </h2>
    </x-slot>

    <div class="py-12">
   <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{ route('feature.create') }}"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                yeni
            </a>
        </div>
    </div>
    <div class="m-5" x-data="
    {
        deleteFeature(url){
        if(!confirm('emin misiniz')){
            return
        }
        window.location.href=url
    }
    }
">
        @include('admin.features.new_feature')
        @include('admin.features.list_feature',['features'=>$features])
    </div>
</x-app-layout>
