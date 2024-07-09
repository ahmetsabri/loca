<hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
<span class="text-indigo-700 font-bold text-3xl capitalize mt-20">bilgileri</span>

<template x-for="info in infos">

    <div class="flex w-full mt-5">
        <h4 class="font-bold mt-7 w-1/2 text-lg text-indigo-700" x-text="info.name.tr"
            x-show="info.options.length == 0"></h4>
        <template x-if="info.options.length == 0">
            <template x-for="locale in ['tr','en','ru']">
                <div class="mx-4">
                    <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                        x-text="locale"></label>
                    <input :value="selectedInfos.find(obj => obj.info_id === info.id)?.value?.[locale]" :name="`info[${info.id}][${locale}]`" type="text" id="base-input"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>

            </template>
        </template>

        <template x-if="info.options.length > 0">
            <div class="flex w-full">
                <h4 class="font-bold mt-1 text-lg w-1/2 text-indigo-700" x-text="info.name.tr"></h4>
                <select :name="`info[${info.id}]`"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full px-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mx-10">

                    <template x-for="option in info.options">
                        <option :value="option.id" x-text="option.name.tr" :selected="selectedOptions.find(obj => obj.info_id === info.id)?.value_id == option.id"></option>
                    </template>
                </select>
            </div>
        </template>
    </div>
</template>
