@extends('layouts.frontend')
@section('title','RE/MAX Loca')
@section('content')
<soho-technologies class="block">

        <main class="main-field relative pt-[134px] sm:pt-[124px]" x-data="{
    towns:[],
    category:1,
    map:0,
    loadTowns(url){
                        const self = this
                        axios.get(url).then((res)=>{
                            self.towns = res.data.towns
                            self.selectedTownName = res.data.towns.filter(town => town.id == self.selectedTown)[0]?.name
                        }).catch((err)=>{
                            console.log(err)
                        })
                }
}">

            <section class="breadcrumb-field px-7.5 md:px-5">
                <div
                    class="inner rounded-6 md:rounded-3 relative overflow-hidden isolate translate-z-0 pt-28 2xl:pt-24 xl:pt-20 lg:pt-16 md:pt-12 pb-58 2xl:pb-54 xl:pb-50 lg:pb-46 md:pb-12">
                    <div class="background-wrapper absolute left-0 top-0 w-full h-full bg-tertiary-950">
                        <img class="full-cover opacity-15" src="assets/image/photo/3.webp" alt="" loading="lazy">
                    </div>

                    <div
                        class="wrapper max-w-1440 mx-auto w-full px-7.5 relative z-2 grid gap-6 xl:gap-5 lg:gap-4 sm:gap-3">
                        <h1
                            class="title text-center capitalize font-semibold text-white text-11 2xl:text-10 xl:text-8 lg:text-7 md:text-6 sm:text-5.5 tracking-[0.15em] lg:tracking-widest sm:tracking-wider leading-tight">
                            {{ __('general.projects') }}
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
            <section class="filter-field -mt-30 md:mt-0 md:pt-10">
                <div class="wrapper max-w-1280 mx-auto w-full px-7.5 md:px-5">
                    <div class="filter-wrapper bg-[#E3EDF5]/85 backdrop-blur-lg p-5 rounded-7.5 xl:rounded-5 md:rounded-3">
                        <form action="{{ route('projects') }}" class="w-full" method="GET">
                            <input type="hidden" name="map" :value="map" />
                            <div class="form-wrapper grid grid-cols-10/2 md:grid-cols-1 gap-3">
                                <div class="input-wrapper grid grid-cols-7/5 md:grid-cols-2 sm:grid-cols-1 gap-3">
                                    <div class="form-el group/form w-full sm:order-1">
                                        <!-- Buraya `error` classı gelince ilgili style değişiyor -->
                                        <div
                                            class="custom-input h-22 bg-white rounded-6 md:rounded-3 px-10 2xl:px-9 xl:px-8 lg:px-7 md:px-6 flex flex-col justify-center border border-solid border-transparent duration-300 group-[&.error]/form:border-secondary-700">
                                            <label for="q1"
                                                class="block text-3.5 font-semibold text-tertiary-950 mb-1">
                            {{ __('general.search') }}
                                            </label>
                                            <input name="filter[search]" id="q1" type="text" placeholder="Örn: 3+1 Satılık veya İlan No"
                                                class="text-4 placeholder:text-[#B0B0B0] font-medium text-tertiary-950 w-full">
                                        </div>
                                        <div
                                            class="tooltip text-secondary-700 text-3 mt-2 hidden group-[&.error]/form:block">
                                            Lütfen ilgili alanı doldurunuz.</div>
                                    </div>
                                    <div class="form-el group/form w-full sm:order-3">
                                        <!-- Buraya `error` classı gelince ilgili style değişiyor -->
                                        <div
                                            class="custom-select relative h-22 sm:h-16 bg-white rounded-6 md:rounded-3 px-10 2xl:px-9 xl:px-8 lg:px-7 md:px-6 flex flex-col justify-center border border-solid border-transparent duration-300 group-[&.error]/form:border-secondary-700">
                                          <select class="peer w-full h-full text-4 sm:text-3.5 font-semibold text-tertiary-950">
                                                <option value="" selected disabled>Türkiye</option>
                                            </select>
                                            <div
                                                class="icon icon-chevron-bottom text-3 h-3 lg:text-2.5 lg:h-2.5 block leading-none duration-300 absolute right-10 2xl:right-9 xl:right-8 lg:right-7 md:right-6 top-50/100 -translate-y-1/2 pointer-events-none peer-focus:rotate-180 text-tertiary-950">
                                            </div>
                                        </div>
                                        <div
                                            class="tooltip text-secondary-700 text-3 mt-2 hidden group-[&.error]/form:block">
                                            Lütfen ilgili alanı doldurunuz.</div>
                                    </div>
                                    <div class="form-el group/form w-full sm:order-2">
                                        <!-- Buraya `error` classı gelince ilgili style değişiyor -->
                                        <div
                                            class="custom-input h-22 xs:h-auto xs:py-5 bg-white rounded-6 md:rounded-3 px-10 2xl:px-9 xl:px-8 lg:px-7 md:px-6 flex items-center justify-between gap-2 border border-solid border-transparent duration-300 group-[&.error]/form:border-secondary-700 xs:grid xs:grid-cols-2">
                                            <div class="inner-group flex flex-col w-fit xs:w-full">
                                                <label for="q2"
                                                    class="block text-3.5 font-semibold text-tertiary-950 mb-1 xs:text-center">
                            {{ __('general.price') }}

                                                </label>
                                                <input name="filter[min_price]" id="q2" type="text" placeholder="Min"
                                                    class="text-4 placeholder:text-[#B0B0B0] font-medium text-tertiary-950 w-10 xs:w-full xs:text-center">
                                            </div>
                                            <div class="split h-11 w-px bg-[#D1D1D1]/50 shrink-0 xs:hidden"></div>
                                            <div class="inner-group flex flex-col w-fit xs:w-full">
                                                <label for="q3"
                                                    class="block text-3.5 font-semibold text-tertiary-950 mb-1 xs:text-center">
                            {{ __('general.price') }}

                                                </label>
                                                <input name="filter[max_price]" id="q3" type="text" placeholder="Max"
                                                    class="text-4 placeholder:text-[#B0B0B0] font-medium text-tertiary-950 w-10 xs:w-full xs:text-center">
                                            </div>
                                            <div
                                                class="split hidden xs:block w-full h-px col-span-2 bg-[#D1D1D1]/50 my-2.5">
                                            </div>
                                            <div class="inner-group xs:col-span-2">
                                                <div
                                                    class="custom-radio-group flex items-center gap-3 xl:gap-2 xs:justify-center">
                                                    <div class="custom-radio relative">
                                                        <input type="radio" name="filter[currency]"  name="filte[currency]" value="tl"
                                                            class="peer absolute left-0 top-0 w-full h-full opacity-0 cursor-pointer"
                                                            checked>
                                                        <div
                                                            class="box text-3.5 md:text-3 font-medium w-16 xl:w-14 md:w-12 h-12 xl:h-10 md:h-8 rounded-2 flex items-center justify-center text-[#888888] peer-hover:text-tertiary-950 duration-300 border border-solid border-transparent [-webkit-text-stroke:0.5px_transparent] peer-checked:pointer-events-none peer-checked:border-[#144495] peer-checked:bg-[#144495]/5 peer-checked:text-[#144495] peer-checked:[-webkit-text-stroke:0.5px_#144495]">
                                                            TRY</div>
                                                    </div>
                                                    <div class="custom-radio relative">
                                                        <input type="radio" name="filter[currency]"  name="filte[currency]" value="eur"
                                                            class="peer absolute left-0 top-0 w-full h-full opacity-0 cursor-pointer">
                                                        <div
                                                            class="box text-3.5 md:text-3 font-medium w-16 xl:w-14 md:w-12 h-12 xl:h-10 md:h-8 rounded-2 flex items-center justify-center text-[#888888] peer-hover:text-tertiary-950 duration-300 border border-solid border-transparent [-webkit-text-stroke:0.5px_transparent] peer-checked:pointer-events-none peer-checked:border-[#144495] peer-checked:bg-[#144495]/5 peer-checked:text-[#144495] peer-checked:[-webkit-text-stroke:0.5px_#144495]">
                                                            EUR</div>
                                                    </div>
                                                    <div class="custom-radio relative">
                                                        <input type="radio" name="filter[currency]"  name="filte[currency]" value="usd"
                                                            class="peer absolute left-0 top-0 w-full h-full opacity-0 cursor-pointer">
                                                        <div
                                                            class="box text-3.5 md:text-3 font-medium w-16 xl:w-14 md:w-12 h-12 xl:h-10 md:h-8 rounded-2 flex items-center justify-center text-[#888888] peer-hover:text-tertiary-950 duration-300 border border-solid border-transparent [-webkit-text-stroke:0.5px_transparent] peer-checked:pointer-events-none peer-checked:border-[#144495] peer-checked:bg-[#144495]/5 peer-checked:text-[#144495] peer-checked:[-webkit-text-stroke:0.5px_#144495]">
                                                            USD</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="tooltip text-secondary-700 text-3 mt-2 hidden group-[&.error]/form:block">
                                            Lütfen ilgili alanı doldurunuz.</div>
                                    </div>
                                    <div class="form-group grid grid-cols-2 xs:grid-cols-1 gap-2 xs:gap-3 sm:order-4">
                                        <div class="form-el group/form w-full">
                                            <!-- Buraya `error` classı gelince ilgili style değişiyor -->
                                            <div
                                                class="custom-select relative h-22 sm:h-16 bg-white rounded-6 md:rounded-3 px-10 2xl:px-9 xl:px-8 lg:px-7 md:px-6 flex flex-col justify-center border border-solid border-transparent duration-300 group-[&.error]/form:border-secondary-700">
                                            <select name="filter[province]" class="peer w-full h-full text-4 sm:text-3.5 font-semibold text-tertiary-950">
                                                            <option value="" selected disabled>{{ __('general.province') }}</option>
                                                            @foreach($provinces as $province)
                                                            <option @selected($province->id == request('filter.province') ) @click="loadTowns(`{{
                                                                route('province.towns',$province)
                                                                }}`)" value="{{ $province->id }}">{{
                                                                $province->name }}
                                                            </option>

                                                            @endforeach
                                                        </select>
                                                <div
                                                    class="icon icon-chevron-bottom text-3 h-3 lg:text-2.5 lg:h-2.5 block leading-none duration-300 absolute right-10 2xl:right-9 xl:right-8 lg:right-7 md:right-6 top-50/100 -translate-y-1/2 pointer-events-none peer-focus:rotate-180 text-tertiary-950">
                                                </div>
                                            </div>
                                            <div
                                                class="tooltip text-secondary-700 text-3 mt-2 hidden group-[&.error]/form:block">
                                                Lütfen ilgili alanı doldurunuz.</div>
                                        </div>
                                        <div class="form-el group/form w-full">
                                            <!-- Buraya `error` classı gelince ilgili style değişiyor -->
                                            <div
                                                class="custom-select relative h-22 sm:h-16 bg-white rounded-6 md:rounded-3 px-10 2xl:px-9 xl:px-8 lg:px-7 md:px-6 flex flex-col justify-center border border-solid border-transparent duration-300 group-[&.error]/form:border-secondary-700">
                                                      <select name="filter[town]"
                                                        class="peer w-full h-full text-4 sm:text-3.5 font-semibold text-tertiary-950">
                                                        <option value="" selected disabled>{{ __('general.town') }}</option>
<template x-for="town in towns">
    <option :selected="selectedTown == town.id" x-text="town.name" :value="town.id"></option>
</template>
                                                    </select>
                                                <div
                                                    class="icon icon-chevron-bottom text-3 h-3 lg:text-2.5 lg:h-2.5 block leading-none duration-300 absolute right-10 2xl:right-9 xl:right-8 lg:right-7 md:right-6 top-50/100 -translate-y-1/2 pointer-events-none peer-focus:rotate-180 text-tertiary-950">
                                                </div>
                                            </div>
                                            <div
                                                class="tooltip text-secondary-700 text-3 mt-2 hidden group-[&.error]/form:block">
                                                Lütfen ilgili alanı doldurunuz.</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="button-wrapper grid gap-3">
                                    <div class="form-el group/form">
                                        <!-- Buraya `loading` classı gelince ilgili style değişiyor -->
                                        <button
                                            class="button group/button relative flex items-center justify-center gap-4 md:gap-3 duration-300 rounded-5 md:rounded-3 after:absolute after:left-[calc(50%-13px)] xl:after:left-[calc(50%-12px)] md:after:left-[calc(50%-10px)] after:top-[calc(50%-13px)] xl:after:top-[calc(50%-12px)] md:after:top-[calc(50%-10px)] after:h-6.5 xl:after:h-6 md:after:h-5 after:aspect-square after:rounded-full after:border-0.5 after:border-solid after:border-white after:[clip-path:polygon(0%_0%,100%_0%,100%_50%,0%_50%)] after:opacity-0 after:duration-300 after:transition-opacity after:animate-spin group-[&.loading]/form:[&_.icon]:opacity-0 group-[&.loading]/form:[&_.text]:opacity-0 group-[&.loading]/form:after:opacity-100 group-[&.loading]/form:pointer-events-none bg-[#144495] hover:bg-main-700 h-22 md:h-16 w-full text-white font-semibold text-4">
                                            <div
                                                class="text whitespace-nowrap font-medium text-4 md:text-3.5 transition-opacity duration-300">
                                                {{ __('general.search') }}</div>
                                        </button>
                                    </div>
                                    <div class="form-el group/form">
                                        <!-- Buraya `loading` classı gelince ilgili style değişiyor -->
                                        <button
                                        @click="map=1"
                                            class="button group/button relative flex items-center justify-center gap-4 md:gap-3 duration-300 rounded-5 md:rounded-3 after:absolute after:left-[calc(50%-13px)] xl:after:left-[calc(50%-12px)] md:after:left-[calc(50%-10px)] after:top-[calc(50%-13px)] xl:after:top-[calc(50%-12px)] md:after:top-[calc(50%-10px)] after:h-6.5 xl:after:h-6 md:after:h-5 after:aspect-square after:rounded-full after:border-0.5 after:border-solid after:border-white after:[clip-path:polygon(0%_0%,100%_0%,100%_50%,0%_50%)] after:opacity-0 after:duration-300 after:transition-opacity after:animate-spin group-[&.loading]/form:[&_.icon]:opacity-0 group-[&.loading]/form:[&_.text]:opacity-0 group-[&.loading]/form:after:opacity-100 group-[&.loading]/form:pointer-events-none bg-secondary-700 hover:bg-secondary-600 h-22 md:h-16 w-full text-white font-semibold text-4">
                                            <div
                                                class="text whitespace-nowrap font-medium text-4 md:text-3.5 transition-opacity duration-300">
                                                {{ __('general.show_map') }}</div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>

            <section class="content-field py-15 2xl:py-14 xl:py-13 lg:py-12 md:py-11 sm:py-10">
                <div class="wrapper max-w-1440 mx-auto w-full px-7.5 md:px-5">
                    <div class="heading-wrapper flex items-center justify-between gap-7.5 px-7.5 lg:px-5 sm:px-3 mb-7">
                        <div class="text-editor text-editor-main">
                            <!-- .text-editor içerisindeki style attribute değerleri frontendi tasarıma benzetmek adına eklenmiştir, backend aşamasında silinerek panel editöründen tanımlanmalıdır. -->
                            <h3><strong>
                            {{ __('general.projects') }}
                            </strong></h3>
                        </div>
                        <div class="info text-5 2xl:text-4.5 xl:text-4 lg:text-3.5 text-[#888888] fon">{{ __('total') }}: {{ $projects->total() }}</div>
                    </div>
                    @if(request('map') == 1)
                    <div style="margin-bottom: 50px">
                                            @include('admin.portfolios.map_cluster',['locations'=>$locations])
                                        </div>
                                        @endif
                    <div
                        class="list grid grid-cols-3 lg:grid-cols-2 sm:grid-cols-1 gap-x-8 xl:gap-x-7 md:gap-x-6 gap-y-12 xl:gap-y-10 md:gap-y-8 sm:gap-y-6">
                      @foreach($projects as $project)


                        <div
                            class="project p-2.5 bg-white rounded-6 md:rounded-3 border border-solid border-transparent hover:border-[#8AA5D3]/35 duration-300">
                            <a href="{{ route('frontend.project.show',$project) }}"
                                class="image group shadow-s3 block aspect-[17/12] rounded-6 md:rounded-3 overflow-hidden isolate translate-z-0"><img
                                    class="full-cover group-hover:scale-105 duration-450 translate-z-0"
                                    src="{{ $project->images->first()->full_url }}" alt="" loading="lazy"></a>
                            <div class="content-wrapper p-5 lg:p-4 mt-2.5">
                                <a href="{{ route('frontend.project.show',$project) }}"
                                    class="title text-6 2xl:text-5.5 xl:text-5 lg:text-4.5 leading-tight text-tertiary-950 hover:text-main-700 duration-300 font-semibold mb-6 xl:mb-5 md:mb-4 block">
                                    {{ $project->title }}
                                </a>
                                <div class="tags flex flex-wrap items-center gap-4 lg:gap-y-3 sm:gap-y-2">
                                    <div class="item flex items-center gap-2">
                                        <div
                                            class="icon-wrapper w-7.5 aspect-square shrink-0 bg-[#EDF3FE] flex items-center justify-center rounded-full">
                                            <div
                                                class="icon icon-location-1 text-3.5 h-3.5 block leading-none duration-300 text-[#2675FA]">
                                            </div>
                                        </div>
                                        <div class="text text-3.5 font-medium text-tertiary-950/40">
                                            {{ $project->full_address }}
                                        </div>
                                    </div>

                                    <div class="item flex items-center gap-2">
                                        <div
                                            class="icon-wrapper w-7.5 aspect-square shrink-0 bg-[#EDF3FE] flex items-center justify-center rounded-full">
                                            <div
                                                class="icon icon-square-meter-1 text-3.5 h-3.5 block leading-none duration-300 text-[#2675FA]">
                                            </div>
                                        </div>
                                        <div class="text text-3.5 font-medium text-tertiary-950/40">
                                            {{ $project->flats?->first()?->net }}
                                        </div>
                                    </div>
                                </div>
                                <p class="expo text-[#888888] text-4 lg:text-3.5 font-medium mt-6 xl:mt-5 md:mt-4 block">
                                    {{ $project->description }}
                                </p>
                                <div class="info flex items-center justify-between gap-7.5 mt-6 xl:mt-5 md:mt-4">
                                    <div
                                        class="price text-tertiary-950 flex flex-wrap items-center sm:flex-col gap-1 sm:items-start sm:gap-0">
                                        <div
                                            class="value font-semibold text-6 2xl:text-5.5 xl:text-5 lg:text-4.5 md:text-4">
                                            {{ $project->price }} TL</div>
                                        <div class="joint text-4 xl:text-3.5 font-medium">‘{{ __('general.starting_price') }}</div>
                                    </div>
                                    <button
                                        class="button shrink-0 add-favorite group/button relative duration-300 bg-[#EFF5FF] flex items-center justify-center h-10 aspect-square rounded-full hover:border-tertiary-950/30">
                                        <div
                                            class="icon icon-like text-4 h-4 block leading-none duration-300 text-[#DC1C2E]">
                                        </div>
                                        <div
                                            class="icon icon-liked text-4 h-4 block leading-none duration-300 text-[#DC1C2E] absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 opacity-0 group-hover/button:opacity-100 group-[&.favorited]/button:opacity-100">
                                        </div>
                                    </button>
                                </div>
                                <a href="{{ route('frontend.project.show',$project) }}"
                                    class="button group/button flex items-center justify-center gap-4 md:gap-3 duration-300 rounded-5 md:rounded-3 h-16 xl:h-14 md:h-12 w-full px-6 bg-[#F0F2F7] hover:bg-main-100 mt-7.5 xl:mt-6 md:mt-5 text-[#2675FA]">

                                    <div class="text whitespace-nowrap font-medium text-4 md:text-3.5">
                                        {{ __('general.details') }}
                                    </div>

                                </a>
                            </div>
                        </div>

@endforeach

                    </div>
                    {{ $projects->links('vendor.pagination.loca') }}
                </div>
            </section>

        </main>


    </soho-technologies>
@endsection
