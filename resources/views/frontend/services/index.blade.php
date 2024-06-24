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
                        {{ __('general.services') }}
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
        <section class="content-field py-20 2xl:py-16 xl:py-14 lg:py-12 md:py-11 sm:py-10">
            <div class="wrapper max-w-1440 mx-auto w-full px-7.5 md:px-5">
                <div class="heading-wrapper mb-16 2xl:mb-12 xl:mb-9 lg:mb-6 md:mb-3">
                    <div
                        class="custom-display text-center text-5 xl:text-4.5 lg:text-4 md:text-3.5 text-[#2675FA] font-semibold tracking-[0.07em]">
                        {{ __('general.sevices_before_sell') }}
                    </div>
                    <div class="text-editor text-editor-main mt-4">
                        <!-- .text-editor içerisindeki style attribute değerleri frontendi tasarıma benzetmek adına eklenmiştir, backend aşamasında silinerek panel editöründen tanımlanmalıdır. -->
                        <h2 style="text-align:center;"><strong>
                        {{ __('general.service_detail') }}
                        </strong></h2>
                    </div>
                </div>

                <div class="tab-wrapper relative mb-28 2xl:mb-24 xl:mb-18 lg:mb-12 md:mb-8 sm:mb-4">
                    <div class="space-wrapper relative w-fit mx-auto max-w-full">
                        <div
                            class="inner tab-triggers flex items-center w-fit max-w-full mx-auto p-1 overflow-y-hidden overflow-x-auto isolate before:absolute before:left-1/2 before:top-1/2 before:w-full before:h-15 lg:before:h-12 before:bg-[#E8F0FD] before:-translate-y-1/2 before:-translate-x-1/2 before:rounded-full scrollbar-none">
                            @foreach($services as $index=>$service)


                            <button data-id="{{ $service->id }}"
                                class="item group relative rounded-full h-13 lg:h-10 px-8 lg:px-4 flex items-center justify-center duration-300 [&.active]:bg-white [&.active]:shadow-s2 my-4 @if($loop->first)active @endif">
                                <div
                                    class="number text-3.5 font-semibold text-[#2675FA] absolute left-5 top-2 duration-300 opacity-0 group-[&.active]:opacity-100 lg:hidden">
                                {{ $index+1 }}
                                </div>
                                <div
                                    class="text text-[#6D6D6D] text-4 lg:text-3.5 font-medium whitespace-nowrap duration-300 group-hover:text-tertiary-950 group-[&.active]:text-tertiary-950">
                                    {{ $service->name }}</div>
                            </button>
                       @endforeach
                        </div>
                    </div>
                </div>

                <div class="tab-panels">
                    @foreach( $services as $service )


                    <div data-id="{{ $service->id }}" class="item hidden [&.active]:block @if($loop->first)active @endif">
                        <div
                            class="content-wrapper grid grid-cols-5/7 sm:grid-cols-1 items-center gap-28 2xl:gap-24 xl:gap-20 lg:gap-16 md:gap-10 sm:gap-8 mb-32 2xl:mb-28 xl:mb-20 lg:mb-14 md:mb-8">
                            <div class="image-wrapper grid gap-2 sm:grid-cols-2">
                                <div
                                    class="image aspect-[37/26] sm:aspect-square rounded-6 md:rounded-3 overflow-hidden isolate max-w-[370px] xl:max-w-[300px] md:max-w-[250px] sm:max-w-none w-full h-auto mr-0 ml-auto">
                                    <img class="full-cover" src="{{ asset('image/photo/3.webp') }}" alt="" loading="lazy"></div>
                                <div
                                    class="image aspect-[34/21] sm:aspect-square rounded-6 md:rounded-3 overflow-hidden isolate max-w-[340px] xl:max-w-[250px] md:max-w-[200px] sm:max-w-none w-full h-auto ml-0 mr-auto">
                                    <img class="full-cover" src="{{ asset('image/photo/3.webp') }}" alt="" loading="lazy"></div>
                            </div>
                            <div class="text-wrapper">
                                <div class="text-editor mb-12 2xl:mb-10 xl:mb-9 lg:mb-8 md:mb-6 sm:mb-5">
                                    <!-- .text-editor içerisindeki style attribute değerleri frontendi tasarıma benzetmek adına eklenmiştir, backend aşamasında silinerek panel editöründen tanımlanmalıdır. -->
                                    <h4 style="color:#2675FA"><strong>{{ $service->name }}</strong></h4>
                                </div>
                                <ul
                                    class="custom-list grid grid-cols-2 sm:grid-cols-1 gap-5 xl:gap-3 lg:gap-2.5 md:gap-2 mb-10 2xl:mb-9 xl:mb-8 lg:mb-6 md:mb-4">
                                    @foreach($service->features as $feature)


                                    <li class="flex items-center gap-4 xl:gap-3 lg:gap-2.5 md:gap-2">
                                        <div
                                            class="icon icon-check text-4.5 h-4.5 xl:text-4 xl:h-4 lg:text-3.5 lg:h-3.5 md:text-3 md:h-3 block leading-none duration-300 text-[#2675FA]">
                                        </div>
                                        <div
                                            class="text text-5 xl:text-4.5 lg:text-4 md:text-3.5 font-medium text-tertiary-950">
                                            {{ $feature->value }}
                                        </div>
                                    </li>
                                    @endforeach


                                </ul>

                                <div class="text-editor">
                                    <h6 style="font-weight:500;color:#6D6D6D">{{ $service->description }}</h6>
                                </div>
                            </div>
                        </div>

                        @if(($firstSubService = $service->subServices->first()) && $service->subServices->count()>=1)
                        <div
                            class="content-wrapper grid grid-cols-5/7 sm:grid-cols-1 items-center gap-28 2xl:gap-24 xl:gap-20 lg:gap-16 md:gap-10 sm:gap-8 mb-32 2xl:mb-28 xl:mb-20 lg:mb-14 md:mb-8">
                            <div class="text-wrapper sm:order-2">
                                <div
                                    class="custom-display text-5 xl:text-4.5 lg:text-4 md:text-3.5 text-[#2675FA] font-semibold tracking-[0.07em] mb-4">
                                    {{ $firstSubService->name }}</div>
                                <div class="text-editor text-editor-main mb-12 2xl:mb-10 xl:mb-9 lg:mb-8 md:mb-6 sm:mb-5">
                                    <h3><strong>{{ $firstSubService->description }}</strong>
                                    </h3>
                                </div>
                                <ul class="custom-list grid gap-5 2xl:gap-4.5 xl:gap-4 lg:gap-3.5 md:gap-3 sm:gap-2.5">
                                    @foreach($firstSubService->features as $feature)


                                    <li class="flex items-center gap-4 xl:gap-3 lg:gap-2.5 md:gap-2">
                                        <div
                                            class="icon icon-check text-4.5 h-4.5 xl:text-4 xl:h-4 lg:text-3.5 lg:h-3.5 md:text-3 md:h-3 block leading-none duration-300 text-[#2675FA]">
                                        </div>
                                        <div
                                            class="text text-5 xl:text-4.5 lg:text-4 md:text-3.5 font-medium text-tertiary-950">
                                        {{ $feature->value }}
                                        </div>
                                    </li>
