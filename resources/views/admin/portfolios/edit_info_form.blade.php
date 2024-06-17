<hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
<h1 class="text-3xl font-bold capitalize text-indigo-600">
   bilgileri
</h1>
@foreach($infos as $info)
<h4 class="font-bold mt-5 text-indigo-700 text-2xl">{{$info->name}}</h4>
    <div class="flex">
    @foreach(config('app.locales') as $locale)
     <div class="mb-5 mx-1">
      <label for="base-input" class="block my-5 text-base uppercase font-medium text-gray-900 dark:text-white">{{$locale}}</label>
      <input value="{{ $portfolio->infos?->where('info_id',$info->id)?->first()?->getTranslation('value',$locale) ?? '' }}"

      name="info[{{$info->id}}][{{$locale}}]" type="text" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
  </div>
  @endforeach
</div>
<hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
@endforeach
