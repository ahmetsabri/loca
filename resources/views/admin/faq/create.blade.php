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
<div class="sm:col-span-2 mt-b0">
@foreach(config('app.locales') as $locale)
                <p class="font-bold text-base my-4 text-indigo-800">
                                    Cevap {{ $locale }}
                                </p>
                                <div id="description_{{ $locale }}">
                                    @if(isset($faq))

                                   {!! $faq->getTranslation('answer',$locale) !!}
                                    @endif
                                </div>
                                <br>
                                <input type="hidden" name="answer[{{ $locale }}]" id="answer_{{ $locale }}">
            @endforeach
</div>
            <button type="submit" id="submit-form"
                class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">gönder</button>
        </form>
    </div>

    <script>
            const tr = new Quill('#description_tr', {
                                theme: 'snow',
                              modules: {
                                    toolbar: [
                                    [{ 'header': [1, 2, false] }],
                                    ['bold', 'italic', 'underline'],
                                    [{ 'list': 'ordered'}, { 'list': 'bullet' }],
                                    [{ 'align': [] }],
                                    ['link', 'image', 'video']

                                    ]
                                    }
                            });
                        const ru = new Quill('#description_ru', {
                                theme: 'snow',
                                modules: {
                                toolbar: [
                                [{ 'header': [1, 2, false] }],
                                ['bold', 'italic', 'underline'],
                                [{ 'list': 'ordered'}, { 'list': 'bullet' }],
                                [{ 'align': [] }],
                                                    ['link', 'image', 'video']

                                ]
                                }
                            });
                        const en = new Quill('#description_en', {
                                theme: 'snow',
                                modules: {
                                toolbar: [
                                [{ 'header': [1, 2, false] }],
                                ['bold', 'italic', 'underline'],
                                [{ 'list': 'ordered'}, { 'list': 'bullet' }],
                                [{ 'align': [] }],
                                                    ['link', 'image', 'video']

                                ]
                                }
                            });
                document.getElementById('submit-form').addEventListener('click', () => {
                        const trval = tr.root.innerHTML;
                        const ruval = ru.root.innerHTML;
                        const enval = en.root.innerHTML;
                        document.getElementById('answer_tr').value = trval;
                        document.getElementById('answer_ru').value = ruval;
                        document.getElementById('answer_en').value = enval;
                        });
        </script>
</x-app-layout>
