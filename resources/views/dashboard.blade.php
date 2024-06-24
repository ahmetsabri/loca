<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Admin Paneli
        </h2>
    </x-slot>

    <div class="py-12 mx-10">
        <div class="flex justify-center space-x-5 flex-wrap items-center space-y-5">
            <a href="{{ route('portfolio.index') }}"
                class="block mt-5 capitalize max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 text-indigo-700">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-indigo-700 dark:text-white">
                    portföy
                </h5>
            </a>

            <a href="{{ route('info.index') }}"
                class="block capitalize max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 text-indigo-700">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-indigo-700 dark:text-white">
                    portföy bilgileri
                </h5>
            </a>







<a href="{{ route('feature.index') }}"
    class="block capitalize max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 text-indigo-700">
    <h5 class="mb-2 text-2xl font-bold tracking-tight text-indigo-700 dark:text-white">
        portföy özellikleri
    </h5>
</a>

<a href="{{ route('category.index') }}"
    class="block capitalize  max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 text-indigo-700">
    <h5 class="mb-2 text-2xl font-bold tracking-tight text-indigo-700 dark:text-white">
        kategoriler
    </h5>
</a>
<a href="{{ route('team.index') }}"
    class="block capitalize max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 text-indigo-700">
    <h5 class="mb-2 text-2xl font-bold tracking-tight text-indigo-700 dark:text-white">
        ekip
    </h5>
</a>

<a href="{{ route('project.index') }}"
    class="block capitalize max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 text-indigo-700">
    <h5 class="mb-2 text-2xl font-bold tracking-tight text-indigo-700 dark:text-white">
        proje
    </h5>
</a>
<a href="{{ route('form.index') }}"
    class="block capitalize max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 text-indigo-700">
    <h5 class="mb-2 text-2xl font-bold tracking-tight text-indigo-700 dark:text-white">
        form
    </h5>
</a>
<a href="{{ route('department.index') }}"
    class="block capitalize max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 text-indigo-700">
    <h5 class="mb-2 text-2xl font-bold tracking-tight text-indigo-700 dark:text-white">
        departman
    </h5>
</a>

<a href="{{ route('service.index') }}"
    class="block capitalize max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 text-indigo-700">
    <h5 class="mb-2 text-2xl font-bold tracking-tight text-indigo-700 dark:text-white">
        hizmetler
    </h5>
</a>
<a href="{{ route('video_category.index') }}"
    class="block capitalize max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 text-indigo-700">
    <h5 class="mb-2 text-2xl font-bold tracking-tight text-indigo-700 dark:text-white">
        tv kategorileri
    </h5>
</a>
<a href="{{ route('video.index') }}"
    class="block capitalize max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 text-indigo-700">
    <h5 class="mb-2 text-2xl font-bold tracking-tight text-indigo-700 dark:text-white">
        loca tv
    </h5>
</a>
<a href="{{ route('about.index') }}"
    class="block capitalize max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 text-indigo-700">
    <h5 class="mb-2 text-2xl font-bold tracking-tight text-indigo-700 dark:text-white">
        hakkımızda
    </h5>
</a>
<a href="{{ route('faq.index') }}"
    class="block capitalize max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 text-indigo-700">
    <h5 class="mb-2 text-2xl font-bold tracking-tight text-indigo-700 dark:text-white">
        SSS
    </h5>
</a>
<a href="{{ route('comment.index') }}"
    class="block capitalize max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 text-indigo-700">
    <h5 class="mb-2 text-2xl font-bold tracking-tight text-indigo-700 dark:text-white">
        Yorumlar
    </h5>
</a>
<a href="{{ route('post.index') }}"
    class="block capitalize max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 text-indigo-700">
    <h5 class="mb-2 text-2xl font-bold tracking-tight text-indigo-700 dark:text-white">
        Blog
    </h5>
</a>
        </div>
    </div>
</x-app-layout>
