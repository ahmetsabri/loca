<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3 text-center">
                     {{__('name')}}
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                     {{__('actions')}}
                </th>

            </tr>


        </thead>
        <tbody>

            @foreach($categories as $category)
        @include('admin.categories.new_sub_category',['subCategory'=>$category])

                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 text-center">
                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$category->name}}
                </td>
                <td scope="row" class=" px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">


<button type="button" data-modal-target="new-sub-modal-{{$category->id}}" data-modal-toggle="new-sub-modal-{{$category->id}}" class="px-3 py-2 text-sm font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
{{__('create_sub_category')}}</button>
@if($category->children()->count() > 0)
<a href="{{route('category.show',$category)}}" class="px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
{{__('show')}}</a>
@endif

<button type="button"  data-modal-target="edit-category-modal-{{$category->id}}" data-modal-toggle="edit-category-modal-{{$category->id}}" class="px-3 py-2 text-sm font-medium text-center text-white bg-indigo-700 rounded-lg hover:bg-indigo-800 focus:ring-4 focus:outline-none focus:ring-indigo-300 dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-800">{{__('edit')}}</button>


<button @click="deleteCategory(`{{route('category.delete',$category)}}`)" type="button" class="px-3 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">{{__('delete')}}</button>
                </td>
            </tr>
    @include('admin.categories.edit_category',['name'=>$category->getTranslations('name'),'id'=>$category->id])
            @endforeach
        </tbody>
    </table>
</div>
