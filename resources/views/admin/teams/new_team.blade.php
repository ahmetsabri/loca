<div id="new-info-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    {{ __('enter_team_member') }}
                </h3>
                <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="new-info-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5">
        <form class="space-y-4" action="{{route('team.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="team" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('name') }}</label>
                <input type="text" name="name" id="team"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                  required />
            </div>
                    <div>
                        <div>
                                    <label for="department"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white capitalize">{{ __('department') }}</label>
                                    <select id="department" name="department_id"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                        <option value="">{{ __('department') }}</option>
                                        @foreach($departments as $department)
                                        <option value="{{ $department->id }}">{{$department->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="images">image</label>
                            <input
                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                aria-describedby="images" id="images" type="file" name="image">
                            <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="name"></div>
                        </div>
                            <div>
                                <label for="ttype" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white capitalize">{{ __('ttype_no') }}</label>
                                <input type="text" name="ttype_no" id="ttype"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                required />
                            </div>
                            <div>
                                <label for="team" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('phone') }}</label>
                                <input type="text" name="phone" id="team"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                required />
                            </div>
                            <div>
                                <label for="team" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('email') }}</label>
                                <input type="email" name="email" id="team"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                    required />
                            </div>
                            <div>
                                <label for="team" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('description_tr') }}</label>
                                <input type="text" name="description[tr]" id="team"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                    required />
                            </div>
                            <div>
                <label for="team" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('description_ru')}}</label>
                                    <input type="text" name="description[ru]" id="team"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                    required />
                            </div>
                            <div>
                <label for="team" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('description_en')}}</label>                <input type="text" name="description[en]" id="team"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                    required />
                                <br />
                            </div>
            <button type="submit"
                class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
        </form>
            </div>
        </div>
    </div>
</div>
