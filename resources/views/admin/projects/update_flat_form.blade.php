<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
        <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white capitalize">{{ __('flat') }} <span x-text="'# '+(flatIndex + 1)"></span> </h2>
            <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                <div class="w-full">
                    <label for="rooms"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('rooms') }}</label>
                    <input type="text" :name="`flats[${flatIndex+500}][rooms]`" id="brand"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="1 + 1" required="">
                </div>
                <div class="w-full">
                    <label for="bathroom_count"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('bathroom_count') }}</label>
                    <input type="text" :name="`flats[${flatIndex+500}][bathroom_count]`"  id="bathrooms_count"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="2" required="">
                </div>
                <div class="w-full">
                    <label for="net"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('net') }}</label>
                    <input type="number" :name="`flats[${flatIndex+500}][net]`" id="net"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="300" required="">
                </div>
                <div class="w-full">
                    <label for="gross"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('gross') }}</label>
                    <input type="number" :name="`flats[${flatIndex+500}][gross]`" id="gross"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="100" required="">
                </div>

                @foreach(config('app.locales') as $locale)
             <div class="sm:col-span-2">
                @if($loop->first)
                <label for="flat_description" class="block mb-2 text-2xl font-semibold capitalize text-gray-900 dark:text-white">{{
                    __('description') }}</label>
                @endif
                    <textarea required :name="`flats[${flatIndex+500}][description][{{ $locale }}]`" rows="4"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="{{ $locale }} "></textarea>
                </div>
             @endforeach
            </div>
<hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
<h4 class="text-xl font-bold mt-10 w-full">{{ __('features') }}</h4>

<template x-for="feature,index in flatFeatures">
    <div class="flex justify-evenly">
        <input placeholder="tr" type="text" :name="`flats[${flatIndex+500}][features][${index}][tr]`"
            class="bg-gray-50 mx-3 my-2 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
            placeholder="₺2999">

        <input placeholder="ru" type="text" :name="`flats[${flatIndex+500}][features][${index}][ru]`"
            class="bg-gray-50 border mx-3 my-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
            placeholder="₺2999">

        <input placeholder="en" type="text" :name="`flats[${flatIndex+500}][features][${index}][en]`"
            class="bg-gray-50 border mx-3 my-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
            placeholder="₺2999">
    </div>
</template>
<div class="w-full mt-10">
    <button @click="flatFeatures++" type="button"
        class="px-3 py-2 text-sm font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-blue-800">
        yeni özellik ekle
    </button>
    </div>
</section>
