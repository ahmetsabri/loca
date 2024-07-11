@extends('layouts.frontend')

@section('content')
<main class="main-field relative pt-[134px] sm:pt-[124px]">

    <section class="breadcrumb-field px-7.5 md:px-5">
        <div
            class="inner rounded-6 md:rounded-3 relative overflow-hidden isolate translate-z-0 py-28 2xl:py-24 xl:py-20 lg:py-16 md:py-12">
            <div class="background-wrapper absolute left-0 top-0 w-full h-full bg-tertiary-950">
                <img class="full-cover opacity-15" src="{{ asset('image/photo/3.webp') }}" alt="" loading="lazy">
            </div>
            <div class="wrapper max-w-1440 mx-auto w-full px-7.5 relative z-2 grid gap-6 xl:gap-5 lg:gap-4 sm:gap-3">
                <h1
                    class="title text-center font-semibold text-white text-11 2xl:text-10 xl:text-8 lg:text-7 md:text-6 sm:text-5.5 tracking-[0.15em] lg:tracking-widest sm:tracking-wider leading-tight">
                    {{ __('general.faq') }}
                </h1>
                <div
                    class="tags flex items-center justify-center flex-wrap gap-x-10 2xl:gap-x-9 xl:gap-x-8 lg:gap-x-6 md:gap-x-4 sm:gap-x-2 gap-y-2 md:gap-y-1.5 sm:gap-y-0.5">
                    <div
                        class="block w-fit text-4.5 xl:text-4 lg:text-3.5 md:text-3 font-medium duration-300 text-[#B0B0B0]">
                        #LOCAdaYeriniAL</div>
                    <!--<a href="javascript:void(0)" class="block w-fit text-4.5 xl:text-4 lg:text-3.5 md:text-3 font-medium duration-300 text-[#B0B0B0] hover:text-white">#LOCAdaYeriniAL</a>-->
                    <div
                        class="block w-fit text-4.5 xl:text-4 lg:text-3.5 md:text-3 font-medium duration-300 text-[#B0B0B0]">
                        #LocaFarkYaratır</div>
                    <!--<a href="javascript:void(0)" class="block w-fit text-4.5 xl:text-4 lg:text-3.5 md:text-3 font-medium duration-300 text-[#B0B0B0] hover:text-white">#LocaFarkYaratır</a>-->
                    <div
                        class="block w-fit text-4.5 xl:text-4 lg:text-3.5 md:text-3 font-medium duration-300 text-[#B0B0B0]">
                        #eskiusulemlakçılığason</div>
                    <!--<a href="javascript:void(0)" class="block w-fit text-4.5 xl:text-4 lg:text-3.5 md:text-3 font-medium duration-300 text-[#B0B0B0] hover:text-white">#eskiusulemlakçılığason</a>-->
                </div>
            </div>
        </div>
    </section>
    <section class="content-field py-15 2xl:py-14 xl:py-13 lg:py-12 md:py-11 sm:py-10">
        <div class="wrapper max-w-1024 mx-auto w-full px-7.5 md:px-5 grid gap-3 accordion-wrapper accordion-only-one">
            @foreach($questions as $question)


            <div class="accordion group bg-white rounded-5 md:rounded-3 @if($loop->first)active @endif">
                <div
                    class="visible-el flex items-center justify-between gap-7.5 px-11 2xl:px-10 xl:px-9 lg:px-7 md:px-6 py-7 lg:py-6 md:py-5 sm:py-4 cursor-pointer">
                    <div
                        class="text text-tertiary-950 font-medium text-4.5 md:text-4 duration-300 group-[&.active]:text-[#2675FA] group-hover:text-[#2675FA]">
                        {{ $question->question }}
                    </div>
                    <div class="icon-wrapper relative">
                        <div
                            class="icon icon-plus text-4.5 h-4.5 md:text-3.5 md:h-3.5 sm:text-3 sm:h-3 block leading-none duration-300 text-[#2675FA] group-[&.active]:-rotate-45 group-[&.active]:opacity-0">
                        </div>
                        <div
                            class="icon icon-minus text-4.5 h-4.5 md:text-3.5 md:h-3.5 sm:text-3 sm:h-3 block leading-none duration-300 text-[#2675FA] absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 opacity-0 rotate-45 group-[&.active]:opacity-100 group-[&.active]:rotate-0">
                        </div>
                    </div>
                </div>
                <div class="hidden-el h-0 overflow-hidden isolate translate-z-0 duration-450 ease-manidar">
                    <div class="text-editor px-11 2xl:px-10 xl:px-9 lg:px-7 md:px-6 pb-7 lg:pb-6 md:pb-5">
                        <p>
                            {{ $question->answer }}
                        </p>
                    </div>
                </div>
            </div>
      @endforeach
        </div>
    </section>

</main>
@endsection
