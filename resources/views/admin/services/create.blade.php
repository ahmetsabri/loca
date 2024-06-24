<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight capitalize">
           yeni hizmet
        </h2>
    </x-slot>
    <div class="p-12 flex justify-center" x-data="{
    sections:0,
    mainFeatures:2,
    sectionFeatures:2
}">

        <form class="space-y-4 w-1/2" action="{{route('service.store')}}" method="post" enctype="multipart/form-data">
            <div class="mt">
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
                </div>
            @csrf
            @foreach(config('app.locales') as $locale)
            <div>
                <label for="team" class="block capitalize mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    hizmet adı {{ $locale }}
                </label>
                <input type="text" name="name[{{ $locale }}]" id="team"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                    required />
            </div>
            @endforeach
            <div>
                <label for="team" class="block capitalize mb-2 text-sm font-medium text-gray-900 dark:text-white">Video Linki</label>
                <input type="url" name="promotion_url" id="team"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                    required />
            </div>


            @foreach(config('app.locales') as $locale)
            <div>
                <label for="team" class="block capitalize mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Açıklama {{ $locale }}
                </label>
                <textarea type="text" name="description[{{ $locale }}]" id="team"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                    required rows="7"></textarea>
            </div>
        @endforeach
            <h3 class="text-2xl font-semibold ">
                özellikler
            </h3>
            <template x-for="feature,index in mainFeatures">
                        <div class="flex justify-evenly">
                            <input placeholder="tr" type="text" :name="`features[${index}][tr]`"
                                class="bg-gray-50 mx-3 my-2 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="₺2999">

                            <input placeholder="ru" type="text" :name="`features[${index}][ru]`"
                                class="bg-gray-50 border mx-3 my-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="₺2999">

                            <input placeholder="en" type="text" :name="`features[${index}][en]`"
                                class="bg-gray-50 border mx-3 my-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="₺2999">
                        </div>
                    </template>
                    <button type="button" @click="mainFeatures++"
                            class="focus:outline-none text-white bg-indigo-700 hover:bg-indigo-800 focus:ring-4 focus:ring-indigo-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-green-800">
                            özellik ekle
                        </button>
<hr>


                    <template  x-for="i,ind in sections">
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
                class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">gönder</button>
        </form>


    </div>
</x-app-layout>
