<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3 text-center">
                    başlık
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    işlemler
                </th>

            </tr>


        </thead>
        <tbody>

            @foreach ($videos as $video)
                <tr
                    class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 text-center">
                    <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $video->title }}
                    </td>
                    <td scope="row" class=" px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">




                        <button type="button" data-modal-target="edit-video-modal-{{ $video->id }}"
                            data-modal-toggle="edit-video-modal-{{ $video->id }}"
                            class="px-3 py-2 text-sm font-medium text-center text-white bg-indigo-700 rounded-lg hover:bg-indigo-800 focus:ring-4 focus:outline-none focus:ring-indigo-300 dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-800">{{ __('düzenle') }}</button>


                        <button @click="deleteVideo(`{{ route('video.delete', $video) }}`)" type="button"
                            class="px-3 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">{{ __('sil') }}</button>
                    </td>
                </tr>
                @include('admin.video.edit_video', [
                    'title' => $video->getTranslations('title'),
                    'id' => $video->id,
                ])
            @endforeach
        </tbody>
    </table>
</div>
