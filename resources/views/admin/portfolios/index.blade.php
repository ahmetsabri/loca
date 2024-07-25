<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight capitalize">
            portföyler
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 w-full">
            <a href="{{ route('portfolio.create') }}"
                    class=" text-white capitalize bg-indigo-700 hover:bg-indigo-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    type="button">
                    yeni portföy
                </a>
        </div>
    </div>
    <div class="m-5">
<div class="relative overflow-x-auto shadow-md sm:rounded-lg" x-data="{
    deletePortfolio(url){
        if(!confirm('emin misiniz?')){
            return
        }
        window.location.href=url;
    }
}">

    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3 text-center">
                    ilan no
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    Eklenme tarihi
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    başlık
                </th>
                <th scope="col" class="px-6 py-3 text-center">
        kategori
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    işlemler
                </th>

            </tr>


        </thead>
        <tbody>

            @foreach($portfolios as $portfolio)
            @include('admin.categories.new_sub_category',['subCategory'=>$portfolio])

            <tr
                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 text-center">
                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$portfolio->ad_number}}
                </td>
                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$portfolio->created_at->toDateString()}}
                </td>
                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$portfolio->title}}
                </td>
                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    @foreach($portfolio->category->ancestorsAndSelf->reverse() as $ancestor)
                        {{ $ancestor->name }}
                        @if(!$loop->last)
                    >
                        @endif
                    @endforeach
                </td>
                <td scope="row" class=" px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <a href="{{ route('portfolio.edit',$portfolio) }}"

                    dal-target="edit-category-modal-{{$portfolio->id}}"
                        data-modal-toggle="edit-category-modal-{{$portfolio->id}}"
                        class="px-3 py-2 text-sm font-medium text-center text-white bg-indigo-700 rounded-lg hover:bg-indigo-800 focus:ring-4 focus:outline-none focus:ring-indigo-300 dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-800">düzenle</a>


                    <button @click="deletePortfolio(`{{route('portfolio.delete',$portfolio)}}`)" type="button"
                        class="px-3 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">sil</button>
                </td>
            </tr>

            @endforeach
        </tbody>
    </table>
</div>
    </div>

<div class="flex justify-center">
    {{ $portfolios->links() }}
</div>
</x-app-layout>
