<hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
<h4 class="capitalize font-bold text-3xl text-blue-700">

Özellikler
</h4>
@foreach($features as $feature)
<h4 class="font-bold my-5 text-indigo-600 text-xl capitalize">{{$feature->name}}</h4>
        <template x-for="feature,index in numOfFeatures">
                <div class="flex">
                    <div class="mb-5 mx-1">
                        <label for="base-input"
                            class="block mb-2 text-base font-semibold uppercase text-gray-900 dark:text-white">tr</label>
                        <input :name="`features[${index}][{{$feature->id}}][tr]`" type="text" id="base-input"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>

                    <div class="mb-5 mx-1 w-1/3">
                        <label for="base-input"
                            class="block mb-2 text-base font-semibold uppercase text-gray-900 dark:text-white">ru</label>
                        <input :name="`features[${index}][{{$feature->id}}][ru]`" type="text" id="base-input"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>

                    <div class="mb-5 mx-1 w-1/3">
                        <label for="base-input"
                            class="block mb-2 text-base font-semibold uppercase text-gray-900 dark:text-white">en</label>
                        <input :name="`features[${index}][{{$feature->id}}][en]`" type="text" id="base-input"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                </div>
            </template>

            <div class="w-full mt-10">
                    <button @click="numOfFeatures++" type="button"
                        class="px-3 py-2 text-sm font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-blue-800">
                        yeni özellik ekle
                        </button>
                </div>
<hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">

        @endforeach
