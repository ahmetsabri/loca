<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-blue-700 leading-tight capitalize">
            <a href="{{ route('form.index') }}">
                {{ __('formlar') }}
            </a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="m-5" x-data="{
            deleteForm(url) {
                    if (!confirm('Emin misiniz?')) {
                        return
                    }
                    window.location.href = url
                },
                changeType(url) {
                    window.location.href = url
                },
                openModalId: null,
                toggleModal(id) {
                    this.openModalId = this.openModalId === id ? null : id
                    console.log('Toggling modal:', id, 'Open ID:', this.openModalId)
                }
        }">
            <div class="w-1/12 my-10">
                <label for="types"
                    class="block mb-2 text-sm font-bold text-gray-900 dark:text-white capitalize">{{ __('general.type') }}</label>
                <select id="types"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    @change="changeType($event.target.value)">
                    @foreach ($types as $type)
                        <option value="{{ request()->fullUrlWithQuery(['type' => $type]) }}"
                            @selected(request()->query('type') == $type)>
                            {{ __('general.' . strtolower($type)) }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-5">
                @include('search', ['action' => route('form.index')])
            </div>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                {{ __('general.name') }}
                            </th>
                            <th scope="col" class="px-6 py-3">
                                {{ __('general.phone') }}
                            </th>
                            <th scope="col" class="px-6 py-3">
                                {{ __('general.email') }}
                            </th>
                            <th scope="col" class="px-6 py-3">
                                proje
                            </th>
                            <th scope="col" class="px-6 py-3">
                                {{ __('general.portfolio') }}
                            </th>
                            <th scope="col" class="px-6 py-3">
                                dosya
                            </th>
                            <th scope="col" class="px-6 py-3">
                                tarih
                            </th>
                            <th scope="col" class="px-6 py-3">
                                işlemler
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($forms as $form)
                            @include('admin.categories.new_sub_category', ['subCategory' => $form])
                            <tr
                                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <td scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white truncate">
                                    <p class="truncate">
                                        {{ str($form->name)->limit(30) }}
                                    </p>
                                </td>
                                <td scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $form->phone }}
                                </td>
                                <td scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $form->email }}
                                </td>
                                <td scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $form->project?->title ?? '-' }}
                                </td>
                                <td scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $form->portfolio?->title ?? '-' }}
                                </td>
                                <td scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    @if ($form->attachment)
                                        <a target="_blank" href="{{ $form->attachment_url }}"
                                            class="text-blue-600">{{ __('show') }}</a>
                                    @else
                                        -
                                    @endif
                                </td>
                                <td scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $form->created_at->format('d.m.Y') }}
                                </td>
                                <td scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    @if ($form->message)
                                        <button @click="toggleModal('messageModal-{{ $form->id }}')" type="button"
                                            class="px-3 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mr-2">
                                            {{ __('Mesajı Göster') }}
                                        </button>
                                    @endif
                                    <button @click="deleteForm('{{ route('form.delete', $form) }}')" type="button"
                                        class="px-3 py-2 text-sm font-medium text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                                        {{ __('sil') }}
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="flex justify-center">
                {{ $forms->links() }}
            </div>

            <!-- Modals -->
            @foreach ($forms as $form)
                <div id="messageModal-{{ $form->id }}"
                    class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full flex items-center justify-center"
                    x-show="openModalId === 'messageModal-{{ $form->id }}'" x-transition
                    @click="toggleModal('messageModal-{{ $form->id }}')">
                    <div class="relative p-5 border w-11/12 max-w-2xl shadow-lg rounded-md bg-white dark:bg-gray-800"
                        @click.stop>
                        <div class="flex justify-between items-center">
                            <h3 class="text-lg font-medium text-gray-900 dark:text-white">{{ __('Mesaj') }}</h3>
                            <button @click="toggleModal('messageModal-{{ $form->id }}')" type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </div>
                        <div class="mt-4">
                            <p class="text-gray-900 dark:text-white whitespace-pre-wrap">{{ $form->message }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
