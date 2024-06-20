<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @foreach($category->ancestorsAndSelf->reverse() as $ancestor)
            @if($loop->first)
<a href="{{route('category.index')}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
    {{__('categories')}}
</a> >

            @endif
<a href="{{route('category.show',$ancestor)}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">{{$ancestor->name}}</a>
@if(!$loop->last)
>
@endif

            @endforeach
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

        </div>
    </div>
      <div class="m-5" x-data="
    {
        isSubCategory:false,
        subCategory:null,
        deleteCategory(url){
        if(!confirm('emin misiniz')){
            return
        }
        window.location.href=url
    }
    }
">

@include('admin.categories.list_categories',['categories'=>$category->children,
'main_category'=>$category])



    </div>
</x-app-layout>
