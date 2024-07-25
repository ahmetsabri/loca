<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight capitalize">
            yeni ekip üyesi
        </h2>
    </x-slot>
    <div class="p-12 flex justify-center">

    <form class="space-y-4 w-1/2" action="{{route('team.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        @if($errors->all())

            <div class="flex justify-center">
                <a href="#"
                    class="block  max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <ul class="max-w-md space-y-1 text-gray-500 list-disc list-inside dark:text-gray-400">

                        @foreach($errors->all() as $error)
                        <li class="text-red-700">
                            {{ $error }}
                        </li>
                        @endforeach

                    </ul>
                </a>
            </div>
            @endif
        <div>
            <label for="team" class="block capitalize mb-2 text-sm font-medium text-gray-900 dark:text-white">Ad Soyad</label>
            <input type="text" name="name" id="team"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                required />
        </div>
        <div>
                    <label for="ttype_no" class="block capitalize mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        TTYB No
                    </label>
                    <input type="text" name="ttype_no" id="ttype_no"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        required />
                </div>
        <div>
                    <label for="team" class="block capitalize mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('general.phone') }}</label>
                    <input type="text" name="phone" id="team"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        required />
                </div>
                @foreach(config('app.locales') as $locale)
                        <div>
                            <label for="team" class="block capitalize mb-2 text-sm font-medium text-gray-900 dark:text-white">{{
                                __('general.title_'.$locale) }}</label>
                            <input  type="text" name="title[{{ $locale }}]" id="team"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                required />
                        </div>
                        @endforeach
                <div>
                    <label for="team" class="block capitalize mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('general.email') }}</label>
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
                         />
                </div>
                <div>
                    <label for="team" class="block capitalize mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('instagram') }}</label>
                    <input type="text" name="instagram_url" id="team"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                         />
                </div>
                <div>
                    <label for="team" class="block capitalize mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        {{ __('general.address') }} konumu linki</label>
                    <input type="text" name="address" id="team"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        required />
                </div>
                <div>
                    <label for="team" class="block capitalize mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        {{ __('general.office') }} konumu linki</label>
                    <input type="text" name="office_location" id="team"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        required />
                </div>
                <div>
                    <label for="team" class="block capitalize mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('general.experience') }}</label>
                    <input type="text" name="experience" id="team"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        required placeholder="exp1, exp2, exp3" />
                </div>
                <div>
                    <label for="team" class="block capitalize mb-2 text-sm font-medium text-gray-900 dark:text-white">diller</label>
                    <input type="text" name="languages" id="team"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        required placeholder="turksih, english" />
                </div>
        <div>
            <div class="mb-2">
                <label for="department" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white capitalize">departman</label>
                <select id="department" name="department_id"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    <option value="">{{ __('departman') }}</option>
                    @foreach($departments as $department)
                    <option value="{{ $department->id }}">{{$department->name }}</option>
                    @endforeach
                </select>
            </div>
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="images">resim</label>
            <input
                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                aria-describedby="images" id="images" type="file" name="image">
            <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="name"></div>
        </div>

        <div>
            <label for="team" class="block capitalize mb-2 text-sm font-medium text-gray-900 dark:text-white">bio tr</label>
           <textarea type="text" name="bio[tr]" id="team"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                required rows="7"></textarea>
        </div>
        <div>
            <label for="team" class="block capitalize mb-2 text-sm font-medium text-gray-900 dark:text-white">bio ru</label>
           <textarea type="text" name="bio[ru]" id="team"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                required rows="7"></textarea>
        </div>
        <div>
            <label for="team" class="block capitalize mb-2 text-sm font-medium text-gray-900 dark:text-white">{{
                __('bio en')}}</label>
                <textarea type="text" name="bio[en]" id="team"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                required rows="7"></textarea>
            <br />
        </div>
        <button type="submit"
            class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">gönder</button>
    </form>


    </div>
</x-app-layout>
