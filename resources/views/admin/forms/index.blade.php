<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight capitalize">
            {{ __('forms') }}
        </h2>
    </x-slot>

    <div class="py-12">

    </div>
    <div class="m-5" x-data="
    {
        deleteForm(url){
        if(!confirm('Are you sure')){
            return
        }
        window.location.href=url
    },
    changeType(url){
window.location.href=url
    }
    }
">
<div class=" w-1/12 my-10" >
    <label for="types" class="block mb-2 text-sm font-bold text-gray-900 dark:text-white capitalize">{{ __('type') }}</label>
    <select id="types"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        @foreach($types as $type )
        <option value="{{ $type }}" @click="changeType(`{{ request()->fullUrlWithQuery(['type'=>$type]) }}`)" @selected(request()->query('type') == $type )>
                {{ __($type) }}
        </option>
        @endforeach
    </select>
</div>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3 text-center">
                    {{__('name')}}
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    {{__('phone')}}
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    {{__('email')}}
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    {{__('project')}}
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    {{__('portfolio')}}
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    {{__('message')}}
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    {{__('attachment')}}
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    {{__('created_at')}}
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    {{__('actions')}}
                </th>

            </tr>


        </thead>
        <tbody>

            @foreach($forms as $form)
            @include('admin.categories.new_sub_category',['subCategory'=>$form])
            <tr
                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 text-center">
                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$form->name}}
                </td>
                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$form->phone}}
                </td>
                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$form->email}}
                </td>

                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$form->project?->title ?? '-'}}
                </td>
                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$form->portfolio?->title ?? '-'}}
                </td>
                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-wrap dark:text-white">
                    {{$form->message ?? '-'}}
                </td>
                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                   @if($form->attachment)
                   <a target="_blank" href="{{ $form->attachment_url }}" class="text-blue-600">{{ __('show')}}</a>
                   @else
                   -
                   @endif
                </td>
                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{$form->created_at->diffForHumans() ?? '-'}}
                                </td>
                <td scope="row" class=" px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <button @click="deleteForm(`{{route('form.delete',$form)}}`)" type="button"
                        class="px-3 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">{{__('delete')}}</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
    <div class="flex justify-center">
        {{ $forms->links() }}
    </div>
    </div>
</x-app-layout>
