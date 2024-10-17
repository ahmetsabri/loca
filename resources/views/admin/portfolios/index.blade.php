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
        <div class="flex justify-evenly my-10">
            <div class="w-1/2">
                @include('search', ['action' => request()->fullUrl()])
            </div>
            <div class="w-1/2" x-data="{
                sortBy(s) {
                    const url = `{{ request('sort') }}`
                    const page = `{{ request('page') }}`

                    if (url && page) {
                        window.location.href = '{{ request()->fullUrlWithoutQuery('sort') }}&sort=' + s
                        return
                    }

                    window.location.href = '{{ request()->fullUrlWithoutQuery('sort') }}?sort=' + s

                },
            }">
                <div class="w-1/2 text-right ml-60">
                    <select id="sort" @change="sortBy($event.target.value)"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="" selected disabled>{{ __('general.sort') }}</option>
                        <option value="price_in_tl" @selected(request('sort') == 'price_in_tl')>
                            {{ __('general.low_price_first') }}</option>
                        <option value="-price_in_tl" @selected(request('sort') == '-price_in_tl')>
                            {{ __('general.high_price_first') }}</option>
                        <option value="-created_at" @selected(request('sort') == '-created_at')>
                            {{ __('general.new_created_at') }}</option>
                        <option value="created_at" @selected(request('sort') == 'created_at')>
                            {{ __('general.old_created_at') }}</option>

                    </select>
                </div>


            </div>

        </div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg" x-data="{
            deletePortfolio(url) {
                if (!confirm('emin misiniz?')) {
                    return
                }
                window.location.href = url;
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
                            fiyat
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            işlemler
                        </th>

                    </tr>


                </thead>
                <tbody>

                    @foreach ($portfolios as $portfolio)
                        @include('admin.categories.new_sub_category', ['subCategory' => $portfolio])

                        <tr
                            class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 text-center">
                            <td scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $portfolio->ad_number }}
                            </td>
                            <td scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $portfolio->created_at->toDateString() }}
                            </td>
                            <td scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $portfolio->title }}
                            </td>
                            <td scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                @foreach ($portfolio->category->ancestorsAndSelf->reverse() as $ancestor)
                                    {{ $ancestor->name }}
                                    @if (!$loop->last)
                                        >
                                    @endif
                                @endforeach
                            </td>
                            <td scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $portfolio->price_in_tl }} ₺
                            </td>
                            <td scope="row"
                                class=" px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <a href="{{ route('portfolio.edit', $portfolio) }}"
                                    dal-target="edit-category-modal-{{ $portfolio->id }}"
                                    data-modal-toggle="edit-category-modal-{{ $portfolio->id }}"
                                    class="px-3 py-2 text-sm font-medium text-center text-white bg-indigo-700 rounded-lg hover:bg-indigo-800 focus:ring-4 focus:outline-none focus:ring-indigo-300 dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-800">düzenle</a>


                                <button @click="deletePortfolio(`{{ route('portfolio.delete', $portfolio) }}`)"
                                    type="button"
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