@endforeach
                                </ul>
                            </div>
                            <div class="image-wrapper sm:order-1">
                                <a href="{{ $service->promotion_url }}" class="item block group"
                                    data-fancybox>
                                    <div class="image-wrapper relative aspect-[7/4]">
                                        <div
                                            class="image w-full h-full rounded-5 md:rounded-3 overflow-hidden isolate translate-z-0 bg-tertiary-950">
                                            <img class="full-cover opacity-85 duration-450 group-hover:opacity-100 group-hover:scale-105"
                                                src="{{ asset('image/other/10.webp') }}" alt="" loading="lazy"></div>
                                        <div
                                            class="icon-wrapper w-13 xl:w-11 md:w-9 rounded-full aspect-square bg-secondary-600 flex items-center justify-center absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 duration-450 group-hover:delay-150 group-hover:scale-125">
                                            <div
                                                class="icon icon-play text-4 h-4 xl:text-3.5 xl:h-3.5 md:text-3 md:h-3 block leading-none duration-300 text-white">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
@endif
                        @if(($lastSubService= $service->subServices->last()) && $service->subServices->count()>1)
        <div
                            class="content-wrapper grid grid-cols-2 sm:grid-cols-1 items-center gap-28 2xl:gap-24 xl:gap-20 lg:gap-16 md:gap-10 sm:gap-8">
                            <div class="image-wrapper grid gap-2 sm:grid-cols-3">
                                <div
                                    class="image relative z-3 aspect-[37/26] sm:aspect-square rounded-6 md:rounded-3 overflow-hidden isolate max-w-[325px] xl:max-w-[300px] md:max-w-[250px] sm:max-w-none w-full h-auto mx-auto">
                                    <img class="full-cover" src="{{ asset('image/photo/4.webp') }}" alt="" loading="lazy"></div>
                                <div
                                    class="image relative z-2 aspect-[34/21] sm:aspect-square rounded-6 md:rounded-3 overflow-hidden isolate max-w-[280px] xl:max-w-[225px] md:max-w-[175px] sm:max-w-none w-full h-auto ml-0 mr-auto -mt-24 xl:-mt-12 sm:mt-0">
                                    <img class="full-cover" src="{{ asset('image/photo/4.webp') }}" alt="" loading="lazy"></div>
                                <div
                                    class="image relative z-1 aspect-[34/21] sm:aspect-square rounded-6 md:rounded-3 overflow-hidden isolate max-w-[300px] xl:max-w-[275px] md:max-w-[200px] sm:max-w-none w-full h-auto mr-0 ml-auto -mt-30 xl:-mt-24 sm:mt-0">
                                    <img class="full-cover" src="{{ asset('image/photo/4.webp') }}" alt="" loading="lazy"></div>
                            </div>
                            <div class="text-wrapper">
                                <div
                                    class="custom-display text-5 xl:text-4.5 lg:text-4 md:text-3.5 text-[#2675FA] font-semibold tracking-[0.07em] mb-4">
                                    {{ $lastSubService->name }}
                                </div>
                                <div class="text-editor text-editor-main mb-12 2xl:mb-10 xl:mb-9 lg:mb-8 md:mb-6 sm:mb-5">
                                    <!-- .text-editor içerisindeki style attribute değerleri frontendi tasarıma benzetmek adına eklenmiştir, backend aşamasında silinerek panel editöründen tanımlanmalıdır. -->
                                    <h3><strong>{{ $lastSubService->description }}</strong>
                                    </h3>
                                </div>
                                <ul class="custom-list grid gap-5 2xl:gap-4.5 xl:gap-4 lg:gap-3.5 md:gap-3 sm:gap-2.5">
                                    @foreach($lastSubService->features as $lastSubServiceFeature)


                                    <li class="flex items-center gap-4 xl:gap-3 lg:gap-2.5 md:gap-2">
                                        <div
                                            class="icon icon-check text-4.5 h-4.5 xl:text-4 xl:h-4 lg:text-3.5 lg:h-3.5 md:text-3 md:h-3 block leading-none duration-300 text-[#2675FA]">
                                        </div>
                                        <div
                                            class="text text-5 xl:text-4.5 lg:text-4 md:text-3.5 font-medium text-tertiary-950">
                                            {{ $lastSubServiceFeature->value }}
                                        </div>
                                    </li>
@endforeach

                                </ul>
                            </div>

                        </div>
                    </div>

                    @endif
@endforeach
                </div>
            </div>
        </section>

    </main>
@endsection
