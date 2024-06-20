<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('departments') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <button data-modal-target="new-info-modal" data-modal-toggle="new-info-modal"
                class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                type="button">
                {{__('new_department')}}
            </button>
        </div>
    </div>
    <div class="m-5" x-data="
    {
        deleteDepartment(url){
        if(!confirm('emin misiniz')){
            return
        }
        window.location.href=url
    }
    }
">
        @include('admin.departments.new_department')
        @include('admin.departments.list_department',['departments'=>$departments])

    </div>
</x-app-layout>
