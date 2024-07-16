<section class="bg-white dark:bg-gray-900">
    @if($errors->all())
        <div class="flex justify-center">
            <a href="#"
                class="block  max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <ul class="max-w-md space-y-1 text-gray-500 list-disc list-inside dark:text-gray-400">
                    @foreach($errors->all() as $error)
                    <li class="text-red-700">
                        {{ $error }}
                    </li>
                    @endforeach

                </ul>
            </a>
        </div>
        @endif
    <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
        <h2 class="mb-4 text-xl font-bold dark:text-white text-indigo-700 capitalize">
            portföyü güncelle {{ $portfolio->title }}
        </h2>
        <form action="{{route('portfolio.update',$portfolio)}}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="category_id" :value="selected2ndCategory ?? selected1stCategory ?? selectedCategory">

                             <div class="flex  p-5 justify-center">
                                                                <ul class="bg-slate-200 px-10">
                                                                    @foreach($categories as $category)

                                                                    @if($loop->first)
                                                                    <li class="py-1">
                                                                        <a class="font-bold capitalize text-gray-600 dark:text-blue-500 ">
                                                                            Kategori seç
                                                                        </a>
                                                                    </li>
                                                                    @endif
                                                                    <li class="py-1" @click="loadChildren(`{{ $category->id}}`)">
                                                                        <a href="#" class="font-bold capitalize text-gray-600 dark:text-blue-500 hover:underline"
                                                                            :class="{'bg-slate-400 text-white': selectedCategory === '{{ $category->id }}'}">
                                                                            {{ $category->name }}
                                                                        </a>
                                                                    </li>
                                                                    @endforeach
                                                                </ul>

                                                                <div class="mx-3"></div>
                                                                <div class="bg-slate-200 p-5 justify-center" x-show="firstLevelChildren.length">
                                                                    <ul>
                                                                        <template x-for="child in firstLevelChildren">
                                                                            <li>
                                                                                <a href="#" @click="loadChildren(child.id,2)"
                                                                                    :class="{'bg-slate-400 text-white': selected1stCategory == child.id}"
                                                                                    class="font-bold capitalize text-gray-600 dark:text-gray-500 hover:underline"
                                                                                    x-text="child.name.tr">
                                                                                </a>
                                                                            </li>
                                                                        </template>
                                                                    </ul>
                                                                </div>
                                                                <div class="mx-2"></div>
                                                                <div class="bg-slate-200 p-5 justify-center" x-show="secondLevelChildren.length">
                                                                    <ul>
                                                                        <template x-for="child in secondLevelChildren">
                                                                            <li>
                                                                                <a href="#" @click="selected2ndCategory = child.id;loadInfo(child.id)"
                                                                                    :class="{'bg-slate-400 text-white': selected2ndCategory == child.id}"
                                                                                    class="font-bold capitalize text-gray-600 dark:text-gray-500 hover:underline"
                                                                                    x-text="child.name.tr">
                                                                                </a>
                                                                            </li>
                                                                        </template>
                                                                    </ul>
                                                                </div>
                                                            </div>
            <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                <div class="sm:col-span-2">
                    <label for="title_tr" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        başlık türkçe
                    </label>
                    <input type="text" name="title[tr]" id="title_tr"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="title in" required value="{{ old('title[tr]') ?? $portfolio->getTranslation('title','tr') }}">
                    <br>
                    <label for="title_tr" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        başlık rusça
                    </label>

                    <input type="text" name="title[ru]" id="title_ru"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="title in" required value="{{ old('title[ru]') ?? $portfolio->getTranslation('title','ru') }}">
                    <br>

                    <label for="title_en" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        başlık ingilizce
                    </label>

                    <input type="text" name="title[en]" id="title_en"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="title in" required value="{{ old('title[en]') ?? $portfolio->getTranslation('title','en') }}">
                </div>


                <div>
                                    <label for="user"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white capitalize">danışman</label>
                                    <select id="user" name="user_id"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                        <option value="" disabled>danışman</option>
                                        @foreach($users as $user)
                                        <option @selected($user->id == $portfolio->user_id ) value="{{ $user->id }}">{{
                                            $user->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                <div class="w-full">
                    <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Fiyat TL
                    </label>
                    <input type="text" name="price_in_tl" id="price"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="₺2999" x-model="formattedNumber" @input="formatNumber" required :value="formattedNumber">
                </div>

<div>
    <label for="province"
        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white capitalize">İl</label>
    <select id="province" name="province_id" @change="loadTowns(`{{ route('province.towns') }}/`+$event.target.value)"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
        <option value="">İl</option>
        @foreach($provinces as $province)
        <option @selected($province->id == $portfolio->province_id) value="{{ $province->id }}">{{ $province->name }}</option>
        @endforeach
    </select>
</div>
<div>
    <label for="town" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white capitalize">İlçe</label>
    <select id="town" name="town_id"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" @change="loadDistricts($event.target.value)">
        <option>İlçe</option>
        <template x-for="town in towns">
            <option @click="loadDistricts(town.id)" x-text="town.name" :value="town.id"
                :selected=" town.id == portfolioTown "></option>
        </template>
    </select>
</div>
<div>
    <label for="district"
        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white capitalize">Mahalle</label>
    <select id="district" name="district_id"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
        <option>Mahalle</option>
        <template x-for="district in districts">
            <option x-text="district.name" :value="district.id" :selected=" district.id == portfolioDistrict "></option>
        </template>
    </select>
</div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                        for="promotion_url">
                    tanıtım linki
                    </label>
                    <input
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        id="promotion_url" type="url" name="promotion_url" placeholder="tanıtım linki" value="{{ old('promotion_url') ?? $portfolio->promotion_url }}">
                    <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="user_avatar_help"></div>
                </div>
                <div>
                  @include('admin.portfolios.map_selector',['model'=>$portfolio])
                </div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                        for="images">resimler</label>
      <input
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                            aria-describedby="images" id="images" type="file" name="images[]" multiple accept="image/*" @change="handleFiles">
                    <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="images"></div>
                </div>
                <div class="sm:col-span-2 flex flex-wrap">
                    <template x-for="image in images">
                        <div class="w-1/4 p-1">
                            <img :src="image.full_url" class="rounded w-52 my-3"
                                :class="{'border-8 border-blue-500 shadow-md':image.is_main}" />
                            <p class="font-bold text-center text-indigo-700" x-show="image.is_main">vitrin</p>
                            <button type="button" @click="deleteImage(image.id)"
                                class="px-3 py-2 text-xs font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800 mt-1">
                                sil
                            </button>
                            <button type="button" @click="setAsMainImage(image.id)"
                                class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-1">
                                vitrin yap
                            </button>

                        </div>
                    </template>
                </div>

            </div>
<div class="sm:col-span-2">
        <p class="font-bold text-base my-4 text-indigo-800">
            Açıklama Türkçesi
        </p>
        <div id="description_tr">{!! $portfolio->getTranslation('description','tr') !!}</div>
    </div>
    <div class="sm:col-span-2">
        <p class="font-bold text-base my-4 text-indigo-800">Açıklama Rusça</p>
        <div id="description_ru" class="">{!! $portfolio->getTranslation('description','ru') !!}</div>
    </div>
    <div class="sm:col-span-2 mt-b0">
        <p class="font-bold text-base my-4 text-indigo-800">
            Açıklama Inglizce
        </p>
        <div id="description_en">{!! $portfolio->getTranslation('description','en') !!}</div>
    </div>
            <br>
                                <input type="hidden" name="description[tr]" id="desc_tr">
                                <input type="hidden" name="description[ru]" id="desc_ru">
                                <input type="hidden" name="description[en]" id="desc_en">
            @include('admin.portfolios.edit_info_form')
            @include('admin.portfolios.edit_feature_form')

            <button type="submit" id="submit-form"
                class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                kaydet
            </button>
        </form>
    </div>
</section>
