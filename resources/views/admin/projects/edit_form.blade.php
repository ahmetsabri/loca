<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
        <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">
            {{__('new_project')}}
        </h2>
        <form action="{{route('project.update',$project)}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                <div class="sm:col-span-2">
                @foreach(config('app.locales') as $locale)
                <label for="title_tr" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        {{__("title_$locale")}}
                    </label>
                    <input type="text" name="title[{{ $locale }}]" id="title_tr"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="title in {{ $locale }}" required value="{{ $project->getTranslation('title',$locale) }}">
                    <br>
                @endforeach
                </div>
                <div>
                            <label for="province" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white capitalize">province</label>
                            <select id="province" name="province_id"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                               <option value="">{{ __('select_province') }}</option>
                                @foreach($provinces as $province)
                                <option @selected($province->id == $project->province_id) @click="loadTowns(`{{ route('province.towns',$province) }}`)" value="{{ $province->id }}">{{ $province->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label for="town" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white capitalize">town</label>
                            <select id="town" name="town_id"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                  <option>{{ __('select_town') }}</option>
                                <template x-for="town in towns">
                                <option @click="loadDistricts(town.id)" x-text="town.name" :value="town.id" :selected=" town.id == projectTown "></option>
                    </template>
                            </select>
                        </div>
                        <div>
                            <label for="district" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white capitalize">district</label>
                            <select id="district" name="district_id"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
              <option>{{ __('select_district') }}</option>
                                <template x-for="district in districts">
                                <option x-text="district.name" :value="district.id" :selected=" district.id == projectDistrict "></option>
                    </template>
                            </select>
                        </div>
                <div class="w-full">
                    <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">TL
                        Price</label>
                    <input type="number" name="price_in_tl" id="price"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="₺2999" required value="{{ $project->price_in_tl }}">
                </div>
                <div class="w-full">
                    <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">USD
                        Price</label>
                    <input type="number" name="price_in_usd" id="price_in_usd"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="$2999" required value="{{ $project->price_in_usd }}">
                </div>
                <div class="w-full">
                    <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">EUR
                        Price</label>
                    <input type="number" name="price_in_eur" id="price_in_eur"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="€2999" required value="{{ $project->price_in_eur }}">
                </div>

                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                        for="user_avatar">{{__('promotion_url')}}</label>
                    <input
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        id="user_avatar" type="url" name="promotion_url" placeholder="{{__('promotion_url')}}" value="{{ $project->promotion_url }}">
                    <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="user_avatar_help"></div>
                </div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                        for="date">{{__('delivery_date')}}</label>
                    <input type="date"
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        id="date" name="delivery_date" placeholder="{{__('delivery_date')}}" value="{{ $project->delivery_date }}">
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

                <div>
                    <div class="flex">
                        @foreach($project->images as $image)
                        <div class="w-1/5 mx-2">
                            <img src="{{ $image->full_url }}" class="w-20 h-20">
                            <br>
                            <a class="text-red-500" href="{{ route('project.image.delete',[$project,$image]) }}">sil</a>
                        </div>
                        @endforeach
                    </div>
                </div>
@foreach(config('app.locales') as $locale)
  <div class="sm:col-span-2">
                    <label for="description_{{ $locale }}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        {{__('description_'.$locale)}}
                    </label>
                    <textarea name="description[{{ $locale }}]" id="description_tr" rows="4"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="{{__('description_'.$locale)}}">{{ $project->getTranslation('description',$locale) }}</textarea>
                </div>

    @endforeach

            </div>
<h4 class="text-xl font-bold mt-10 w-full">{{ __('features') }}</h4>
@foreach($project->features as $index=>$feature)

<div class="flex justify-evenly">
                <input value="{{ $feature->getTranslation('value','tr') }}" placeholder="tr" type="text" name="features[{{ $index }}][tr]"
                    class="bg-gray-50 mx-3 my-2 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    placeholder="₺2999">

                <input value="{{ $feature->getTranslation('value','ru') }}" placeholder="ru" type="text" name="features[{{ $index }}][ru]"
                    class="bg-gray-50 border mx-3 my-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    placeholder="₺2999">

                <input value="{{ $feature->getTranslation('value','en') }}" placeholder="en" type="text" name="features[{{ $index }}][en]"
                    class="bg-gray-50 border mx-3 my-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    placeholder="₺2999">
            </div>

@endforeach
                <template x-for="_,index in numOfFeatures">
                    <div class="flex justify-evenly">
            <input placeholder="tr" type="text" :name="`features[${index+900}][tr]`"
                class="bg-gray-50 mx-3 my-2 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                placeholder="₺2999">

            <input placeholder="ru" type="text" :name="`features[${index+900}][ru]`"
                class="bg-gray-50 border mx-3 my-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                placeholder="₺2999">

            <input placeholder="en" type="text" :name="`features[${index+900}][en]`"
                class="bg-gray-50 border mx-3 my-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                placeholder="₺2999">
            </div>
</template>

<div class="w-full mt-10">
    <button @click="numOfFeatures++" type="button"
        class="px-3 py-2 text-sm font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-blue-800">{{
        __('add_new_feature') }}</button>
</div>
<hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
<h4 class="text-xl font-bold mt-10 w-full">{{ __('site_features') }}</h4>
@foreach($project->siteFeatures as $index=>$siteFeature)

<div class="flex justify-evenly">
    <input value="{{$siteFeature->getTranslation('value','tr') }}" placeholder="tr" type="text"
        name="site_feature[{{ $index }}][tr]"
        class="bg-gray-50 mx-3 my-2 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
        placeholder="₺2999">

    <input value="{{$siteFeature->getTranslation('value','ru') }}" placeholder="ru" type="text"
        name="site_feature[{{ $index }}][ru]"
        class="bg-gray-50 border mx-3 my-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
        placeholder="₺2999">

    <input value="{{$siteFeature->getTranslation('value','en') }}" placeholder="en" type="text"
        name="site_feature[{{ $index }}][en]"
        class="bg-gray-50 border mx-3 my-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
        placeholder="₺2999">
</div>

@endforeach
            <template x-for="_,index in siteFeatures">
                <div class="flex justify-evenly">
                    <input placeholder="tr" type="text" :name="`site_feature[${index+800}][tr]`"
                        class="bg-gray-50 mx-3 my-2 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="₺2999">

                    <input placeholder="ru" type="text" :name="`site_feature[${index+800}][ru]`"
                        class="bg-gray-50 border mx-3 my-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="₺2999">

                    <input placeholder="en" type="text" :name="`site_feature[${index+800}][en]`"
                        class="bg-gray-50 border mx-3 my-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="₺2999">
                </div>
            </template>
            <div class="w-full mt-10">
                <button @click="siteFeatures++" type="button"
                    class="px-3 py-2 text-sm font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-blue-800">{{
                    __('add_new_feature') }}</button>
            </div>
<hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
<h4 class="text-xl font-bold mt-10 w-full">{{ __('transportations') }}</h4>
@foreach($project->transportations as $index=>$transportaion)
<div class="flex justify-evenly">
            <input value="{{$transportaion->getTranslation('name','tr') }}" placeholder="tr" type="text" name="transportaion[{{ $index }}][tr]"
                class="bg-gray-50 mx-3 my-2 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                >
            <input value="{{ $transportaion->getTranslation('name','ru') }}" placeholder="ru" type="text" name="transportaion[{{ $index }}][ru]"
                class="bg-gray-50 border mx-3 my-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                >

            <input value="{{ $transportaion->getTranslation('name','en') }}" placeholder="en" type="text" name="transportaion[{{ $index }}][en]"
                class="bg-gray-50 border mx-3 my-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                >
            <input value="{{ $transportaion->duration }}" placeholder="time" type="number" name="transportaion[{{ $index }}][duration]"
                class="bg-gray-50 border mx-3 my-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
            <input value="{{ $transportaion->distance }}" placeholder="distance" type="number" name="transportaion[{{ $index }}][distance]"
                class="bg-gray-50 border mx-3 my-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
        </div>

@endforeach
<template x-for="transportaion,index in numOfTransportation">
                    <div class="flex justify-evenly">
            <input placeholder="tr" type="text" :name="`transportaion[${index+600}][tr]`"
                class="bg-gray-50 mx-3 my-2 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                >
            <input placeholder="ru" type="text" :name="`transportaion[${index+600}][ru]`"
                class="bg-gray-50 border mx-3 my-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                placeholder="₺2999">

            <input placeholder="en" type="text" :name="`transportaion[${index+600}][en]`"
                class="bg-gray-50 border mx-3 my-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                placeholder="₺2999">
<input placeholder="time" type="number" :name="`transportaion[${index+600}][duration]`"
                class="bg-gray-50 border mx-3 my-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                >
<input placeholder="distance" type="number" :name="`transportaion[${index+600}][distance]`"
                class="bg-gray-50 border mx-3 my-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
            </div>
                </template>
                <div class="w-full mt-10">
                    <button @click="numOfTransportation++" type="button"
                        class="px-3 py-2 text-sm font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-blue-800">{{ __('add_new_transportaion') }}</button>
                </div>
<hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
                @foreach(config('app.locales') as $locale)
                <div class="sm:col-span-2 my-5">
                    <label for="payment_plan_{{ $locale }}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        {{__('payment_plan_'.$locale)}}
                    </label>
                    <textarea name="payment_plan[{{ $locale }}]" id="payment_plan_tr" rows="4"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="{{__('payment_plan_'.$locale)}}">{{ $project->getTranslation('payment_plan',$locale) }}</textarea>
                </div>

                @endforeach
                <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
                @foreach(config('app.locales') as $locale)

                <div class="sm:col-span-2 my-7">
                    <label for="extra_payment_{{ $locale }}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        {{__('extra_payment_'.$locale)}}
                    </label>
                    <textarea name="extra_payment[{{ $locale }}]" id="extra_payment_tr" rows="4"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="{{__('extra_payment_'.$locale)}}">{{ $project->getTranslation('extra_payment',$locale) }}</textarea>
                </div>
                @endforeach
<hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
@foreach($project->flats as $flatIndex=>$flat)
{{ $flat }}

<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
        <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white capitalize">{{ __('flat') }} #{{ $flatIndex+1 }} </h2>
        <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
            <div class="w-full">
                <label for="rooms" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('rooms')
                    }}</label>
                <input type="text"value="{{ $flat->rooms }}" name="flats[{{ $flatIndex }}][rooms]" id="brand"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    placeholder="1 + 1" required="">
            </div>
            <div class="w-full">
                <label for="bathroom_count" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{
                    __('bathroom_count') }}</label>
                <input type="text" value="{{ $flat->bathroom_count }}" name="flats[{{ $flatIndex }}][bathroom_count]" id="bathrooms_count"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    placeholder="2" required="">
            </div>
            <div class="w-full">
                <label for="net" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('net')
                    }}</label>
                <input type="number" value="{{ $flat->net }}" name="flats[{{ $flatIndex }}][net]" id="net"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    placeholder="300" required="">
            </div>
            <div class="w-full">
                <label for="gross" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('gross')
                    }}</label>
                <input type="number" value="{{ $flat->gross }}" name="flats[{{ $flatIndex }}][gross]" id="gross"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    placeholder="100" required="">
            </div>

            @foreach(config('app.locales') as $locale)
            <div class="sm:col-span-2">
                @if($loop->first)
                <label for="flat_description"
                    class="block mb-2 text-2xl font-semibold capitalize text-gray-900 dark:text-white">{{
                    __('description') }}</label>
                @endif
                <textarea required name="flats[{{ $flatIndex }}][description][{{ $locale }}]" rows="4"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    placeholder="{{ $locale }} ">{{  $flat->getTranslation('description',$locale) }}</textarea>
            </div>
            @endforeach
        </div>
        <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
        <h4 class="text-xl font-bold mt-10 w-full">{{ __('features') }}</h4>
        @foreach($flat->features as $index=>$feature)
        <div class="flex justify-evenly">
                <input placeholder="tr" type="text" value="{{ $feature->getTranslation('value','tr') }}" name="flats[{{ $flatIndex }}][features][{{ $index }}][tr]"
                    class="bg-gray-50 mx-3 my-2 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    placeholder="₺2999">

                <input placeholder="ru" type="text" value="{{ $feature->getTranslation('value','ru') }}" name="flats[{{ $flatIndex }}][features][{{ $index }}][ru]"
                    class="bg-gray-50 border mx-3 my-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    placeholder="₺2999">

                <input placeholder="en" type="text" value="{{ $feature->getTranslation('value','en') }}" name="flats[{{ $flatIndex }}][features][{{ $index }}][en]"
                    class="bg-gray-50 border mx-3 my-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    placeholder="₺2999">
            </div>

        @endforeach
        <template x-for="feature,index in flatFeatures">
            <div class="flex justify-evenly">

                <input placeholder="tr" type="text" :name="`flats[{{ $flatIndex }}][features][${index + 100}][tr]`"
                    class="bg-gray-50 mx-3 my-2 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    placeholder="₺2999">

                <input placeholder="ru" type="text" :name="`flats[{{ $flatIndex }}][features][${index + 100}][ru]`"
                    class="bg-gray-50 border mx-3 my-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    placeholder="₺2999">

                <input placeholder="en" type="text" :name="`flats[{{ $flatIndex }}][features][${index + 100}][en]`"
                    class="bg-gray-50 border mx-3 my-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    placeholder="₺2999">
            </div>
        </template>
        <div class="w-full mt-10">
            <button @click="flatFeatures++" type="button"
                class="px-3 py-2 text-sm font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-blue-800">{{
                __('add_new_feature') }}</button>
        </div>
</section>
@endforeach
<template  x-for="flat, flatIndex in numOfFlats">
    @include('admin.projects.update_flat_form')
</template>
<div class="w-full mt-10">
        <button @click="numOfFlats++" type="button"
            class="px-3 py-2 text-sm font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-blue-800">{{
            __('add_new_flat') }}</button>
    </div>
<button type="submit"
                class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                save
            </button>
        </form>
    </div>
</section>
