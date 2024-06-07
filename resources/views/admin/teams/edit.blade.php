<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('team') }}
        </h2>
    </x-slot>
    <div class="p-12 flex justify-center flex-wrap">
<div class="w-full">
    @if($user->image)
                            <img class="w-48 h-48 mx-auto text-center rounded " src="{{ $user->image?->full_url }}" alt="Small avatar">
                            @endif
</div>
        <form class="space-y-4 w-1/2" action="{{route('team.update',$user)}}" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="team" class="block capitalize mb-2 text-sm font-medium text-gray-900 dark:text-white">{{
                    __('name') }}</label>
                <input value="{{ $user->name }}" type="text" name="name" id="team"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                    required />
            </div>
            <div>
                <label for="team" class="block capitalize mb-2 text-sm font-medium text-gray-900 dark:text-white">{{
                    __('phone') }}</label>
                <input value="{{ $user->phone }}" type="text" name="phone" id="team"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                    required />
            </div>
            <div>
                <label for="team" class="block capitalize mb-2 text-sm font-medium text-gray-900 dark:text-white">{{
                    __('email') }}</label>
                <input value="{{ $user->email }}" type="email" name="email" id="team"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                    required />
            </div>
            <div>
                <label for="team" class="block capitalize mb-2 text-sm font-medium text-gray-900 dark:text-white">{{
                    __('password') }}</label>
                <input type="password" name="password" id="team"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                     />
            </div>
            <div>
                <label for="team" class="block capitalize mb-2 text-sm font-medium text-gray-900 dark:text-white">{{
                    __('facebook') }}</label>
                <input value="{{ $user->facebook_url }}" type="text" name="facebook_url" id="team"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                    required />
            </div>
            <div>
                <label for="team" class="block capitalize mb-2 text-sm font-medium text-gray-900 dark:text-white">{{
                    __('instagram') }}</label>
                <input value="{{ $user->instagram_url }}" type="text" name="instagram_url" id="team"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                    required />
            </div>
            <div>
                <label for="team" class="block capitalize mb-2 text-sm font-medium text-gray-900 dark:text-white">{{
                    __('address') }}</label>
                <input value="{{ $user->address }}" type="text" name="address" id="team"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                    required />
            </div>
            <div>
                <label for="team" class="block capitalize mb-2 text-sm font-medium text-gray-900 dark:text-white">{{
                    __('experience') }}</label>
                <input value="{{ implode(',',$user->experience) }}" type="text" name="experience" id="team"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                    required placeholder="exp1, exp2, exp3" />
            </div>
            <div>
                <label for="team" class="block capitalize mb-2 text-sm font-medium text-gray-900 dark:text-white">{{
                    __('languages') }}</label>
                <input value="{{ implode(',',$user->languages) }}" type="text" name="languages" id="team"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                    required placeholder="turksih, english" />
            </div>
            <div>
                <div class="mb-2">
                    <label for="department"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white capitalize">{{
                        __('department') }}</label>
                    <select id="department" name="department_id"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option value="">{{ __('department') }}</option>
                        @foreach($departments as $department)
                        <option @selected($user->department_id == $department->id ) value="{{ $department->id }}">{{$department->name }}</option>
                        @endforeach
                    </select>
                </div>
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="images">image</label>
                <input
                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                    aria-describedby="images" id="images" type="file" name="image">
                <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="name"></div>
            </div>

          @foreach(config('app.locales') as $locale)


            <div>
                <label for="team" class="block capitalize mb-2 text-sm font-medium text-gray-900 dark:text-white">{{
                    __('bio_'.$locale)}}</label>
                <textarea type="text" name="bio[{{ $locale }}]" id="team"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                    required rows="7">{{ $user->getTranslation('bio',$locale) }}</textarea>
                <br />
            </div>
          @endforeach
            <button type="submit"
                class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
        </form>


    </div>
</x-app-layout>
