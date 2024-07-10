<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
        <h2 class="mb-4 text-xl font-bold text-indigo-700 dark:text-white capitalize">
            yeni proje
        </h2>

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


        <form action="{{route('project.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                <div class="sm:col-span-2">
                @foreach(config('app.locales') as $locale)
                <label for="title_tr" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        {{__("general.title_$locale")}}
                    </label>
                    <input value="{{ old('title.'.$locale) }}" type="text" name="title[{{ $locale }}]" id="title_tr"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                         required>
                    <br>
                @endforeach
                </div>
                <div>
                            <label for="province" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white capitalize">
                            İl
                            </label>
                            <select @change="loadTowns($event.target.value)" required id="province" name="province_id"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                               <option value="">İl</option>
                                @foreach($provinces as $province)
                                <option value="{{ $province->id }}">{{ $province->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label for="town" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white capitalize">İlçe</label>
                            <select @change="loadDistricts($event.target.value)" required id="town" name="town_id"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                  <option disabled>İlçe</option>
                                <template x-for="town in towns">
                                <option  x-text="town.name" :value="town.id"></option>
                    </template>
                            </select>
                        </div>
                        <div>
                            <label for="district" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white capitalize">mahalle</label>
                            <select required id="district" name="district_id"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
              <option disabled>mahalle</option>
                                <template x-for="district in districts">
                                <option x-text="district.name" :value="district.id"></option>
                    </template>
                            </select>
                        </div>
                <div class="w-full">
                    <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Fiyat TL
                    </label>
        <input type="text" name="price_in_tl" id="price"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="₺2999" x-model="formattedNumber" @input="formatNumber" required>
                </div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                        for="user_avatar">tanıtım linki</label>
                    <input
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        id="user_avatar" type="url" name="promotion_url" placeholder="tanıtım linki">
                    <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="user_avatar_help"></div>
                </div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                        for="date">teslim tarihi</label>
                    <input type="date"
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        id="date" name="delivery_date" placeholder="teslim tarihi">
                    <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="user_avatar_help"></div>
                </div>
                <div>
                 <div>
                                    @include('admin.portfolios.map_selector')
                                </div>
                </div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                        for="images">resimler</label>
                    <input
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        aria-describedby="images" id="images" type="file" name="images[]" multiple>
                    <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="images"></div>
                </div>
@foreach(config('app.locales') as $locale)

  <div class="sm:col-span-2">
                    <label for="description_{{ $locale }}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        {{__('general.description_'.$locale)}}
                    </label>
                    <textarea name="description[{{ $locale }}]" id="description_tr" rows="4"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="{{__('general.description_'.$locale)}}"></textarea>
                </div>

    @endforeach

            </div>
<h4 class="text-xl font-bold mt-10 w-full">Özellikler</h4>
                <template x-for="feature,index in numOfFeatures">
                    <div class="flex justify-evenly">
            <input placeholder="tr" type="text" :name="`features[${index}][tr]`"
                class="bg-gray-50 mx-3 my-2 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">

            <input placeholder="ru" type="text" :name="`features[${index}][ru]`"
                class="bg-gray-50 border mx-3 my-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">

            <input placeholder="en" type="text" :name="`features[${index}][en]`"
                class="bg-gray-50 border mx-3 my-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
            </div>
</template>

<div class="w-full mt-10">
    <button @click="numOfFeatures++" type="button"
        class="px-3 py-2 text-sm font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-blue-800">yeni özellik ekle</button>
</div>
<hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
<h4 class="text-xl font-bold mt-10 w-full capitalize">site özellikleri</h4>

            <template x-for="feature,index in siteFeatures">
                <div class="flex justify-evenly">
                    <input placeholder="tr" type="text" :name="`site_feature[${index}][tr]`"
                        class="bg-gray-50 mx-3 my-2 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="₺2999">

                    <input placeholder="ru" type="text" :name="`site_feature[${index}][ru]`"
                        class="bg-gray-50 border mx-3 my-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="₺2999">

                    <input placeholder="en" type="text" :name="`site_feature[${index}][en]`"
                        class="bg-gray-50 border mx-3 my-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="₺2999">
                </div>
            </template>
            <div class="w-full mt-10">
                <button @click="siteFeatures++" type="button"
                    class="px-3 py-2 text-sm font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-blue-800">yeni özellik ekle</button>
            </div>
<hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
<h4 class="text-xl font-bold mt-10 w-full">Ulaşım</h4>
<template x-for="transportaion,index in numOfTransportation">
                    <div class="flex justify-evenly">
            <input placeholder="tr" type="text" :name="`transportaion[${index}][tr]`"
                class="bg-gray-50 mx-3 my-2 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                placeholder="₺2999">
            <input placeholder="ru" type="text" :name="`transportaion[${index}][ru]`"
                class="bg-gray-50 border mx-3 my-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                placeholder="₺2999">

            <input placeholder="en" type="text" :name="`transportaion[${index}][en]`"
                class="bg-gray-50 border mx-3 my-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                placeholder="₺2999">
<input placeholder="süre" type="number" :name="`transportaion[${index}][duration]`"
                class="bg-gray-50 border mx-3 my-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                >
<input placeholder="mesafe" type="number" :name="`transportaion[${index}][distance]`"
                class="bg-gray-50 border mx-3 my-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
            </div>
                </template>
                <div class="w-full mt-10">
                    <button @click="numOfTransportation++" type="button"
                        class="px-3 py-2 text-sm font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-blue-800">yeni ulaşım ekle</button>
                </div>
<hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
                @foreach(config('app.locales') as $locale)
                <div class="sm:col-span-2 my-5">
                    <label for="payment_plan_{{ $locale }}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        {{__('general.payment_plan_'.$locale)}}
                    </label>
                    <textarea name="payment_plan[{{ $locale }}]" id="payment_plan_tr" rows="4"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="{{__('general.payment_plan_'.$locale)}}"></textarea>
                </div>

                @endforeach
                <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
                @foreach(config('app.locales') as $locale)

                <div class="sm:col-span-2 my-7">
                    <label for="extra_payment_{{ $locale }}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        {{__('general.extra_payment_'.$locale)}}
                    </label>
                    <textarea name="extra_payment[{{ $locale }}]" id="extra_payment_tr" rows="4"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="{{__('general.extra_payment_'.$locale)}}"></textarea>
                </div>
                @endforeach
<hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
<template  x-for="flat, flatIndex in numOfFlats">
    @include('admin.projects.create_flat_form')
</template>
<div class="w-full mt-10">
        <button @click="numOfFlats++" type="button"
            class="px-3 py-2 text-sm font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-blue-800"> daire ekle</button>
    </div>
<button type="submit"
                class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                save
            </button>
        </form>
    </div>
</section>
