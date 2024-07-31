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
                         />
                </div>
        <div>
                    <label for="team" class="block capitalize mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('general.phone') }}</label>
                    <input type="text" name="phone" id="team"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                         />
                </div>
                @foreach(config('app.locales') as $locale)
                        <div>
                            <label for="team" class="block capitalize mb-2 text-sm font-medium text-gray-900 dark:text-white">{{
                                __('general.title_'.$locale) }}</label>
                            <input  type="text" name="title[{{ $locale }}]" id="team"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                 />
                        </div>
                        @endforeach
                <div>
                    <label for="team" class="block capitalize mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('general.email') }}</label>
                    <input type="email" name="email" id="team"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                         />
                </div>

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
                    <label for="team" class="block capitalize mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('whatsapp') }}</label>
                    <input type="text" name="whatsapp" id="team"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                         />
                </div>
                <div>
                    <label for="team" class="block capitalize mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('youtube') }}</label>
                    <input type="text" name="youtube" id="team"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                         />
                </div>
                <div>
                    <label for="team" class="block capitalize mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('linkedin') }}</label>
                    <input type="text" name="linkedin" id="team"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                         />
                </div>

                <div>
                    <label for="team" class="block capitalize mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        {{ __('general.office') }} konumu </label>
                    <input type="text" name="office_location" id="team"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                         />
                </div>
                <div>
                        <label for="team" class="block capitalize mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            {{ __('general.address') }} bilgileri</label>
                        <input type="text" name="address" id="team"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                             />
                    </div>
                <div>
                    <label for="team" class="block capitalize mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('general.experience') }}</label>
                    <input type="text" name="experience" id="team"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                         placeholder="exp1, exp2, exp3" />
                </div>
                <div>
                    <label for="experience_area" class="block capitalize mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        {{ __('general.experience_area') }}</label>
                    <input type="text" name="experience_area" id="experience_area"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                         placeholder="exp1, exp2, exp3" />
                </div>
                <div>
                    <label for="team" class="block capitalize mb-2 text-sm font-medium text-gray-900 dark:text-white">diller</label>
                    <input type="text" name="languages" id="team"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                         placeholder="turksih, english" />
                </div>
        <div>
            <div class="mb-2">
                <label required for="department" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white capitalize">departman</label>
                <select id="department" name="department_id"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    @foreach($departments as $department)
                    <option @selected($loop->first ) value="{{ $department->id }}">{{$department->name }}</option>
                    @endforeach
                </select>
            </div>
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="images">resim</label>
            <input
                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                aria-describedby="images" id="images" type="file" name="image" required>
            <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="name"></div>
        </div>

        <div>
         <p class="font-bold text-base my-4 text-indigo-800">
                Bio Türkçesi
            </p>
            <div id="description_tr">{!! old('description')['tr'] ?? '' !!}</div>
            </div>
            <div class="sm:col-span-2">
                <p class="font-bold text-base my-4 text-indigo-800">Bio Rusça</p>
                <div id="description_ru" class="">{!! old('description')['ru'] ?? '' !!}</div>
            </div>
            <div class="sm:col-span-2 mt-b0">
                <p class="font-bold text-base my-4 text-indigo-800">
                    Bio Inglizce
                </p>
                <div id="description_en">{!! old('description')['en'] ?? '' !!}</div>
            </div>
                            <input type="hidden" name="bio[tr]" id="desc_tr">
                            <input type="hidden" name="bio[ru]" id="desc_ru">
                            <input type="hidden" name="bio[en]" id="desc_en">
        <button type="submit" id="submit-form"
            class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">gönder</button>
    </form>
    </div>

    <script>
const tr = new Quill('#description_tr', {
        theme: 'snow',
        modules: {
        toolbar: [
        [{ 'header': [1, 2, false] }],
        ['bold', 'italic', 'underline'],
        [{ 'list': 'ordered'}, { 'list': 'bullet' }],
        [{ 'align': [] }],
        ['link', 'image', 'video']

        ]
        }
        });
        const ru = new Quill('#description_ru', {
        theme: 'snow',
        modules: {
        toolbar: [
        [{ 'header': [1, 2, false] }],
        ['bold', 'italic', 'underline'],
        [{ 'list': 'ordered'}, { 'list': 'bullet' }],
        [{ 'align': [] }],
        ['link', 'image', 'video']

        ]
        }
        });
        const en = new Quill('#description_en', {
        theme: 'snow',
        modules: {
        toolbar: [
        [{ 'header': [1, 2, false] }],
        ['bold', 'italic', 'underline'],
        [{ 'list': 'ordered'}, { 'list': 'bullet' }],
        [{ 'align': [] }],
        ['link', 'image', 'video']

        ]
        }
        });
        document.getElementById('submit-form').addEventListener('click', () => {
        const trval = tr.root.innerHTML;
        const ruval = ru.root.innerHTML;
        const enval = en.root.innerHTML;
        document.getElementById('desc_tr').value = trval;
        document.getElementById('desc_ru').value = ruval;
        document.getElementById('desc_en').value = enval;
        });

    </script>



</x-app-layout>
