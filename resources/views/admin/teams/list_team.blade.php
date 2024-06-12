<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>

                <th scope="col" class="px-6 py-3 text-left">
                     {{__('name')}}
                </th>
                <th scope="col" class="px-6 py-3 text-left">
                     {{__('department')}}
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                     {{__('actions')}}
                </th>

            </tr>


        </thead>
        <tbody>

            @foreach($users as $user)
                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 text-center">

                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <div class="flex justify-start items-center space-x-4">
                        @if($user->image)
                            <img class="w-16 h-1w-16 rounded " src="{{ $user->image?->full_url }}" alt="Small avatar">
                        @endif
                        <p class="capitalize font-semibold text-base">
                        {{$user->name}}
                        </p>
                        </div>
                </td>
                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <div class="flex justify-start items-center space-x-4">
                        <p class="capitalize font-semibold text-base">
                        {{$user?->department?->name ?? '-'}}
                        </p>
                        </div>
                </td>
                <td scope="row" class=" px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">




<a href="{{ route('team.edit',$user) }}"  class="px-3 py-2 text-sm font-medium text-center text-white bg-indigo-700 rounded-lg hover:bg-indigo-800 focus:ring-4 focus:outline-none focus:ring-indigo-300 dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-800">{{__('edit')}}</a>


<button @click="deleteTeam(`{{route('team.delete',$user)}}`)" type="button" class="px-3 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">{{__('delete')}}</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
