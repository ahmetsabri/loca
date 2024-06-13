<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight capitalize">
            {{ __('new_team_member') }}
        </h2>
    </x-slot>
    <div class="p-12 flex justify-center">

    <form class="space-y-4 w-1/2" action="{{route('team.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="team" class="block capitalize mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('name') }}</label>
            <input type="text" name="name" id="team"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                required />
        </div>
        <div>
                    <label for="team" class="block capitalize mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('phone') }}</label>
                    <input type="text" name="phone" id="team"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        required />
                </div>
                @foreach(config('app.locales') as $locale)
                        <div>
                            <label for="team" class="block capitalize mb-2 text-sm font-medium text-gray-900 dark:text-white">{{
                                __('title_'.$locale) }}</label>
                            <input  type="text" name="title[{{ $locale }}]" id="team"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                required />
                        </div>
                        @endforeach
                <div>
                    <label for="team" class="block capitalize mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('email') }}</label>
                    <input type="email" name="email" id="team"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        required />
                </div>
                {{-- Gelecekte  kullanabiliriz --}}
                {{-- <div>
                    <label for="team" class="block capitalize mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('password') }}</label>
                    <input type="password" name="password" id="team"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        required />
                </div> --}}
                <div>
                    <label for="team" class="block capitalize mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('facebook') }}</label>
                    <input type="text" name="facebook_url" id="team"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        required />
                </div>
                <div>
                    <label for="team" class="block capitalize mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('instagram') }}</label>
                    <input type="text" name="instagram_url" id="team"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        required />
                </div>
                <div>
                    <label for="team" class="block capitalize mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('address') }}</label>
                    <input type="text" name="address" id="team"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        required />
                </div>
                <div>
                    <label for="team" class="block capitalize mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('experience') }}</label>
                    <input type="text" name="experience" id="team"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        required placeholder="exp1, exp2, exp3" />
                </div>
                <div>
                    <label for="team" class="block capitalize mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('languages') }}</label>
                    <input type="text" name="languages" id="team"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        required placeholder="turksih, english" />
                </div>
        <div>
            <div class="mb-2">
                <label for="department" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white capitalize">{{
                    __('department') }}</label>
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
            <label for="team" class="block capitalize mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('bio_tr')
                }}</label>
           <textarea type="text" name="bio[tr]" id="team"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                required rows="7"></textarea>
        </div>
        <div>
            <label for="team" class="block capitalize mb-2 text-sm font-medium text-gray-900 dark:text-white">{{
                __('bio_ru')}}</label>
           <textarea type="text" name="bio[ru]" id="team"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                required rows="7"></textarea>
        </div>
        <div>
            <label for="team" class="block capitalize mb-2 text-sm font-medium text-gray-900 dark:text-white">{{
                __('bio_en')}}</label>
                <textarea type="text" name="bio[en]" id="team"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                required rows="7"></textarea>
            <br />
        </div>
        <button type="submit"
            class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    </form>


    </div>
</x-app-layout>
