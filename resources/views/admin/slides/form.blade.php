@php
    $isEdit = isset($slide);
    $action = $isEdit ? route('admin.slides.update', $slide) : route('admin.slides.store');
    $locales = ['tr', 'en', 'ru'];
@endphp

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-blue-700 leading-tight capitalize">
            <a href="{{ route('admin.slides.index') }}">
                {{ __('general.slides') }}
            </a> / {{ $isEdit ? 'Slayt Düzenle' : 'Slayt Oluştur' }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ $action }}" enctype="multipart/form-data">
                        @csrf
                        @if ($isEdit)
                            @method('PUT')
                        @endif

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Title Fields for Each Locale -->
                            @foreach ($locales as $locale)
                                <div>
                                    <x-input-label for="title_{{ $locale }}" :value="'Başlık (' . strtoupper($locale) . ')'" />
                                    <x-text-input id="title_{{ $locale }}" class="block mt-1 w-full"
                                        type="text" name="title_{{ $locale }}" :value="old(
                                            'title_' . $locale,
                                            $isEdit ? $slide->getTranslation('title', $locale) : '',
                                        )" required />
                                    <x-input-error :messages="$errors->get('title_' . $locale)" class="mt-2" />
                                </div>
                            @endforeach

                            <!-- Hashtag Fields for Each Locale -->
                            @foreach ($locales as $locale)
                                @for ($i = 1; $i <= 3; $i++)
                                    <div>
                                        <x-input-label for="hashtag{{ $i }}_{{ $locale }}"
                                            :value="'Hashtag ' . $i . ' (' . strtoupper($locale) . ')'" />
                                        <x-text-input id="hashtag{{ $i }}_{{ $locale }}"
                                            class="block mt-1 w-full" type="text"
                                            name="hashtag{{ $i }}_{{ $locale }}" :value="old(
                                                'hashtag' . $i . '_' . $locale,
                                                $isEdit
                                                    ? $slide->getTranslation('hashtags', $locale)[$i - 1] ?? ''
                                                    : '',
                                            )" />
                                        <x-input-error :messages="$errors->get('hashtag' . $i . '_' . $locale)" class="mt-2" />
                                    </div>
                                @endfor
                            @endforeach

                            <!-- Image -->
                            <div class="md:col-span-2">
                                <x-input-label for="image" :value="'Resim'" />
                                <input id="image" class="block mt-1 w-full" type="file" name="image"
                                    {{ $isEdit ? '' : 'required' }} accept="image/*" />
                                <x-input-error :messages="$errors->get('image')" class="mt-2" />
                                @if ($isEdit && $slide->images->isNotEmpty())
                                    <div class="mt-4">
                                        <div class="relative group w-64">
                                            <img src="{{ Storage::url($slide->images->first()->path) }}"
                                                alt="Slayt resmi" class="w-full h-32 object-cover rounded">
                                            <div
                                                class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                                                <a href="{{ Storage::url($slide->images->first()->path) }}"
                                                    target="_blank" class="text-white mr-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>

                            <!-- Order -->


                            <!-- Status -->

                        </div>

                        <div class="flex items-center justify-end mt-6">
                            <a href="{{ route('admin.slides.index') }}"
                                class="text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 mr-4">
                                İptal
                            </a>
                            <x-primary-button>
                                {{ $isEdit ? 'Güncelle' : 'Oluştur' }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
