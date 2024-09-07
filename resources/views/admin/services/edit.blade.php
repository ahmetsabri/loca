<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight capitalize">
            yeni hizmet
        </h2>
    </x-slot>
    <div class="p-12 flex justify-center" x-data="{
        sections: 0,
        mainFeatures: 0,
        sectionFeatures: 1
    }">

        <form class="space-y-4 w-1/2" action="{{ route('service.update', $service) }}" method="post"
            enctype="multipart/form-data">
            <div class="mt">
                @if ($errors->all())
                    <div class="flex justify-center">
                        <a href="#"
                            class="block  max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                            <ul class="max-w-md space-y-1 text-gray-500 list-disc list-inside dark:text-gray-400">
                                @foreach ($errors->all() as $error)
                                    <li class="text-red-700">
                                        {{ $error }}
                                    </li>
                                @endforeach

                            </ul>
                        </a>
                    </div>
                @endif
            </div>
            @csrf
            @foreach (config('app.locales') as $locale)
                <div>
                    <label for="team"
                        class="block capitalize mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        hizmet adı {{ $locale }}
                    </label>
                    <input type="text" value="{{ $service->getTranslation('name', $locale) }}"
                        name="name[{{ $locale }}]" id="team"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        required />
                </div>
            @endforeach
            <div>
                <label for="team"
                    class="block capitalize mb-2 text-sm font-medium text-gray-900 dark:text-white">Video
                    Linki</label>
                <input value="{{ $service->promotion_url }}" type="url" name="promotion_url" id="team"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" />
            </div>
            <div>
                <div class="mb-2">
                    <label for="department"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white capitalize">departman</label>
                    <select id="department" name="department_id"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option value="">departman</option>
                        @foreach ($departments as $department)
                            <option @selected($department->id == $service->department_id) value="{{ $department->id }}">{{ $department->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            @foreach (config('app.locales') as $locale)
                <div>
                    <label for="team"
                        class="block capitalize mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Açıklama {{ $locale }}
                    </label>
                    <textarea type="text" name="description[{{ $locale }}]" id="team"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        required rows="7">{{ $service->getTranslation('description', $locale) }}</textarea>
                </div>
            @endforeach
            <h3 class="text-2xl font-semibold ">
                özellikler
            </h3>
            @foreach ($service->features as $index => $feature)
                <div class="flex justify-evenly">
                    @foreach (config('app.locales') as $locale)
                        <input placeholder="{{ $locale }}"
                            value="{{ $feature->getTranslation('value', $locale) }}" type="text"
                            name="features[{{ $index }}][{{ $locale }}]"
                            class="bg-gray-50 mx-3 my-2 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    @endforeach
                </div>
            @endforeach

            <template x-for="feature,index in mainFeatures">
                <div class="flex justify-evenly">
                    <input placeholder="tr" type="text" :name="`features[${index+500}][tr]`"
                        class="bg-gray-50 mx-3 my-2 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">

                    <input placeholder="ru" type="text" :name="`features[${index+500}][ru]`"
                        class="bg-gray-50 border mx-3 my-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">

                    <input placeholder="en" type="text" :name="`features[${index+500}][en]`"
                        class="bg-gray-50 border mx-3 my-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                </div>
            </template>
            <button type="button" @click="mainFeatures++"
                class="focus:outline-none text-white bg-indigo-700 hover:bg-indigo-800 focus:ring-4 focus:ring-indigo-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-green-800">
                özellik ekle
            </button>
            <hr>

            @foreach ($service->subServices as $index => $subService)
                <h1 class="text-left font-bold text-2xl capitalize">bölüm <span>{{ $index + 1 }}</span> </h1>
                @foreach (config('app.locales') as $locale)
                    <div>
                        <label for="team"
                            class="block capitalize mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            hizmet adı {{ $locale }}
                        </label>
                        <input type="text" value="{{ $subService->getTranslation('name', $locale) }}"
                            name="sub_services[{{ $index }}][name][{{ $locale }}]" id="team"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            required />
                    </div>
                @endforeach


                @foreach (config('app.locales') as $locale)
                    <div>
                        <label for="team"
                            class="block capitalize mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Açıklama {{ $locale }}
                        </label>
                        <textarea type="text" name="sub_services[{{ $index }}][description][{{ $locale }}]" id="team"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            required rows="7">{{ $subService->getTranslation('description', $locale) }}</textarea>
                    </div>
                @endforeach

                @foreach ($subService->features as $findex => $feature)
                    <div class="flex justify-evenly">
                        @foreach (config('app.locales') as $locale)
                            <input value="{{ $feature->getTranslation('value', $locale) }}"
                                placeholder="{{ $locale }}" type="text"
                                name="sub_services[{{ $index }}][features][{{ $findex }}][{{ $locale }}]"
                                class="bg-gray-50 mx-3 my-2 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="₺2999">
                        @endforeach
                    </div>
                @endforeach

                <template x-for="feature,index in sectionFeatures">
                    <div class="flex justify-evenly">
                        <input placeholder="tr" type="text"
                            :name="`sub_services[{{ $index }}][features][${index+700}][tr]`"
                            class="bg-gray-50 mx-3 my-2 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">

                        <input placeholder="ru" type="text"
                            :name="`sub_services[{{ $index }}][features][${index+700}][ru]`"
                            class="bg-gray-50 border mx-3 my-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">

                        <input placeholder="en" type="text"
                            :name="`sub_services[{{ $index }}][features][${index+700}][en]`"
                            class="bg-gray-50 border mx-3 my-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    </div>
                </template>

                <button type="button" @click="sectionFeatures++"
                    class="focus:outline-none text-white bg-indigo-700 hover:bg-indigo-800 focus:ring-4 focus:ring-indigo-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-green-800">
                    özellik ekle
                </button>
            @endforeach


            <template x-for="i,ind in sections">
                <div>
                    @include('admin.services.more_sctions')
                </div>
            </template>
            <button type="button" @click="sections++"
                class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                yeni bölüm ekle
            </button>

            <button x-show="sections>0" type="button" @click="if(sections != 0){sections--}"
                class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-green-800">
                bölüm kaldır
            </button>
            <button type="submit"
                class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Kaydet</button>
        </form>
    </div>
</x-app-layout>
