<hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
<h4 class="capitalize font-bold text-3xl text-blue-700">

{{__('features')}}

</h4>

@foreach($features as $feature)
<h4 class="font-bold my-5 text-indigo-600 text-xl capitalize">{{$feature->name}}</h4>
@php
    $featureValues = $portfolio->features->where('feature_id',$feature->id);
@endphp

 @for($i=0;$i<5;$i++)
 <div class="flex">
    <span class="font-bold">
    </span>
    @foreach(config('app.locales') as $locale)
    <div class="mb-5 mx-1">
        <label for="base-input"
            class="block mb-2 text-base font-semibold uppercase text-gray-900 dark:text-white">{{$locale}}</label>
        <input value="{{ \Arr::get($featureValues->values(),$i)?->getTranslation('value',$locale)??'' }}" name="features[{{$i}}][{{$feature->id}}][{{$locale}}]" type="text" id="base-input"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    </div>

    @endforeach
    </div>
    @endfor
        @if(!$loop->last)
        <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
        @endif

        @endforeach
