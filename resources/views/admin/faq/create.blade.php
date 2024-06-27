<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight capitalize">
           @if(!isset($faq))
            yeni soru
            @else
            {{ $faq->question }}
            @endif
        </h2>
    </x-slot>
    <div class="p-12 flex justify-center">

        <form class="space-y-4 w-1/2" action="{{ isset($faq) ?route('faq.update',$faq): route('faq.store')}}" method="post" enctype="multipart/form-data">
            @csrf
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
@foreach(config('app.locales') as $locale)

            <div>
                <label for="team" class="block capitalize mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    soru {{ $locale }}
                </label>
                <input type="text" value="{{ $faq?->getTranslation('question',$locale)??'' }}" name="question[{{ $locale }}]" id="team"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                    required />
            </div>
            @endforeach

@foreach(config('app.locales') as $locale)

            <div>
                    <label for="team" class="block capitalize mb-2 text-sm font-medium text-gray-900 dark:text-white">cevap
                        {{ $locale }}</label>
                    <textarea  name="answer[{{ $locale }}]" id="team"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        required rows="7">{{ $faq?->getTranslation('answer',$locale) ??'' }}</textarea>
                </div>

            @endforeach

            <button type="submit"
                class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">gönder</button>
        </form>


    </div>
</x-app-layout>
