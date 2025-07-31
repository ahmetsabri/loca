<section class="bg-white dark:bg-gray-900">
    @if ($errors->all())
        <div class="flex justify-center py-1">
            <a href="#"
                class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <ul class="max-w-md space-y-1 text-gray-500 list-disc list-inside dark:text-gray-400">
                    @foreach ($errors->all() as $error)
                        <li class="text-red-700">
                            {{ $error }}
                        </li>
                    @endforeach
                </ul>
            </a>
        </div>
    @endif
    <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
        <h2 class="mb-4 text-xl font-bold text-indigo-700 dark:text-white capitalize">
            Projeyi Düzenle
        </h2>
        <form action="{{ route('project.update', $project) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                <div class="sm:col-span-2">
                    @foreach (config('app.locales') as $locale)
                        <label for="title_tr" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            {{ __("general.title_$locale") }}
                        </label>
                        <input value="{{ $project->getTranslation('title', $locale) }}" type="text"
                            name="title[{{ $locale }}]" id="title_tr"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            required>
                        <br>
                    @endforeach
                </div>
                <div>
                    <label for="province"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white capitalize">
                        İl
                    </label>
                    <select @change="loadTowns($event.target.value)" required id="province" name="province_id"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option value="">İl</option>
                        @foreach ($provinces as $province)
                            <option value="{{ $province->id }}" @selected($province->id == $project->province_id)>{{ $province->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="town"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white capitalize">İlçe</label>
                    <select @change="loadDistricts($event.target.value)" required id="town" name="town_id"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option disabled>İlçe</option>
                        <template x-for="town in towns">
                            <option x-text="town.name" :value="town.id" :selected="town.id == projectTown">
                            </option>
                        </template>
                    </select>
                </div>
                <div>
                    <label for="district"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white capitalize">mahalle</label>
                    <select required id="district" name="district_id"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option disabled>mahalle</option>
                        <template x-for="district in districts">
                            <option x-text="district.name" :value="district.id"
                                :selected="district.id == projectDistrict"></option>
                        </template>
                    </select>
                </div>
                <div class="w-full">
                    <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Fiyat TL
                    </label>
                    <input type="text" name="price_in_tl" id="price"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="₺2999" x-model="formattedNumber" @input="formatNumber" required
                        value="{{ $project->price_in_tl }}">
                </div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                        for="user_avatar">tanıtım linki</label>
                    <input
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        id="user_avatar" type="url" name="promotion_url" placeholder="tanıtım linki"
                        value="{{ $project->promotion_url }}">
                    <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="user_avatar_help"></div>
                </div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="date">teslim
                        tarihi</label>
                    <input type="date"
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        id="date" name="delivery_date" placeholder="teslim tarihi"
                        value="{{ $project->delivery_date }}">
                    <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="user_avatar_help"></div>
                </div>
                <div>
                    <div>
                        @include('admin.portfolios.map_selector', ['model' => $project])
                    </div>
                </div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                        for="images">resimler</label>
                    <input
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        aria-describedby="images" id="images" type="file" name="images[]" multiple
                        accept="image/*" @change="handleFiles">
                    <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="images"></div>
                </div>

                <div class="sm:col-span-2 flex flex-wrap">
                    <template x-for="image in images" :key="image.id">
                        <div class="w-1/4 p-1">
                            <img :src="image.full_url" class="rounded w-52 my-3"
                                :class="{ 'border-8 border-blue-500 shadow-md': image.is_main }" />
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

                @foreach (config('app.locales') as $locale)
                    <div class="sm:col-span-2">
                        <label for="description_{{ $locale }}"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            {{ __('general.description_' . $locale) }}
                        </label>
                        <div id="description_{{ $locale }}" class="quill-editor bg-white text-black">
                            {!! $project->getTranslation('description', $locale) !!}</div>
                        <input type="hidden" name="description[{{ $locale }}]"
                            id="input_description_{{ $locale }}"
                            value="{{ $project->getTranslation('description', $locale) }}">
                    </div>
                    <br>
                    <br>
                @endforeach

            </div>
            <h4 class="text-xl font-bold mt-10 w-full">Özellikler</h4>
            @foreach ($project->features as $index => $feature)
                <div class="flex justify-evenly">
                    <input value="{{ $feature->getTranslation('value', 'tr') }}" placeholder="tr" type="text"
                        name="features[{{ $index }}][tr]"
                        class="bg-gray-50 mx-3 my-2 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">

                    <input value="{{ $feature->getTranslation('value', 'ru') }}" placeholder="ru" type="text"
                        name="features[{{ $index }}][ru]"
                        class="bg-gray-50 border mx-3 my-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">

                    <input value="{{ $feature->getTranslation('value', 'en') }}" placeholder="en" type="text"
                        name="features[{{ $index }}][en]"
                        class="bg-gray-50 border mx-3 my-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                </div>
            @endforeach
            <template x-for="feature,index in numOfFeatures">
                <div class="flex justify-evenly">
                    <input placeholder="tr" type="text" :name="`features[${index+900}][tr]`"
                        class="bg-gray-50 mx-3 my-2 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">

                    <input placeholder="ru" type="text" :name="`features[${index+900}][ru]`"
                        class="bg-gray-50 border mx-3 my-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">

                    <input placeholder="en" type="text" :name="`features[${index+900}][en]`"
                        class="bg-gray-50 border mx-3 my-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                </div>
            </template>

            <div class="w-full mt-10">
                <button @click="numOfFeatures++" type="button"
                    class="px-3 py-2 text-sm font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-blue-800">yeni
                    özellik ekle</button>
            </div>
            <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
            <h4 class="text-xl font-bold mt-10 w-full capitalize">site özellikleri</h4>

            @foreach ($project->siteFeatures as $index => $siteFeature)
                <div class="flex justify-evenly">
                    <input value="{{ $siteFeature->getTranslation('value', 'tr') }}" placeholder="tr" type="text"
                        name="site_feature[{{ $index }}][tr]"
                        class="bg-gray-50 mx-3 my-2 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">

                    <input value="{{ $siteFeature->getTranslation('value', 'ru') }}" placeholder="ru" type="text"
                        name="site_feature[{{ $index }}][ru]"
                        class="bg-gray-50 border mx-3 my-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">

                    <input value="{{ $siteFeature->getTranslation('value', 'en') }}" placeholder="en" type="text"
                        name="site_feature[{{ $index }}][en]"
                        class="bg-gray-50 border mx-3 my-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                </div>
            @endforeach
            <template x-for="feature,index in siteFeatures">
                <div class="flex justify-evenly">
                    <input placeholder="tr" type="text" :name="`site_feature[${index+800}][tr]`"
                        class="bg-gray-50 mx-3 my-2 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">

                    <input placeholder="ru" type="text" :name="`site_feature[${index+800}][ru]`"
                        class="bg-gray-50 border mx-3 my-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">

                    <input placeholder="en" type="text" :name="`site_feature[${index+800}][en]`"
                        class="bg-gray-50 border mx-3 my-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                </div>
            </template>
            <div class="w-full mt-10">
                <button @click="siteFeatures++" type="button"
                    class="px-3 py-2 text-sm font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-blue-800">yeni
                    özellik ekle</button>
            </div>
            <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
            <h4 class="text-xl font-bold mt-10 w-full">Ulaşım</h4>
            @foreach ($project->transportations as $index => $transportaion)
                <div class="flex justify-evenly">
                    <input value="{{ $transportaion->getTranslation('name', 'tr') }}" placeholder="tr"
                        type="text" name="transportaion[{{ $index }}][tr]"
                        class="bg-gray-50 mx-3 my-2 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">

                    <input value="{{ $transportaion->getTranslation('name', 'ru') }}" placeholder="ru"
                        type="text" name="transportaion[{{ $index }}][ru]"
                        class="bg-gray-50 border mx-3 my-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">

                    <input value="{{ $transportaion->getTranslation('name', 'en') }}" placeholder="en"
                        type="text" name="transportaion[{{ $index }}][en]"
                        class="bg-gray-50 border mx-3 my-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">

                    <input value="{{ $transportaion->duration }}" placeholder="süre" type="number"
                        name="transportaion[{{ $index }}][duration]"
                        class="bg-gray-50 border mx-3 my-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">

                    <input value="{{ $transportaion->distance }}" placeholder="mesafe" type="number"
                        name="transportaion[{{ $index }}][distance]"
                        class="bg-gray-50 border mx-3 my-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                </div>
            @endforeach
            <template x-for="transportaion,index in numOfTransportation">
                <div class="flex justify-evenly">
                    <input placeholder="tr" type="text" :name="`transportaion[${index+600}][tr]`"
                        class="bg-gray-50 mx-3 my-2 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">

                    <input placeholder="ru" type="text" :name="`transportaion[${index+600}][ru]`"
                        class="bg-gray-50 border mx-3 my-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">

                    <input placeholder="en" type="text" :name="`transportaion[${index+600}][en]`"
                        class="bg-gray-50 border mx-3 my-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">

                    <input placeholder="süre" type="number" :name="`transportaion[${index+600}][duration]`"
                        class="bg-gray-50 border mx-3 my-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">

                    <input placeholder="mesafe" type="number" :name="`transportaion[${index+600}][distance]`"
                        class="bg-gray-50 border mx-3 my-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                </div>
            </template>
            <div class="w-full mt-10">
                <button @click="numOfTransportation++" type="button"
                    class="px-3 py-2 text-sm font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-blue-800">yeni
                    ulaşım ekle</button>
            </div>
            <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
            @foreach (config('app.locales') as $locale)
                <div class="sm:col-span-2 my-5">
                    <label for="payment_plan_{{ $locale }}"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        {{ __('general.payment_plan_' . $locale) }}
                    </label>
                    <div id="payment_plan_{{ $locale }}" class="quill-editor bg-white text-black">
                        {!! $project->getTranslation('payment_plan', $locale) !!}</div>
                    <input type="hidden" name="payment_plan[{{ $locale }}]"
                        id="input_payment_plan_{{ $locale }}"
                        value="{{ $project->getTranslation('payment_plan', $locale) }}">
                </div>
            @endforeach
            <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
            @foreach (config('app.locales') as $locale)
                <div class="sm:col-span-2 my-7">
                    <label for="extra_payment_{{ $locale }}"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        {{ __('general.extra_payment_' . $locale) }}
                    </label>
                    <div id="extra_payment_{{ $locale }}" class="quill-editor bg-white text-black">
                        {!! $project->getTranslation('extra_payment', $locale) !!}</div>
                    <input type="hidden" name="extra_payment[{{ $locale }}]"
                        id="input_extra_payment_{{ $locale }}"
                        value="{{ $project->getTranslation('extra_payment', $locale) }}">
                </div>
            @endforeach
            <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
            @foreach ($project->flats as $flatIndex => $flat)
                <section class="bg-white dark:bg-gray-900">
                    <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
                        <h2
                            class="mb-4 text-2xl text-center font-extrabold text-indigo-600 dark:text-white capitalize">
                            {{ __('Daire') }} #{{ $flatIndex + 1 }} </h2>
                        <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                            <div class="w-full">
                                <label for="rooms"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    oda sayısı
                                </label>
                                <input type="text" value="{{ $flat->rooms }}"
                                    name="flats[{{ $flatIndex }}][rooms]" id="brand"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="1 + 1">
                            </div>
                            <div class="w-full">
                                <label for="bathroom_count"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">banyo
                                    sayısı</label>
                                <input type="text" value="{{ $flat->bathroom_count }}"
                                    name="flats[{{ $flatIndex }}][bathroom_count]" id="bathrooms_count"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="2">
                            </div>
                            <div class="w-full">
                                <label for="net"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('net') }}</label>
                                <input type="number" value="{{ $flat->net }}"
                                    name="flats[{{ $flatIndex }}][net]" id="net"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="300">
                            </div>
                            <div class="w-full">
                                <label for="gross"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">brüt</label>
                                <input type="number" value="{{ $flat->gross }}"
                                    name="flats[{{ $flatIndex }}][gross]" id="gross"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="100">
                            </div>

                            @foreach (config('app.locales') as $locale)
                                <div class="sm:col-span-2">
                                    @if ($loop->first)
                                        <label for="flat_description"
                                            class="block mb-2 text-xl font-semibold capitalize text-gray-900 dark:text-white">Açıklama</label>
                                    @endif
                                    <textarea name="flats[{{ $flatIndex }}][description][{{ $locale }}]" rows="4"
                                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                        placeholder="{{ $locale }} ">{{ $flat->getTranslation('description', $locale) }}</textarea>
                                </div>
                            @endforeach
                        </div>
                        <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
                        <h4 class="text-xl font-bold mt-10 w-full">Özellikler</h4>
                        @foreach ($flat->features as $index => $feature)
                            <div class="flex justify-evenly">
                                <input placeholder="tr" type="text"
                                    value="{{ $feature->getTranslation('value', 'tr') }}"
                                    name="flats[{{ $flatIndex }}][features][{{ $index }}][tr]"
                                    class="bg-gray-50 mx-3 my-2 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">

                                <input placeholder="ru" type="text"
                                    value="{{ $feature->getTranslation('value', 'ru') }}"
                                    name="flats[{{ $flatIndex }}][features][{{ $index }}][ru]"
                                    class="bg-gray-50 border mx-3 my-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">

                                <input placeholder="en" type="text"
                                    value="{{ $feature->getTranslation('value', 'en') }}"
                                    name="flats[{{ $flatIndex }}][features][{{ $index }}][en]"
                                    class="bg-gray-50 border mx-3 my-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            </div>
                        @endforeach
                        <template x-for="feature,index in flatFeatures">
                            <div class="flex justify-evenly">
                                <input placeholder="tr" type="text"
                                    :name="`flats[{{ $flatIndex }}][features][${index + 100}][tr]`"
                                    class="bg-gray-50 mx-3 my-2 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">

                                <input placeholder="ru" type="text"
                                    :name="`flats[{{ $flatIndex }}][features][${index + 100}][ru]`"
                                    class="bg-gray-50 border mx-3 my-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">

                                <input placeholder="en" type="text"
                                    :name="`flats[{{ $flatIndex }}][features][${index + 100}][en]`"
                                    class="bg-gray-50 border mx-3 my-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            </div>
                        </template>
                        <div class="flex">
                            <div class="w-full mt-10">
                                <button @click="flatFeatures++" type="button"
                                    class="px-3 py-2 text-sm capitalize font-medium text-center text-white bg-indigo-700 rounded-lg hover:bg-indigo-800 focus:ring-4 focus:outline-none focus:ring-indigo-300 dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-blue-800">yeni
                                    özellik ekle</button>
                            </div>
                            <div class="w-full mt-10">
                                <button @click="removeFlat(`{{ route('project.flat.delete', [$project, $flat]) }}`)"
                                    type="button"
                                    class="px-3 py-2 text-sm capitalize font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-blue-800">Sil</button>
                            </div>
                        </div>
                    </div>
                </section>
            @endforeach
            <template x-for="flat, flatIndex in numOfFlats">
                @include('admin.projects.create_flat_form')
            </template>
            <div class="w-full mt-10">
                <button @click="numOfFlats++" type="button"
                    class="px-3 py-2 text-sm font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-blue-800">
                    daire ekle</button>
            </div>
            <button type="submit"
                class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                save
            </button>
        </form>
    </div>
    <script>
        const locales = @json(config('app.locales'));
        const editors = {};

        locales.forEach(locale => {
            ['description', 'payment_plan', 'extra_payment'].forEach(field => {
                const editorId = `${field}_${locale}`;
                const inputId = `input_${field}_${locale}`;

                editors[editorId] = new Quill(`#${editorId}`, {
                    theme: 'snow',
                    modules: {
                        toolbar: [
                            [{
                                'header': [1, 2, false]
                            }],
                            ['bold', 'italic', 'underline'],
                            [{
                                'list': 'ordered'
                            }, {
                                'list': 'bullet'
                            }],
                            [{
                                'align': []
                            }],
                            ['link', 'image']
                        ]
                    }
                });

                // Set initial content from existing values
                const initialContent = document.getElementById(inputId).value;
                if (initialContent) {
                    editors[editorId].root.innerHTML = initialContent;
                }

                // Update hidden input when editor changes
                editors[editorId].on('text-change', function() {
                    document.getElementById(inputId).value = editors[editorId].root.innerHTML;
                });
            });
        });

        document.querySelector('form').addEventListener('submit', function() {
            locales.forEach(locale => {
                ['description', 'payment_plan', 'extra_payment'].forEach(field => {
                    const editorId = `${field}_${locale}`;
                    const inputId = `input_${field}_${locale}`;
                    document.getElementById(inputId).value = editors[editorId].root.innerHTML;
                });
            });
        });
    </script>
</section>
