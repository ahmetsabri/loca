<h1 class="text-left font-bold text-2xl capitalize">yeni bölüm </h1>
@foreach(config('app.locales') as $locale)
<div>
    <label for="team" class="block capitalize mb-2 text-sm font-medium text-gray-900 dark:text-white">
        hizmet adı {{ $locale }}
    </label>
    <input type="text" :name="`sub_services[${ind+1000}][name][{{ $locale }}]`" id="team"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
        required />
</div>
@endforeach


@foreach(config('app.locales') as $locale)
            <div>
                <label for="team" class="block capitalize mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Açıklama {{ $locale }}
                </label>
                <textarea type="text" :name="`sub_services[${ind+1000}][description][{{ $locale }}]`" id="team"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                    required rows="7"></textarea>
            </div>
@endforeach

<template x-for="feature,index in sectionFeatures">
                <div class="flex justify-evenly">
                    <input placeholder="tr" type="text" :name="`sub_services[${ind+1000}][features][${index}][tr]`"
                        class="bg-gray-50 mx-3 my-2 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        >

                    <input placeholder="ru" type="text" :name="`sub_services[${ind+1000}][features][${index}][ru]`"
                        class="bg-gray-50 border mx-3 my-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        >

                    <input placeholder="en" type="text" :name="`sub_services[${ind+1000}][features][${index}][en]`"
                        class="bg-gray-50 border mx-3 my-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        >
                </div>
            </template>
<button type="button" @click="sectionFeatures++"
    class="focus:outline-none text-white bg-indigo-700 hover:bg-indigo-800 focus:ring-4 focus:ring-indigo-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-green-800">
   özellik ekle
</button>

<hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
