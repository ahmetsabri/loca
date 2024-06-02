<hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
<h4 class="capitalize font-bold text-3xl text-blue-700">

{{__('features')}}

</h4>
@foreach($features as $info)
<h4 class="font-bold my-5 text-indigo-600 text-xl capitalize">{{$info->name}}</h4>
@for($i=0;$i<5;$i++)
    <div class="flex">
        <span class="font-bold">
            {{$i+1}}.
        </span>
    @foreach(['tr','ru','en'] as $locale)
     <div class="mb-5 mx-1">
      <label for="base-input" class="block mb-2 text-base font-semibold  text-gray-900 dark:text-white">{{$locale}}</label>
      <input name="features[{{$info->id}}][{{$i}}][{{$locale}}]" type="text" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
  </div>

    @endforeach
        </div>
        @endfor
<hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">

        @endforeach
