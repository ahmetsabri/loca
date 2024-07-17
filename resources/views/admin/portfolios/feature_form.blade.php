<hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
<h4 class="capitalize font-bold text-3xl text-blue-700">

Özellikler
</h4>

<template x-for="feature in features">
    <template  x-if="feature.options.length > 1">
        <div class="">
    <h3 class="mb-4 font-semibold text-indigo-600 dark:text-white text-2xl" x-text="feature.name.tr"></h3>
<ul
            class="items-center w-full flex-wrap text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
    <template  x-for="option in feature.options">
<li class="w-1/3 border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
        <div class="flex items-center ps-3">
            <input :id="`vue-checkbox-${option.id}`" type="checkbox" :value="option.id"
                class="w-4 h-4 cursor-pointer text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500"
                :name="`features[${feature.id}][]`">
            <label :for="`vue-checkbox-${option.id}`"
                class="w-full py-3 ms-2 text-sm font-semibold text-indigo-600 cursor-pointer dark:text-gray-300" x-text="option.name.tr" ></label>
        </div>
    </li>
    </template>
</ul>

</div>
</template>
</template>
<hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
