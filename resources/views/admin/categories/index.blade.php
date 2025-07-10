<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('general.categories') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
                class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                type="button">
                yeni
            </button>
        </div>

    </div>
    <div class="m-5" x-data="{
        isSubCategory: false,
        subCategory: null,
        errors: [],
        name: {
            tr: '',
            ru: '',
            en: '',
        },
        deleteCategory(url) {
            if (!confirm('ona bağlı portföyler de silenecek emin misiniz?')) {
                return
            }
            window.location.href = url
        },
        create() {
            const self = this;
            const url = `{{ route('category.store') }}`
            axios.post(url, { name: this.name }).then(res => {
                if (res.status == 200) {
                    window.location.reload();
                }
            }).catch(err => {
                self.errors = err.response.data.message
                console.log(self.errors)
            })
        }
    }">
        <div class="w-1/2">
            <div class="mb-5">
                @include('search', ['action' => url()->full()])
            </div>
        </div>
        @include('admin.categories.new_category')
        @include('admin.categories.list_categories', ['categories' => $categories])
        {{ $categories->links() }}
    </div>
</x-app-layout>
