<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-blue-800 leading-tight">
            {{ __('teams') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <a href="{{ route('team.create') }}"
                class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-blue-900 focus:outline-none bg-white rounded-lg border border-blue-200 hover:bg-blue-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-blue-100 dark:focus:ring-blue-700 dark:bg-blue-800 dark:text-blue-400 dark:border-blue-600 dark:hover:text-white dark:hover:bg-blue-700">{{ __('add_user') }}</a>
        </div>
    </div>
    <div class="m-5" x-data="
    {
        deleteTeam(url){
        if(!confirm('Are you sure')){
            return
        }
        window.location.href=url
    }
    }
">
        @include('admin.teams.list_team',['users'=>$users])

    </div>
</x-app-layout>
