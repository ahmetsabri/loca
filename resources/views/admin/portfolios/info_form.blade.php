<hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
{{__('info')}}
            @foreach($infos as $info)
<h4 class="font-bold mt-5">{{$info->name}}</h4>
    <div class="flex">
    @foreach(['tr','ru','en'] as $locale)
     <div class="mb-5 mx-1">
      <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{$locale}}</label>
      <input name="info[{{$info->id}}][{{$locale}}]" type="text" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
  </div>

    @endforeach
        </div>
            @endforeach
