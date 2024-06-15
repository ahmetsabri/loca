<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            video kategorileri
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
                class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                type="button">
                yeni +
            </button>
        </div>
    </div>
    <div class="m-5" x-data="
    {
        deleteCategory(url){
            alert(url)
        if(!confirm('Are you sure')){
            return
        }
        window.location.href=url
    }
    }
">
        @include('admin.video_categories.create_form')
        @include('admin.video_categories.list',['categories'=>$categories])

    </div>
</x-app-layout>
