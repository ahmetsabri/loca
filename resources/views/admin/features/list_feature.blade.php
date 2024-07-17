<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3 text-center">
                     ad
                </th>

                <th scope="col" class="px-6 py-3 text-center">
                     işlemler
                </th>


            </tr>


        </thead>
        <tbody>

            @foreach($features as $feature)

                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 text-center">
                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$feature->name}}
                </td>
                <td scope="row" class=" px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">




<a href={{ route('option.index',$feature) }} class="px-3 py-2 mx-1 text-sm font-medium text-center text-white bg-teal-700 rounded-lg hover:bg-teal-800 focus:ring-4 focus:outline-none focus:ring-teal-300 dark:bg-teal-600 dark:hover:bg-teal-700 dark:focus:ring-indigo-800">
    seçenekler
</a>

<a href={{ route('feature.edit',$feature) }}
    class="px-3 py-2 mx-3 text-sm font-medium text-center text-white bg-indigo-700 rounded-lg hover:bg-indigo-800 focus:ring-4 focus:outline-none focus:ring-indigo-300 dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-800">
    güncelle
</a>

<button @click="deleteFeature(`{{route('feature.delete',$feature)}}`)" type="button" class="px-3 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">sil</button>
                </td>
            </tr>
    @include('admin.features.edit_feature',['name'=>$feature->getTranslations('name'),'id'=>$feature->id])
            @endforeach
        </tbody>
    </table>
</div>
