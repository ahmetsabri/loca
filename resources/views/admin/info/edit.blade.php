<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $info->name }}
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="m-5" x-data="{
            init(){
                if(`{{ $info->category->parent->parent_id }}`){
                    this.loadChildren(`{{ $info->category->parent->parent_id }}`,1); // arsa
                    this.loadChildren(`{{ $info->category->parent_id }}`,2); //kiralik
                }
                if(!`{{ $info->category->parent->parent_id }}`){
                    this.loadChildren(`{{ $info->category->parent_id }}`,1); //kiralik
                    this.loadChildren(`{{ $info->category_id }}`,2); // arsa
                }
                this.selected2ndCategory = `{{ $info->category_id }}`

        },
        firstLevelChildren:[],
        secondLevelChildren:[],
        filterable:0,
        selectedCategory:`{{ $info->category_id }}`,
        selected1stCategory:null,
        selected2ndCategory:`{{ $info->category_id }}`,

        loadChildren(id,level=1){
            const self = this
            let url;
            if (level == 1 ){
                self.selectedCategory = id;
                self.firstLevelChildren= [];
                self.secondLevelChildren= [];
                self.selected1stCategory = null;
                self.selected2ndCategory=null;

            }
            if (level != 1) {
                self.selected1stCategory = id
            }
                 url = `{{ route('category.children') }}/${id}`
            axios.get(url).then(res=>{
                if(level == 1){
                    self.firstLevelChildren = res.data.children
                    return
                }
                self.secondLevelChildren = res.data.children
            }).catch(err=>{
                console.log(err)
            })
        },
        deleteInfo(url){
        if(!confirm('emin misiniz')){
            return
        }
        window.location.href=url
    }
    }
">

            <div class="p-4">

                <form class="space-y-4 flex flex-wrap justify-center" action="{{route('info.update',$info)}}" method="post">
                    @csrf

                    <input type="hidden" name="category_id"
                        :value="selected2ndCategory ?? selected1stCategory ?? selectedCategory">

                    <div class="flex bg-slate-200 p-5 justify-center">
                        <ul>
                            @foreach($categories as $category)

                            @if($loop->first)
                            <li class="py-1">
                                <a class="font-bold capitalize text-gray-600 dark:text-blue-500 ">
                                    Kategori seç
                                </a>
                            </li>
                            @endif
                            <li class="py-1" @click="loadChildren(`{{ $category->id}}`)">
                                <a href="#"
                                    class="font-bold capitalize text-gray-600 dark:text-blue-500 hover:underline"
                                    :class="{'bg-slate-400 text-white': selectedCategory === '{{ $category->id }}'}">
                                    {{ $category->name }}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="mx-3"></div>
                    <div class="flex bg-slate-200 p-5 justify-center" x-show="firstLevelChildren.length">
                        <ul>
                            <template x-for="child in firstLevelChildren">
                                <li>
                                    <a href="#" @click="loadChildren(child.id,2)"
                                        :class="{'bg-slate-400 text-white': selected1stCategory == child.id}"
                                        class="font-bold capitalize text-gray-600 dark:text-gray-500 hover:underline"
                                        x-text="child.name.tr">
                                    </a>
                                </li>
                            </template>
                        </ul>
                    </div>
                    <div class="mx-2"></div>
                    <div class="flex bg-slate-200 p-5 justify-center" x-show="secondLevelChildren.length">
                        <ul>
                            <template x-for="child in secondLevelChildren">
                                <li>
                                    <a href="#" @click="selected2ndCategory = child.id"
                                        :class="{'bg-slate-400 text-white': selected2ndCategory == child.id}"
                                        class="font-bold capitalize text-gray-600 dark:text-gray-500 hover:underline"
                                        x-text="child.name.tr">
                                    </a>
                                </li>
                            </template>
                        </ul>
                    </div>

                    @foreach(config('app.locales') as $locale)
                    <div class="w-full ">
                        <div class="w-1/3 mx-auto">
                            <label for="infos"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white uppercase">{{
                                $locale
                                }}</label>
                            <input type="text" name="name[{{ $locale }}]" id="infos"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                required value="{{ $info->getTranslation('name',$locale) }}" />
                        </div>
                    </div>
                    @endforeach

                    <div class="flex justify-center flex-wrap">
                        <div class="w-full">
                            <label class="inline-flex items-center cursor-pointer">
                                <input type="checkbox" @checked($info->filterable) value="1" class="sr-only peer" name="filterable">
                                <div
                                    class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                                </div>
                                <span
                                    class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300">filtrelenebilir</span>
                            </label>
                        </div>

                        <div class="w-full mx-auto my-3">
                            <button type="submit"
                                class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">gönder</button>
                        </div>
                </form>

            </div>
</x-app-layout>
