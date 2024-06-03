<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
        <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">
            {{__('new_portfolio')}}
        </h2>
        <form action="{{route('portfolio.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                <div class="sm:col-span-2">
                    <label for="title_tr" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        {{__('title_tr')}}
                    </label>
                    <input type="text" name="title[tr]" id="title_tr"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="title in" required>
                    <br>
                    <label for="title_tr" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        {{__('title_ru')}}
                    </label>

                    <input type="text" name="title[ru]" id="title_ru"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="title in" required>
                    <br>

                    <label for="title_en" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        {{__('title_en')}}
                    </label>

                    <input type="text" name="title[en]" id="title_en"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="title in" required>
                </div>

                <div class="w-full">
                    <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">TL
                        Price</label>
                    <input type="number" name="price_in_tl" id="price"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="₺2999" required>
                </div>
                <div class="w-full">
                    <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">USD
                        Price</label>
                    <input type="number" name="price_in_usd" id="price_in_usd"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="$2999" required="">
                </div>
                <div class="w-full">
                    <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">EUR
                        Price</label>
                    <input type="number" name="price_in_eur" id="price_in_eur"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="€2999" required="">
                </div>
                <div>
                    <label for="category"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                    <select id="category" name="category_id"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        @foreach($categories as $category)


                        <option value="{{$category->id}}" @if ($loop->first) selected @endif>
                            @foreach($category->ancestorsAndSelf->reverse() as $ancestor)

                            {{$ancestor->name}}

                            @if(!$loop->last)
                            >
                            @endif



                            @endforeach
                        </option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                        for="user_avatar">{{__('promotion_url')}}</label>
                    <input
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        id="user_avatar" type="url" name="promotion_url" placeholder="{{__('promotion_url')}}">
                    <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="user_avatar_help"></div>
                </div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                        for="user_avatar">{{__('location')}}</label>
                    <input
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        id="user_avatar" type="text" name="location" placeholder="{{__('location')}}">
                    <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="user_avatar_help"></div>
                </div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                        for="images">images</label>
                    <input
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        aria-describedby="images" id="images" type="file" name="images[]" multiple>
                    <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="broushour"></div>
                </div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                        for="user_avatar">brochure</label>
                    <input
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        aria-describedby="brochure_help" id="brochure" type="file" name="brochure">
                    <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="brochure"></div>
                </div>

                <div class="sm:col-span-2">
                    <label for="description_tr" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        {{__('description_tr')}}
                    </label>
                    <textarea name="description[tr]" id="description_tr" rows="4"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="{{__('description_tr')}}"></textarea>
                </div>
                <div class="sm:col-span-2">
                    <label for="description_tr" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        {{__('description_ru')}}
                    </label>
                    <textarea name="description[ru]" id="description_ru" rows="4"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="{{__('description_ru')}}"></textarea>
                </div>
                <div class="sm:col-span-2">
                    <label for="description_en" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        {{__('description_en')}}
                    </label>
                    <textarea name="description[en]" id="description_en" rows="4"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="{{__('description_en')}}"></textarea>
                </div>
            </div>

            @include('admin.portfolios.info_form')
            @include('admin.portfolios.feature_form')

            <button type="submit"
                class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                save
            </button>
        </form>
    </div>
</section>
