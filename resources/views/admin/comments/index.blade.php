<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl capitalize text-blue-800 leading-tight">
            {{ __('general.comments') }}
        </h2>
    </x-slot>


    <div class="m-5" x-data="
    {
        deleteComment(url){
        if(!confirm('emin misiniz')){
            return
        }
        window.location.href = url
    }
,
    toggleComment(url){
        axios.put(url).then(res=>{
            if(res.status == 200) {
                window.location.reload()
            }
        }).catch(err=>{
            alert('error')
        })
    }
    }
">
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3 text-center">
                    ad
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    telefone No
                </th>

                <th scope="col" class="px-6 py-3 text-center">
                   email
                </th>

                <th scope="col" class="px-6 py-3 text-center">
                   danisman
                </th>

                <th scope="col" class="px-6 py-3 text-center">
                   yorum
                </th>

                <th scope="col" class="px-6 py-3 text-center">
                    işlemler
                </th>

            </tr>


        </thead>
        <tbody>

            @foreach($comments as $comment)
            <tr
                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 text-center">
                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$comment->name}}
                </td>
                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$comment->phone}}
                </td>
                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$comment->email}}
                </td>
                <td scope="row" class=" px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $comment->user->name }}
                </td>
                <td scope="row" class=" px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $comment->comment }}
                </td>

                <td>
<button type="button" @click="toggleComment(`{{ route('comment.toggle',$comment) }}`)"
                        class="px-3 py-2 text-sm font-medium text-center text-white bg-indigo-700 rounded-lg hover:bg-indigo-800 focus:ring-4 focus:outline-none focus:ring-indigo-300 dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-800">
                        @if ($comment->status)
                            gizle
                        @else
                            onayla
                        @endif



                    </button>

                    <button @click="deleteComment(`{{route('comment.delete',$comment)}}`)" type="button"
                        class="px-3 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">sil</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="flex justify-center my-5">
    {{ $comments->links() }}
</div>
</div>
</x-app-layout>
