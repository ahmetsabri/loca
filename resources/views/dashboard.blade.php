<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Admin Paneli
        </h2>
    </x-slot>

    <div class="py-12 mx-10">
        <div class="flex justify-evenly flex-wrap">
            <div>
                <a href="{{ route('category.index') }}"
                    class="px-5 py-2.5 text-base font-medium text-white bg-indigo-700 hover:bg-indigo-800 focus:ring-4 focus:outline-none focus:ring-indigo-300 rounded-lg text-center dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-800">
                kategoriler
                </a>
            </div>

            <div>
                    <a href="{{ route('info.index') }}"
                        class="px-5 py-2.5 text-base font-medium text-white bg-indigo-700 hover:bg-indigo-800 focus:ring-4 focus:outline-none focus:ring-indigo-300 rounded-lg text-center dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-800">
                        portföy bilgileri
                    </a>
                </div>
            <div>
                    <a href="{{ route('feature.index') }}"
                        class="px-5 py-2.5 text-base font-medium text-white bg-indigo-700 hover:bg-indigo-800 focus:ring-4 focus:outline-none focus:ring-indigo-300 rounded-lg text-center dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-800">
                        portföy özellikleri
                    </a>
                </div>

                <div>
                    <a href="{{ route('team.index') }}"
                        class="px-5 py-2.5 text-base font-medium text-white bg-indigo-700 hover:bg-indigo-800 focus:ring-4 focus:outline-none focus:ring-indigo-300 rounded-lg text-center dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-800">
                        ekip
                    </a>
                </div>
                <div>
                    <a href="{{ route('portfolio.index') }}"
                        class="px-5 py-2.5 text-base font-medium text-white bg-indigo-700 hover:bg-indigo-800 focus:ring-4 focus:outline-none focus:ring-indigo-300 rounded-lg text-center dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-800">
                        portföy
                    </a>
                </div>

                <div>
                    <a href="{{ route('project.index') }}"
                        class="px-5 py-2.5 text-base font-medium text-white bg-indigo-700 hover:bg-indigo-800 focus:ring-4 focus:outline-none focus:ring-indigo-300 rounded-lg text-center dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-800">
                        proje
                    </a>
                </div>

                <div>
                        <a href="{{ route('form.index') }}"
                            class="px-5 py-2.5 text-base font-medium text-white bg-indigo-700 hover:bg-indigo-800 focus:ring-4 focus:outline-none focus:ring-indigo-300 rounded-lg text-center dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-800">
                            form
                        </a>
                    </div>
                <div>
                        <a href="{{ route('department.index') }}"
                            class="px-5 py-2.5 text-base font-medium text-white bg-indigo-700 hover:bg-indigo-800 focus:ring-4 focus:outline-none focus:ring-indigo-300 rounded-lg text-center dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-800">
                            departman
                        </a>
                    </div>
                <div>
                        <a href="{{ route('service.index') }}"
                            class="px-5 py-2.5 text-base font-medium text-white bg-indigo-700 hover:bg-indigo-800 focus:ring-4 focus:outline-none focus:ring-indigo-300 rounded-lg text-center dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-800">
                            servisler
                        </a>
                    </div>
                <div>
                        <a href="{{ route('video_category.index') }}"
                            class="px-5 py-2.5 text-base font-medium text-white bg-indigo-700 hover:bg-indigo-800 focus:ring-4 focus:outline-none focus:ring-indigo-300 rounded-lg text-center dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-800">
                            loca tv kategorileri
                        </a>
                    </div>
                <div>
                        <a href="{{ route('video.index') }}"
                            class="px-5 py-2.5 text-base font-medium text-white bg-indigo-700 hover:bg-indigo-800 focus:ring-4 focus:outline-none focus:ring-indigo-300 rounded-lg text-center dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-800">
                            loca tv
                        </a>
                    </div>
        </div>
    </div>
</x-app-layout>
