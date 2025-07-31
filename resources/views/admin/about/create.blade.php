<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight capitalize">
            hakkimizda
        </h2>
    </x-slot>
    <div class="p-12 flex justify-center">

        <form class="space-y-4 w-1/2" action="{{ route('about.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            @if ($errors->all())
                <div class="flex justify-center">
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

            @for ($i = 1; $i < 3; $i++)
                @foreach (config('app.locales') as $locale)
                    <div>
                        <label for="title_{{ $i }}_{{ $locale }}"
                            class="block capitalize mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            başlık {{ $i }} {{ $locale }}
                        </label>
                        <input value="{{ $about?->getTranslation('title_' . $i, $locale) }}" type="text"
                            name="title_{{ $i }}[{{ $locale }}]"
                            id="title_{{ $i }}_{{ $locale }}"
                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            placeholder="başlık {{ $i }} {{ $locale }}" required />
                    </div>

                    <div>
                        <label for="description_{{ $i }}_{{ $locale }}"
                            class="block capitalize mb-2 text-sm font-medium text-gray-900 dark:text-white">açıklama
                            {{ $i }} {{ $locale }}</label>
                        <div id="description_{{ $i }}_{{ $locale }}" class="bg-white">
                            {!! $about?->getTranslation('description_' . $i, $locale) !!}
                        </div>
                        <input type="hidden" name="description_{{ $i }}[{{ $locale }}]"
                            id="desc_{{ $i }}_{{ $locale }}">
                    </div>
                @endforeach
                <hr>
                <hr>
            @endfor

            @foreach (config('app.locales') as $locale)
                <div>
                    <label for="quote_{{ $locale }}"
                        class="block capitalize mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        alıntı {{ $locale }}
                    </label>
                    <input value="{{ $about?->getTranslation('quote', $locale) }}" type="text"
                        name="quote[{{ $locale }}]" id="quote_{{ $locale }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        placeholder="alıntı" required />
                </div>
            @endforeach

            <h3 class="text-2xl font-semibold">
                resimler
            </h3>
            @foreach (['top_image', 'bottom_right_image', 'bottom_left_image'] as $field)
                <div>
                    <label for="{{ $field }}"
                        class="block capitalize mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        @lang('general.' . $field)
                    </label>
                    @if ($about?->$field)
                        <div class="mb-2">
                            <img src="{{ asset('storage/' . $about->$field) }}" alt="{{ $field }}"
                                class="h-32 w-auto rounded-lg">
                            <p class="text-sm text-gray-600">Mevcut resim. Yeni bir resim yüklemek için aşağıyı
                                kullanın.</p>
                        </div>
                    @endif
                    <input type="file" name="{{ $field }}" id="{{ $field }}" accept="image/*"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" />
                </div>
            @endforeach

            <button type="submit" id="submit-form"
                class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">gönder</button>
        </form>

    </div>
    <script>
        const tr1 = new Quill('#description_1_tr', {
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
                    ['link', 'image', 'video']
                ]
            }
        });
        const ru1 = new Quill('#description_1_ru', {
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
                    ['link', 'image', 'video']
                ]
            }
        });
        const en1 = new Quill('#description_1_en', {
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
                    ['link', 'image', 'video']
                ]
            }
        });
        const tr2 = new Quill('#description_2_tr', {
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
                    ['link', 'image', 'video']
                ]
            }
        });
        const ru2 = new Quill('#description_2_ru', {
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
                    ['link', 'image', 'video']
                ]
            }
        });
        const en2 = new Quill('#description_2_en', {
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
                    ['link', 'image', 'video']
                ]
            }
        });
        document.getElementById('submit-form').addEventListener('click', () => {
            const trval1 = tr1.root.innerHTML;
            const ruval1 = ru1.root.innerHTML;
            const enval1 = en1.root.innerHTML;
            document.getElementById('desc_1_tr').value = trval1;
            document.getElementById('desc_1_ru').value = ruval1;
            document.getElementById('desc_1_en').value = enval1;
            const trval2 = tr2.root.innerHTML;
            const ruval2 = ru2.root.innerHTML;
            const enval2 = en2.root.innerHTML;
            document.getElementById('desc_2_tr').value = trval2;
            document.getElementById('desc_2_ru').value = ruval2;
            document.getElementById('desc_2_en').value = enval2;
        });
    </script>
</x-app-layout>
