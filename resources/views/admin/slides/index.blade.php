<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-blue-700 leading-tight capitalize">
            <a href="{{ route('admin.slides.index') }}">
                Slaytlar
            </a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="m-5" x-data="{
            deleteSlide(url) {
                    if (!confirm('Silmek istediğinizden emin misiniz?')) {
                        return
                    }
                    window.location.href = url
                },
                deleteImage(url) {
                    if (!confirm('Bu resmi silmek istediğinizden emin misiniz?')) {
                        return
                    }
                    window.location.href = url
                }
        }">
            <div class="mb-5">
                <a href="{{ route('admin.slides.create') }}"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                    Yeni Slayt Oluştur
                </a>
            </div>

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Başlık
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Etiketler
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Resim
                            </th>
                            <th scope="col" class="px-6 py-3">
                                İşlemler
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($slides as $slide)
                            <tr
                                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <td scope="행"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $slide->getTranslation('title', app()->getLocale()) }}
                                </td>
                                <td class="px-6 py-4">
                                    @foreach ($slide->hashtags as $hashtag)
                                        @if ($hashtag)
                                            <span class="block w-fit text-gray-500">#{{ $hashtag }}</span>
                                        @endif
                                    @endforeach
                                </td>
                                <td class="px-6 py-4">
                                    @foreach ($slide->load('images')->images as $image)
                                        <div class="inline-block mr-2 mb-2 relative group">
                                            <img src="{{ Storage::url($image->path) }}" alt="Slayt resmi"
                                                class="w-16 h-16 object-cover">
                                        </div>
                                    @endforeach
                                </td>
                                <td class="px-6 py-4 flex space-x-2">
                                    <a href="{{ route('admin.slides.edit', $slide) }}"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                        Düzenle
                                    </a>
                                    <form x-ref="deleteForm" action="{{ route('slides.destroy', $slide) }}"
                                        method="POST" x-data="{
                                            deleteSlide() {
                                                if (!confirm('Silmek istediğinizden emin misiniz?')) {
                                                    return;
                                                }
                                                this.$refs.deleteForm.submit();
                                            }
                                        }">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" @click="deleteSlide()"
                                            class="font-medium text-red-600 dark:text-red-500 hover:underline">
                                            Sil
                                        </button>
                                    </form>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
