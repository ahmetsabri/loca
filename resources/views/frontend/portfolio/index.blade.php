@extends('layouts.frontend')

@section('title', 'RE/MAX LOCA')

@section('content')
<soho-technologies class="block">
    <main class="main-field relative pt-[134px] sm:pt-[124px]">
        <section class="breadcrumb-field px-7.5 md:px-5">
            <div
                class="inner rounded-6 md:rounded-3 relative overflow-hidden isolate translate-z-0 py-28 2xl:py-24 xl:py-20 lg:py-16 md:py-12">
                <div class="background-wrapper absolute left-0 top-0 w-full h-full bg-tertiary-950">
                    <img class="full-cover opacity-15" src="assets/image/photo/3.webp" alt="" loading="lazy">
                </div>
                <div
                    class="wrapper max-w-1440 mx-auto w-full px-7.5 relative z-2 grid gap-6 xl:gap-5 lg:gap-4 sm:gap-3">
                    <h1
                        class="title text-center font-semibold text-white text-11 2xl:text-10 xl:text-8 lg:text-7 md:text-6 sm:text-5.5 tracking-[0.15em] lg:tracking-widest sm:tracking-wider leading-tight">
                        PORTFÖYLERİMİZ</h1>
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
            <div
                class="wrapper max-w-1440 mx-auto w-full px-7.5 md:px-5 grid grid-cols-[minmax(0,215px)_minmax(0,auto)] gap-7 md:grid-cols-1">
                <div class="sidebar-wrapper">
                    <button
                        class="filter-trigger button group/button hidden md:flex items-center justify-center gap-4 md:gap-3 duration-300 rounded-5 md:rounded-3 h-16 xl:h-14 md:h-12 w-full px-8 sm:px-6 bg-main-900 hover:bg-main-950 text-white"
                        data-show-text="Filtreleri Göster" data-hide-text="Filtreleri Gizle">
                        <div class="icon-wrapper relative">
                            <div
                                class="icon icon-filter text-4 h-4 block leading-none duration-300 text-white group-[&.active]/button:-rotate-45 group-[&.active]/button:opacity-0">
                            </div>
                            <div
                                class="icon icon-filter-out text-5 h-5 block leading-none duration-300 text-white absolute left-1/2 top-1/2 -translate-x-45/100 -translate-y-60/100 opacity-0 rotate-45 group-[&.active]/button:opacity-100 group-[&.active]/button:rotate-0">
                            </div>
                        </div>
                        <div class="text whitespace-nowrap font-medium text-4 md:text-3.5">Filtreleri Göster</div>
                    </button>
                    <div
                        class="filter-wrapper sticky-el sticky top-0 duration-300 md:mt-7.5 md:hidden md:[&.active]:block">
                        <div class="sidebar-general-list bg-white rounded-5 md:rounded-3 px-4 py-7">
                            <div class="category-wrapper px-3">
                                <!--<div class="title text-3.5 font-semibold text-tertiary-950 mb-4">Kategoriler</div>
                                    <div class="list-wrapper grid gap-2 px-3 overflow-y-auto overflow-x-hidden max-h-[200px] scrollbar scrollbar-w-1 scrollbar-track-rounded-full scrollbar-thumb-rounded-full scrollbar-track-[#8AA5D3]/24 scrollbar-thumb-[#8AA5D3]/65">
                                        <a href="javascript:void(0)" class="block font-medium text-3.5 text-tertiary-950 duration-300 hover:text-[#2675FA] [&.active]:text-[#2675FA]">Konut</a>
                                        <a href="javascript:void(0)" class="block font-medium text-3.5 text-tertiary-950 duration-300 hover:text-[#2675FA] [&.active]:text-[#2675FA]">Arsa</a>
                                        <a href="javascript:void(0)" class="block font-medium text-3.5 text-tertiary-950 duration-300 hover:text-[#2675FA] [&.active]:text-[#2675FA]">Özel Mülk</a>
                                        <a href="javascript:void(0)" class="block font-medium text-3.5 text-tertiary-950 duration-300 hover:text-[#2675FA] [&.active]:text-[#2675FA]">Tatil Köyü</a>
                                        <a href="javascript:void(0)" class="block font-medium text-3.5 text-tertiary-950 duration-300 hover:text-[#2675FA] [&.active]:text-[#2675FA]">Daire</a>
                                        <a href="javascript:void(0)" class="block font-medium text-3.5 text-tertiary-950 duration-300 hover:text-[#2675FA] [&.active]:text-[#2675FA]">Apartman</a>
                                        <a href="javascript:void(0)" class="block font-medium text-3.5 text-tertiary-950 duration-300 hover:text-[#2675FA] [&.active]:text-[#2675FA]">Tesis</a>
                                        <a href="javascript:void(0)" class="block font-medium text-3.5 text-tertiary-950 duration-300 hover:text-[#2675FA] [&.active]:text-[#2675FA]">Sanayi Bölgesi</a>
                                    </div>-->
                                <div class="heading-wrapper">
                                    <div class="title text-4 text-[#2675FA] duration-300 font-semibold mb-2">Kategoriler
                                    </div>
                                    <div class="location-wrapper hidden [&.active]:block">
                                        <div class="location-list flex items-center gap-2 flex-wrap"></div>
                                        <div class="split w-full h-px bg-[#E8F0FD] mb-5 mt-5"></div>
                                    </div>
                                </div>
                                <div data-level="y0"
                                    class="list hidden [&.active]:grid gap-1 overflow-y-auto overflow-x-hidden max-h-[196px] scrollbar scrollbar-w-1 scrollbar-track-rounded-full scrollbar-thumb-rounded-full scrollbar-track-[#8AA5D3]/24 scrollbar-thumb-[#8AA5D3]/65 active">
                                    <button data-destination-level="s0"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Konut</button>
                                    <button data-destination-level="s1"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Arsa</button>
                                    <button data-destination-level="s2"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Özel
                                        Mülk</button>
                                    <button data-destination-level="s3"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Tatil
                                        Köyü</button>
                                    <button data-destination-level="s4"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Daire</button>
                                    <button data-destination-level="s5"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Apartman</button>
                                    <button data-destination-level="s6"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Tesis</button>
                                    <button data-destination-level="s7"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Sanayi
                                        Bölgesi</button>
                                </div>
                                <div data-level="s0"
                                    class="list hidden [&.active]:grid gap-1 overflow-y-auto overflow-x-hidden max-h-[153px] scrollbar scrollbar-w-1 scrollbar-track-rounded-full scrollbar-thumb-rounded-full scrollbar-track-[#8AA5D3]/24 scrollbar-thumb-[#8AA5D3]/65">
                                    <button data-destination-level="k00"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Satılık</button>
                                    <button data-destination-level="k01"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Kiralık</button>
                                    <button data-destination-level="k02"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Günlük
                                        Kiralık</button>
                                    <button data-destination-level="k03"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Devren
                                        Satılık</button>
                                </div>
                                <div data-level="s1"
                                    class="list hidden [&.active]:grid gap-1 overflow-y-auto overflow-x-hidden max-h-[153px] scrollbar scrollbar-w-1 scrollbar-track-rounded-full scrollbar-thumb-rounded-full scrollbar-track-[#8AA5D3]/24 scrollbar-thumb-[#8AA5D3]/65">
                                    <button data-destination-level="k10"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Satılık</button>
                                    <button data-destination-level="k11"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Kiralık</button>
                                    <button data-destination-level="k12"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Günlük
                                        Kiralık</button>
                                    <button data-destination-level="k13"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Devren
                                        Satılık</button>
                                </div>
                                <div data-level="s2"
                                    class="list hidden [&.active]:grid gap-1 overflow-y-auto overflow-x-hidden max-h-[153px] scrollbar scrollbar-w-1 scrollbar-track-rounded-full scrollbar-thumb-rounded-full scrollbar-track-[#8AA5D3]/24 scrollbar-thumb-[#8AA5D3]/65">
                                    <button data-destination-level="k20"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Satılık</button>
                                    <button data-destination-level="k21"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Kiralık</button>
                                    <button data-destination-level="k22"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Günlük
                                        Kiralık</button>
                                    <button data-destination-level="k23"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Devren
                                        Satılık</button>
                                </div>
                                <div data-level="s3"
                                    class="list hidden [&.active]:grid gap-1 overflow-y-auto overflow-x-hidden max-h-[153px] scrollbar scrollbar-w-1 scrollbar-track-rounded-full scrollbar-thumb-rounded-full scrollbar-track-[#8AA5D3]/24 scrollbar-thumb-[#8AA5D3]/65">
                                    <button data-destination-level="k30"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Satılık</button>
                                    <button data-destination-level="k31"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Kiralık</button>
                                    <button data-destination-level="k32"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Günlük
                                        Kiralık</button>
                                    <button data-destination-level="k33"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Devren
                                        Satılık</button>
                                </div>
                                <div data-level="s4"
                                    class="list hidden [&.active]:grid gap-1 overflow-y-auto overflow-x-hidden max-h-[153px] scrollbar scrollbar-w-1 scrollbar-track-rounded-full scrollbar-thumb-rounded-full scrollbar-track-[#8AA5D3]/24 scrollbar-thumb-[#8AA5D3]/65">
                                    <button data-destination-level="k40"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Satılık</button>
                                    <button data-destination-level="k41"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Kiralık</button>
                                    <button data-destination-level="k42"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Günlük
                                        Kiralık</button>
                                    <button data-destination-level="k43"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Devren
                                        Satılık</button>
                                </div>
                                <div data-level="s5"
                                    class="list hidden [&.active]:grid gap-1 overflow-y-auto overflow-x-hidden max-h-[153px] scrollbar scrollbar-w-1 scrollbar-track-rounded-full scrollbar-thumb-rounded-full scrollbar-track-[#8AA5D3]/24 scrollbar-thumb-[#8AA5D3]/65">
                                    <button data-destination-level="k50"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Satılık</button>
                                    <button data-destination-level="k51"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Kiralık</button>
                                    <button data-destination-level="k52"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Günlük
                                        Kiralık</button>
                                    <button data-destination-level="k53"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Devren
                                        Satılık</button>
                                </div>
                                <div data-level="s6"
                                    class="list hidden [&.active]:grid gap-1 overflow-y-auto overflow-x-hidden max-h-[153px] scrollbar scrollbar-w-1 scrollbar-track-rounded-full scrollbar-thumb-rounded-full scrollbar-track-[#8AA5D3]/24 scrollbar-thumb-[#8AA5D3]/65">
                                    <button data-destination-level="k60"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Satılık</button>
                                    <button data-destination-level="k61"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Kiralık</button>
                                    <button data-destination-level="k62"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Günlük
                                        Kiralık</button>
                                    <button data-destination-level="k63"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Devren
                                        Satılık</button>
                                </div>
                                <div data-level="s7"
                                    class="list hidden [&.active]:grid gap-1 overflow-y-auto overflow-x-hidden max-h-[153px] scrollbar scrollbar-w-1 scrollbar-track-rounded-full scrollbar-thumb-rounded-full scrollbar-track-[#8AA5D3]/24 scrollbar-thumb-[#8AA5D3]/65">
                                    <button data-destination-level="k70"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Satılık</button>
                                    <button data-destination-level="k71"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Kiralık</button>
                                    <button data-destination-level="k72"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Günlük
                                        Kiralık</button>
                                    <button data-destination-level="k73"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Devren
                                        Satılık</button>
                                </div>

                                <div data-level="k00"
                                    class="list hidden [&.active]:grid gap-1 overflow-y-auto overflow-x-hidden max-h-[153px] scrollbar scrollbar-w-1 scrollbar-track-rounded-full scrollbar-thumb-rounded-full scrollbar-track-[#8AA5D3]/24 scrollbar-thumb-[#8AA5D3]/65">
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Daire</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Residence</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Müstakil
                                        Ev</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Villa</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Çiftlik
                                        Evi</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Yalı</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Köşk</a>
                                </div>
                                <div data-level="k01"
                                    class="list hidden [&.active]:grid gap-1 overflow-y-auto overflow-x-hidden max-h-[153px] scrollbar scrollbar-w-1 scrollbar-track-rounded-full scrollbar-thumb-rounded-full scrollbar-track-[#8AA5D3]/24 scrollbar-thumb-[#8AA5D3]/65">
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Daire</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Residence</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Müstakil
                                        Ev</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Villa</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Çiftlik
                                        Evi</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Yalı</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Köşk</a>
                                </div>
                                <div data-level="k02"
                                    class="list hidden [&.active]:grid gap-1 overflow-y-auto overflow-x-hidden max-h-[153px] scrollbar scrollbar-w-1 scrollbar-track-rounded-full scrollbar-thumb-rounded-full scrollbar-track-[#8AA5D3]/24 scrollbar-thumb-[#8AA5D3]/65">
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Daire</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Residence</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Müstakil
                                        Ev</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Villa</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Çiftlik
                                        Evi</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Yalı</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Köşk</a>
                                </div>
                                <div data-level="k03"
                                    class="list hidden [&.active]:grid gap-1 overflow-y-auto overflow-x-hidden max-h-[153px] scrollbar scrollbar-w-1 scrollbar-track-rounded-full scrollbar-thumb-rounded-full scrollbar-track-[#8AA5D3]/24 scrollbar-thumb-[#8AA5D3]/65">
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Daire</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Residence</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Müstakil
                                        Ev</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Villa</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Çiftlik
                                        Evi</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Yalı</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Köşk</a>
                                </div>
                                <div data-level="k10"
                                    class="list hidden [&.active]:grid gap-1 overflow-y-auto overflow-x-hidden max-h-[153px] scrollbar scrollbar-w-1 scrollbar-track-rounded-full scrollbar-thumb-rounded-full scrollbar-track-[#8AA5D3]/24 scrollbar-thumb-[#8AA5D3]/65">
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Daire</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Residence</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Müstakil
                                        Ev</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Villa</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Çiftlik
                                        Evi</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Yalı</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Köşk</a>
                                </div>
                                <div data-level="k11"
                                    class="list hidden [&.active]:grid gap-1 overflow-y-auto overflow-x-hidden max-h-[153px] scrollbar scrollbar-w-1 scrollbar-track-rounded-full scrollbar-thumb-rounded-full scrollbar-track-[#8AA5D3]/24 scrollbar-thumb-[#8AA5D3]/65">
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Daire</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Residence</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Müstakil
                                        Ev</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Villa</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Çiftlik
                                        Evi</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Yalı</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Köşk</a>
                                </div>
                                <div data-level="k12"
                                    class="list hidden [&.active]:grid gap-1 overflow-y-auto overflow-x-hidden max-h-[153px] scrollbar scrollbar-w-1 scrollbar-track-rounded-full scrollbar-thumb-rounded-full scrollbar-track-[#8AA5D3]/24 scrollbar-thumb-[#8AA5D3]/65">
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Daire</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Residence</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Müstakil
                                        Ev</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Villa</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Çiftlik
                                        Evi</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Yalı</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Köşk</a>
                                </div>
                                <div data-level="k13"
                                    class="list hidden [&.active]:grid gap-1 overflow-y-auto overflow-x-hidden max-h-[153px] scrollbar scrollbar-w-1 scrollbar-track-rounded-full scrollbar-thumb-rounded-full scrollbar-track-[#8AA5D3]/24 scrollbar-thumb-[#8AA5D3]/65">
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Daire</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Residence</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Müstakil
                                        Ev</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Villa</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Çiftlik
                                        Evi</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Yalı</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Köşk</a>
                                </div>
                                <div data-level="k20"
                                    class="list hidden [&.active]:grid gap-1 overflow-y-auto overflow-x-hidden max-h-[153px] scrollbar scrollbar-w-1 scrollbar-track-rounded-full scrollbar-thumb-rounded-full scrollbar-track-[#8AA5D3]/24 scrollbar-thumb-[#8AA5D3]/65">
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Daire</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Residence</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Müstakil
                                        Ev</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Villa</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Çiftlik
                                        Evi</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Yalı</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Köşk</a>
                                </div>
                                <div data-level="k21"
                                    class="list hidden [&.active]:grid gap-1 overflow-y-auto overflow-x-hidden max-h-[153px] scrollbar scrollbar-w-1 scrollbar-track-rounded-full scrollbar-thumb-rounded-full scrollbar-track-[#8AA5D3]/24 scrollbar-thumb-[#8AA5D3]/65">
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Daire</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Residence</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Müstakil
                                        Ev</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Villa</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Çiftlik
                                        Evi</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Yalı</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Köşk</a>
                                </div>
                                <div data-level="k22"
                                    class="list hidden [&.active]:grid gap-1 overflow-y-auto overflow-x-hidden max-h-[153px] scrollbar scrollbar-w-1 scrollbar-track-rounded-full scrollbar-thumb-rounded-full scrollbar-track-[#8AA5D3]/24 scrollbar-thumb-[#8AA5D3]/65">
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Daire</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Residence</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Müstakil
                                        Ev</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Villa</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Çiftlik
                                        Evi</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Yalı</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Köşk</a>
                                </div>
                                <div data-level="k23"
                                    class="list hidden [&.active]:grid gap-1 overflow-y-auto overflow-x-hidden max-h-[153px] scrollbar scrollbar-w-1 scrollbar-track-rounded-full scrollbar-thumb-rounded-full scrollbar-track-[#8AA5D3]/24 scrollbar-thumb-[#8AA5D3]/65">
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Daire</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Residence</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Müstakil
                                        Ev</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Villa</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Çiftlik
                                        Evi</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Yalı</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Köşk</a>
                                </div>
                                <div data-level="k30"
                                    class="list hidden [&.active]:grid gap-1 overflow-y-auto overflow-x-hidden max-h-[153px] scrollbar scrollbar-w-1 scrollbar-track-rounded-full scrollbar-thumb-rounded-full scrollbar-track-[#8AA5D3]/24 scrollbar-thumb-[#8AA5D3]/65">
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Daire</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Residence</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Müstakil
                                        Ev</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Villa</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Çiftlik
                                        Evi</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Yalı</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Köşk</a>
                                </div>
                                <div data-level="k31"
                                    class="list hidden [&.active]:grid gap-1 overflow-y-auto overflow-x-hidden max-h-[153px] scrollbar scrollbar-w-1 scrollbar-track-rounded-full scrollbar-thumb-rounded-full scrollbar-track-[#8AA5D3]/24 scrollbar-thumb-[#8AA5D3]/65">
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Daire</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Residence</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Müstakil
                                        Ev</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Villa</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Çiftlik
                                        Evi</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Yalı</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Köşk</a>
                                </div>
                                <div data-level="k32"
                                    class="list hidden [&.active]:grid gap-1 overflow-y-auto overflow-x-hidden max-h-[153px] scrollbar scrollbar-w-1 scrollbar-track-rounded-full scrollbar-thumb-rounded-full scrollbar-track-[#8AA5D3]/24 scrollbar-thumb-[#8AA5D3]/65">
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Daire</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Residence</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Müstakil
                                        Ev</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Villa</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Çiftlik
                                        Evi</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Yalı</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Köşk</a>
                                </div>
                                <div data-level="k33"
                                    class="list hidden [&.active]:grid gap-1 overflow-y-auto overflow-x-hidden max-h-[153px] scrollbar scrollbar-w-1 scrollbar-track-rounded-full scrollbar-thumb-rounded-full scrollbar-track-[#8AA5D3]/24 scrollbar-thumb-[#8AA5D3]/65">
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Daire</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Residence</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Müstakil
                                        Ev</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Villa</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Çiftlik
                                        Evi</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Yalı</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Köşk</a>
                                </div>
                                <div data-level="k40"
                                    class="list hidden [&.active]:grid gap-1 overflow-y-auto overflow-x-hidden max-h-[153px] scrollbar scrollbar-w-1 scrollbar-track-rounded-full scrollbar-thumb-rounded-full scrollbar-track-[#8AA5D3]/24 scrollbar-thumb-[#8AA5D3]/65">
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Daire</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Residence</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Müstakil
                                        Ev</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Villa</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Çiftlik
                                        Evi</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Yalı</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Köşk</a>
                                </div>
                                <div data-level="k41"
                                    class="list hidden [&.active]:grid gap-1 overflow-y-auto overflow-x-hidden max-h-[153px] scrollbar scrollbar-w-1 scrollbar-track-rounded-full scrollbar-thumb-rounded-full scrollbar-track-[#8AA5D3]/24 scrollbar-thumb-[#8AA5D3]/65">
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Daire</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Residence</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Müstakil
                                        Ev</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Villa</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Çiftlik
                                        Evi</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Yalı</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Köşk</a>
                                </div>
                                <div data-level="k42"
                                    class="list hidden [&.active]:grid gap-1 overflow-y-auto overflow-x-hidden max-h-[153px] scrollbar scrollbar-w-1 scrollbar-track-rounded-full scrollbar-thumb-rounded-full scrollbar-track-[#8AA5D3]/24 scrollbar-thumb-[#8AA5D3]/65">
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Daire</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Residence</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Müstakil
                                        Ev</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Villa</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Çiftlik
                                        Evi</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Yalı</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Köşk</a>
                                </div>
                                <div data-level="k43"
                                    class="list hidden [&.active]:grid gap-1 overflow-y-auto overflow-x-hidden max-h-[153px] scrollbar scrollbar-w-1 scrollbar-track-rounded-full scrollbar-thumb-rounded-full scrollbar-track-[#8AA5D3]/24 scrollbar-thumb-[#8AA5D3]/65">
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Daire</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Residence</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Müstakil
                                        Ev</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Villa</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Çiftlik
                                        Evi</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Yalı</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Köşk</a>
                                </div>
                                <div data-level="k50"
                                    class="list hidden [&.active]:grid gap-1 overflow-y-auto overflow-x-hidden max-h-[153px] scrollbar scrollbar-w-1 scrollbar-track-rounded-full scrollbar-thumb-rounded-full scrollbar-track-[#8AA5D3]/24 scrollbar-thumb-[#8AA5D3]/65">
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Daire</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Residence</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Müstakil
                                        Ev</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Villa</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Çiftlik
                                        Evi</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Yalı</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Köşk</a>
                                </div>
                                <div data-level="k51"
                                    class="list hidden [&.active]:grid gap-1 overflow-y-auto overflow-x-hidden max-h-[153px] scrollbar scrollbar-w-1 scrollbar-track-rounded-full scrollbar-thumb-rounded-full scrollbar-track-[#8AA5D3]/24 scrollbar-thumb-[#8AA5D3]/65">
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Daire</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Residence</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Müstakil
                                        Ev</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Villa</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Çiftlik
                                        Evi</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Yalı</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Köşk</a>
                                </div>
                                <div data-level="k52"
                                    class="list hidden [&.active]:grid gap-1 overflow-y-auto overflow-x-hidden max-h-[153px] scrollbar scrollbar-w-1 scrollbar-track-rounded-full scrollbar-thumb-rounded-full scrollbar-track-[#8AA5D3]/24 scrollbar-thumb-[#8AA5D3]/65">
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Daire</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Residence</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Müstakil
                                        Ev</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Villa</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Çiftlik
                                        Evi</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Yalı</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Köşk</a>
                                </div>
                                <div data-level="k53"
                                    class="list hidden [&.active]:grid gap-1 overflow-y-auto overflow-x-hidden max-h-[153px] scrollbar scrollbar-w-1 scrollbar-track-rounded-full scrollbar-thumb-rounded-full scrollbar-track-[#8AA5D3]/24 scrollbar-thumb-[#8AA5D3]/65">
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Daire</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Residence</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Müstakil
                                        Ev</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Villa</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Çiftlik
                                        Evi</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Yalı</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Köşk</a>
                                </div>
                                <div data-level="k60"
                                    class="list hidden [&.active]:grid gap-1 overflow-y-auto overflow-x-hidden max-h-[153px] scrollbar scrollbar-w-1 scrollbar-track-rounded-full scrollbar-thumb-rounded-full scrollbar-track-[#8AA5D3]/24 scrollbar-thumb-[#8AA5D3]/65">
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Daire</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Residence</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Müstakil
                                        Ev</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Villa</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Çiftlik
                                        Evi</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Yalı</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Köşk</a>
                                </div>
                                <div data-level="k61"
                                    class="list hidden [&.active]:grid gap-1 overflow-y-auto overflow-x-hidden max-h-[153px] scrollbar scrollbar-w-1 scrollbar-track-rounded-full scrollbar-thumb-rounded-full scrollbar-track-[#8AA5D3]/24 scrollbar-thumb-[#8AA5D3]/65">
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Daire</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Residence</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Müstakil
                                        Ev</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Villa</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Çiftlik
                                        Evi</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Yalı</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Köşk</a>
                                </div>
                                <div data-level="k62"
                                    class="list hidden [&.active]:grid gap-1 overflow-y-auto overflow-x-hidden max-h-[153px] scrollbar scrollbar-w-1 scrollbar-track-rounded-full scrollbar-thumb-rounded-full scrollbar-track-[#8AA5D3]/24 scrollbar-thumb-[#8AA5D3]/65">
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Daire</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Residence</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Müstakil
                                        Ev</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Villa</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Çiftlik
                                        Evi</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Yalı</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Köşk</a>
                                </div>
                                <div data-level="k63"
                                    class="list hidden [&.active]:grid gap-1 overflow-y-auto overflow-x-hidden max-h-[153px] scrollbar scrollbar-w-1 scrollbar-track-rounded-full scrollbar-thumb-rounded-full scrollbar-track-[#8AA5D3]/24 scrollbar-thumb-[#8AA5D3]/65">
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Daire</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Residence</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Müstakil
                                        Ev</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Villa</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Çiftlik
                                        Evi</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Yalı</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Köşk</a>
                                </div>
                                <div data-level="k70"
                                    class="list hidden [&.active]:grid gap-1 overflow-y-auto overflow-x-hidden max-h-[153px] scrollbar scrollbar-w-1 scrollbar-track-rounded-full scrollbar-thumb-rounded-full scrollbar-track-[#8AA5D3]/24 scrollbar-thumb-[#8AA5D3]/65">
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Daire</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Residence</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Müstakil
                                        Ev</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Villa</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Çiftlik
                                        Evi</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Yalı</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Köşk</a>
                                </div>
                                <div data-level="k71"
                                    class="list hidden [&.active]:grid gap-1 overflow-y-auto overflow-x-hidden max-h-[153px] scrollbar scrollbar-w-1 scrollbar-track-rounded-full scrollbar-thumb-rounded-full scrollbar-track-[#8AA5D3]/24 scrollbar-thumb-[#8AA5D3]/65">
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Daire</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Residence</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Müstakil
                                        Ev</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Villa</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Çiftlik
                                        Evi</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Yalı</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Köşk</a>
                                </div>
                                <div data-level="k72"
                                    class="list hidden [&.active]:grid gap-1 overflow-y-auto overflow-x-hidden max-h-[153px] scrollbar scrollbar-w-1 scrollbar-track-rounded-full scrollbar-thumb-rounded-full scrollbar-track-[#8AA5D3]/24 scrollbar-thumb-[#8AA5D3]/65">
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Daire</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Residence</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Müstakil
                                        Ev</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Villa</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Çiftlik
                                        Evi</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Yalı</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Köşk</a>
                                </div>
                                <div data-level="k73"
                                    class="list hidden [&.active]:grid gap-1 overflow-y-auto overflow-x-hidden max-h-[153px] scrollbar scrollbar-w-1 scrollbar-track-rounded-full scrollbar-thumb-rounded-full scrollbar-track-[#8AA5D3]/24 scrollbar-thumb-[#8AA5D3]/65">
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Daire</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Residence</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Müstakil
                                        Ev</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Villa</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Çiftlik
                                        Evi</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Yalı</a>
                                    <a href="javascript:void(0)"
                                        class="text-tertiary-950 text-3.5 w-fit font-medium draw-underline [--line-color:#0D1523] block">Köşk</a>
                                </div>
                            </div>
                            <div class="address-wrapper mt-6">
                                <div class="title text-3.5 font-semibold text-tertiary-950 mb-4 px-3">Adres</div>
                                <div class="form-wrapper grid gap-2">
                                    <div class="form-el group/form relative w-full">
                                        <!-- Buraya `error` classı gelince ilgili style değişiyor -->
                                        <select
                                            class="peer w-full h-11 duration-300 rounded-2.5 px-5 bg-bodyColor placeholder:text-[#6D6D6D] text-tertiary-950 font-medium text-3.5 border border-solid border-[#8AA5D3]/15 hover:border-[#8AA5D3]/30 focus:border-main-700 group-[&.error]/form:border-secondary-700 invalid:!text-[#6D6D6D]"
                                            required>
                                            <option value="" disabled selected>Ülke</option>
                                            <option value="">Opsiyon 1</option>
                                            <option value="">Opsiyon 2</option>
                                            <option value="">Opsiyon 3</option>
                                        </select>
                                        <div
                                            class="icon icon-chevron-bottom text-2 h-2 block leading-none duration-300 text-[#6D6D6D] pointer-events-none absolute right-5 top-4.5 peer-focus:rotate-180">
                                        </div>
                                        <div
                                            class="tooltip text-secondary-700 text-3 mt-2 hidden group-[&.error]/form:block">
                                            Lütfen ilgili alanı doldurunuz.</div>
                                    </div>
                                    <div class="form-el group/form relative w-full">
                                        <!-- Buraya `error` classı gelince ilgili style değişiyor -->
                                        <select
                                            class="peer w-full h-11 duration-300 rounded-2.5 px-5 bg-bodyColor placeholder:text-[#6D6D6D] text-tertiary-950 font-medium text-3.5 border border-solid border-[#8AA5D3]/15 hover:border-[#8AA5D3]/30 focus:border-main-700 group-[&.error]/form:border-secondary-700 invalid:!text-[#6D6D6D]"
                                            required>
                                            <option value="" disabled selected>İl</option>
                                            <option value="">Opsiyon 1</option>
                                            <option value="">Opsiyon 2</option>
                                            <option value="">Opsiyon 3</option>
                                        </select>
                                        <div
                                            class="icon icon-chevron-bottom text-2 h-2 block leading-none duration-300 text-[#6D6D6D] pointer-events-none absolute right-5 top-4.5 peer-focus:rotate-180">
                                        </div>
                                        <div
                                            class="tooltip text-secondary-700 text-3 mt-2 hidden group-[&.error]/form:block">
                                            Lütfen ilgili alanı doldurunuz.</div>
                                    </div>
                                    <div class="form-el group/form relative w-full">
                                        <!-- Buraya `error` classı gelince ilgili style değişiyor -->
                                        <select
                                            class="peer w-full h-11 duration-300 rounded-2.5 px-5 bg-bodyColor placeholder:text-[#6D6D6D] text-tertiary-950 font-medium text-3.5 border border-solid border-[#8AA5D3]/15 hover:border-[#8AA5D3]/30 focus:border-main-700 group-[&.error]/form:border-secondary-700 invalid:!text-[#6D6D6D]"
                                            required>
                                            <option value="" disabled selected>İlçe</option>
                                            <option value="">Opsiyon 1</option>
                                            <option value="">Opsiyon 2</option>
                                            <option value="">Opsiyon 3</option>
                                        </select>
                                        <div
                                            class="icon icon-chevron-bottom text-2 h-2 block leading-none duration-300 text-[#6D6D6D] pointer-events-none absolute right-5 top-4.5 peer-focus:rotate-180">
                                        </div>
                                        <div
                                            class="tooltip text-secondary-700 text-3 mt-2 hidden group-[&.error]/form:block">
                                            Lütfen ilgili alanı doldurunuz.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="price-wrapper mt-6">
                                <div class="title text-3.5 font-semibold text-tertiary-950 mb-4 px-3">Fiyat</div>
                                <div
                                    class="custom-radio-group flex items-center gap-2 mb-2 xs:justify-center border border-solid border-[#8AA5D3]/15 rounded-2">
                                    <div class="custom-radio relative w-full">
                                        <input type="radio" name="r1"
                                            class="peer absolute left-0 top-0 w-full h-full opacity-0 cursor-pointer"
                                            checked>
                                        <div
                                            class="box text-3.5 md:text-3 font-medium w-full h-9 rounded-2 flex items-center justify-center text-[#888888] peer-hover:text-tertiary-950 duration-300 border border-solid border-transparent [-webkit-text-stroke:0.5px_transparent] peer-checked:pointer-events-none peer-checked:border-[#144495] peer-checked:bg-[#144495]/5 peer-checked:text-[#144495] peer-checked:[-webkit-text-stroke:0.5px_#144495]">
                                            TRY</div>
                                    </div>
                                    <div class="custom-radio relative w-full">
                                        <input type="radio" name="r1"
                                            class="peer absolute left-0 top-0 w-full h-full opacity-0 cursor-pointer">
                                        <div
                                            class="box text-3.5 md:text-3 font-medium w-full h-9 rounded-2 flex items-center justify-center text-[#888888] peer-hover:text-tertiary-950 duration-300 border border-solid border-transparent [-webkit-text-stroke:0.5px_transparent] peer-checked:pointer-events-none peer-checked:border-[#144495] peer-checked:bg-[#144495]/5 peer-checked:text-[#144495] peer-checked:[-webkit-text-stroke:0.5px_#144495]">
                                            EUR</div>
                                    </div>
                                    <div class="custom-radio relative w-full">
                                        <input type="radio" name="r1"
                                            class="peer absolute left-0 top-0 w-full h-full opacity-0 cursor-pointer">
                                        <div
                                            class="box text-3.5 md:text-3 font-medium w-full h-9 rounded-2 flex items-center justify-center text-[#888888] peer-hover:text-tertiary-950 duration-300 border border-solid border-transparent [-webkit-text-stroke:0.5px_transparent] peer-checked:pointer-events-none peer-checked:border-[#144495] peer-checked:bg-[#144495]/5 peer-checked:text-[#144495] peer-checked:[-webkit-text-stroke:0.5px_#144495]">
                                            USD</div>
                                    </div>
                                </div>
                                <div class="form-wrapper flex items-center gap-2">
                                    <div class="form-el relative group/form w-full">
                                        <!-- Buraya `error` classı gelince ilgili style değişiyor -->
                                        <input type="" placeholder="min TL"
                                            class="w-full h-11 duration-300 rounded-2.5 px-5 bg-bodyColor placeholder:text-[#6D6D6D] text-tertiary-950 font-medium text-3.5 border border-solid border-[#8AA5D3]/15 hover:border-[#8AA5D3]/30 focus:border-main-700 group-[&.error]/form:border-secondary-700">

                                        <div
                                            class="tooltip text-secondary-700 text-3 mt-2 hidden group-[&.error]/form:block">
                                            Lütfen ilgili alanı doldurunuz.</div>
                                    </div>
                                    <div class="form-el relative group/form w-full">
                                        <!-- Buraya `error` classı gelince ilgili style değişiyor -->
                                        <input type="" placeholder="max TL"
                                            class="w-full h-11 duration-300 rounded-2.5 px-5 bg-bodyColor placeholder:text-[#6D6D6D] text-tertiary-950 font-medium text-3.5 border border-solid border-[#8AA5D3]/15 hover:border-[#8AA5D3]/30 focus:border-main-700 group-[&.error]/form:border-secondary-700">

                                        <div
                                            class="tooltip text-secondary-700 text-3 mt-2 hidden group-[&.error]/form:block">
                                            Lütfen ilgili alanı doldurunuz.</div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="checkbox-wrapper border border-solid border-[#8AA5D3]/15 bg-[#F2F8FD] rounded-2.5 mt-6 p-5">
                                <div class="title text-3.5 font-semibold text-tertiary-950 mb-4">Örnek Select</div>
                                <div
                                    class="list-wrapper grid gap-2.5 overflow-x-hidden overflow-y-auto max-h-[135px] scrollbar scrollbar-w-1 scrollbar-track-rounded-full scrollbar-thumb-rounded-full scrollbar-track-[#8AA5D3]/24 scrollbar-thumb-[#8AA5D3]/65">
                                    <div class="custom-checkbox relative flex items-center gap-2.5">
                                        <input type="checkbox"
                                            class="peer absolute left-0 top-0 w-full h-full z-2 cursor-pointer opacity-0">
                                        <div
                                            class="box relative duration-300 w-4 aspect-square shrink-0 rounded-0.75 bg-white border border-solid border-[#8AA5D3]/50 before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:w-65/100 before:aspect-square before:rounded-0.5 before:bg-main-700 before:duration-300 before:pointer-events-none before:opacity-0 peer-hover:border-main-700 peer-checked:border-main-700 peer-checked:before:opacity-100">
                                        </div>
                                        <div
                                            class="text leading-tight duration-300 text-3.5 font-medium text-tertiary-950 [-webkit-text-stroke:0.5px_transparent] peer-checked:text-[#2675FA] peer-checked:[-webkit-text-stroke:0.5px_#2675FA]">
                                            Toplu Konut</div>
                                    </div>
                                    <div class="custom-checkbox relative flex items-center gap-2.5">
                                        <input type="checkbox"
                                            class="peer absolute left-0 top-0 w-full h-full z-2 cursor-pointer opacity-0">
                                        <div
                                            class="box relative duration-300 w-4 aspect-square shrink-0 rounded-0.75 bg-white border border-solid border-[#8AA5D3]/50 before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:w-65/100 before:aspect-square before:rounded-0.5 before:bg-main-700 before:duration-300 before:pointer-events-none before:opacity-0 peer-hover:border-main-700 peer-checked:border-main-700 peer-checked:before:opacity-100">
                                        </div>
                                        <div
                                            class="text leading-tight duration-300 text-3.5 font-medium text-tertiary-950 [-webkit-text-stroke:0.5px_transparent] peer-checked:text-[#2675FA] peer-checked:[-webkit-text-stroke:0.5px_#2675FA]">
                                            Turizm</div>
                                    </div>
                                    <div class="custom-checkbox relative flex items-center gap-2.5">
                                        <input type="checkbox"
                                            class="peer absolute left-0 top-0 w-full h-full z-2 cursor-pointer opacity-0">
                                        <div
                                            class="box relative duration-300 w-4 aspect-square shrink-0 rounded-0.75 bg-white border border-solid border-[#8AA5D3]/50 before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:w-65/100 before:aspect-square before:rounded-0.5 before:bg-main-700 before:duration-300 before:pointer-events-none before:opacity-0 peer-hover:border-main-700 peer-checked:border-main-700 peer-checked:before:opacity-100">
                                        </div>
                                        <div
                                            class="text leading-tight duration-300 text-3.5 font-medium text-tertiary-950 [-webkit-text-stroke:0.5px_transparent] peer-checked:text-[#2675FA] peer-checked:[-webkit-text-stroke:0.5px_#2675FA]">
                                            Turizm + Ticari</div>
                                    </div>
                                    <div class="custom-checkbox relative flex items-center gap-2.5">
                                        <input type="checkbox"
                                            class="peer absolute left-0 top-0 w-full h-full z-2 cursor-pointer opacity-0">
                                        <div
                                            class="box relative duration-300 w-4 aspect-square shrink-0 rounded-0.75 bg-white border border-solid border-[#8AA5D3]/50 before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:w-65/100 before:aspect-square before:rounded-0.5 before:bg-main-700 before:duration-300 before:pointer-events-none before:opacity-0 peer-hover:border-main-700 peer-checked:border-main-700 peer-checked:before:opacity-100">
                                        </div>
                                        <div
                                            class="text leading-tight duration-300 text-3.5 font-medium text-tertiary-950 [-webkit-text-stroke:0.5px_transparent] peer-checked:text-[#2675FA] peer-checked:[-webkit-text-stroke:0.5px_#2675FA]">
                                            Villa</div>
                                    </div>
                                    <div class="custom-checkbox relative flex items-center gap-2.5">
                                        <input type="checkbox"
                                            class="peer absolute left-0 top-0 w-full h-full z-2 cursor-pointer opacity-0">
                                        <div
                                            class="box relative duration-300 w-4 aspect-square shrink-0 rounded-0.75 bg-white border border-solid border-[#8AA5D3]/50 before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:w-65/100 before:aspect-square before:rounded-0.5 before:bg-main-700 before:duration-300 before:pointer-events-none before:opacity-0 peer-hover:border-main-700 peer-checked:border-main-700 peer-checked:before:opacity-100">
                                        </div>
                                        <div
                                            class="text leading-tight duration-300 text-3.5 font-medium text-tertiary-950 [-webkit-text-stroke:0.5px_transparent] peer-checked:text-[#2675FA] peer-checked:[-webkit-text-stroke:0.5px_#2675FA]">
                                            Zeytinlik</div>
                                    </div>
                                    <div class="custom-checkbox relative flex items-center gap-2.5">
                                        <input type="checkbox"
                                            class="peer absolute left-0 top-0 w-full h-full z-2 cursor-pointer opacity-0">
                                        <div
                                            class="box relative duration-300 w-4 aspect-square shrink-0 rounded-0.75 bg-white border border-solid border-[#8AA5D3]/50 before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:w-65/100 before:aspect-square before:rounded-0.5 before:bg-main-700 before:duration-300 before:pointer-events-none before:opacity-0 peer-hover:border-main-700 peer-checked:border-main-700 peer-checked:before:opacity-100">
                                        </div>
                                        <div
                                            class="text leading-tight duration-300 text-3.5 font-medium text-tertiary-950 [-webkit-text-stroke:0.5px_transparent] peer-checked:text-[#2675FA] peer-checked:[-webkit-text-stroke:0.5px_#2675FA]">
                                            Arsa</div>
                                    </div>
                                    <div class="custom-checkbox relative flex items-center gap-2.5">
                                        <input type="checkbox"
                                            class="peer absolute left-0 top-0 w-full h-full z-2 cursor-pointer opacity-0">
                                        <div
                                            class="box relative duration-300 w-4 aspect-square shrink-0 rounded-0.75 bg-white border border-solid border-[#8AA5D3]/50 before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:w-65/100 before:aspect-square before:rounded-0.5 before:bg-main-700 before:duration-300 before:pointer-events-none before:opacity-0 peer-hover:border-main-700 peer-checked:border-main-700 peer-checked:before:opacity-100">
                                        </div>
                                        <div
                                            class="text leading-tight duration-300 text-3.5 font-medium text-tertiary-950 [-webkit-text-stroke:0.5px_transparent] peer-checked:text-[#2675FA] peer-checked:[-webkit-text-stroke:0.5px_#2675FA]">
                                            Toplu Konut</div>
                                    </div>
                                    <div class="custom-checkbox relative flex items-center gap-2.5">
                                        <input type="checkbox"
                                            class="peer absolute left-0 top-0 w-full h-full z-2 cursor-pointer opacity-0">
                                        <div
                                            class="box relative duration-300 w-4 aspect-square shrink-0 rounded-0.75 bg-white border border-solid border-[#8AA5D3]/50 before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:w-65/100 before:aspect-square before:rounded-0.5 before:bg-main-700 before:duration-300 before:pointer-events-none before:opacity-0 peer-hover:border-main-700 peer-checked:border-main-700 peer-checked:before:opacity-100">
                                        </div>
                                        <div
                                            class="text leading-tight duration-300 text-3.5 font-medium text-tertiary-950 [-webkit-text-stroke:0.5px_transparent] peer-checked:text-[#2675FA] peer-checked:[-webkit-text-stroke:0.5px_#2675FA]">
                                            Turizm</div>
                                    </div>
                                    <div class="custom-checkbox relative flex items-center gap-2.5">
                                        <input type="checkbox"
                                            class="peer absolute left-0 top-0 w-full h-full z-2 cursor-pointer opacity-0">
                                        <div
                                            class="box relative duration-300 w-4 aspect-square shrink-0 rounded-0.75 bg-white border border-solid border-[#8AA5D3]/50 before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:w-65/100 before:aspect-square before:rounded-0.5 before:bg-main-700 before:duration-300 before:pointer-events-none before:opacity-0 peer-hover:border-main-700 peer-checked:border-main-700 peer-checked:before:opacity-100">
                                        </div>
                                        <div
                                            class="text leading-tight duration-300 text-3.5 font-medium text-tertiary-950 [-webkit-text-stroke:0.5px_transparent] peer-checked:text-[#2675FA] peer-checked:[-webkit-text-stroke:0.5px_#2675FA]">
                                            Turizm + Ticari</div>
                                    </div>
                                    <div class="custom-checkbox relative flex items-center gap-2.5">
                                        <input type="checkbox"
                                            class="peer absolute left-0 top-0 w-full h-full z-2 cursor-pointer opacity-0">
                                        <div
                                            class="box relative duration-300 w-4 aspect-square shrink-0 rounded-0.75 bg-white border border-solid border-[#8AA5D3]/50 before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:w-65/100 before:aspect-square before:rounded-0.5 before:bg-main-700 before:duration-300 before:pointer-events-none before:opacity-0 peer-hover:border-main-700 peer-checked:border-main-700 peer-checked:before:opacity-100">
                                        </div>
                                        <div
                                            class="text leading-tight duration-300 text-3.5 font-medium text-tertiary-950 [-webkit-text-stroke:0.5px_transparent] peer-checked:text-[#2675FA] peer-checked:[-webkit-text-stroke:0.5px_#2675FA]">
                                            Villa</div>
                                    </div>
                                    <div class="custom-checkbox relative flex items-center gap-2.5">
                                        <input type="checkbox"
                                            class="peer absolute left-0 top-0 w-full h-full z-2 cursor-pointer opacity-0">
                                        <div
                                            class="box relative duration-300 w-4 aspect-square shrink-0 rounded-0.75 bg-white border border-solid border-[#8AA5D3]/50 before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:w-65/100 before:aspect-square before:rounded-0.5 before:bg-main-700 before:duration-300 before:pointer-events-none before:opacity-0 peer-hover:border-main-700 peer-checked:border-main-700 peer-checked:before:opacity-100">
                                        </div>
                                        <div
                                            class="text leading-tight duration-300 text-3.5 font-medium text-tertiary-950 [-webkit-text-stroke:0.5px_transparent] peer-checked:text-[#2675FA] peer-checked:[-webkit-text-stroke:0.5px_#2675FA]">
                                            Zeytinlik</div>
                                    </div>
                                    <div class="custom-checkbox relative flex items-center gap-2.5">
                                        <input type="checkbox"
                                            class="peer absolute left-0 top-0 w-full h-full z-2 cursor-pointer opacity-0">
                                        <div
                                            class="box relative duration-300 w-4 aspect-square shrink-0 rounded-0.75 bg-white border border-solid border-[#8AA5D3]/50 before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:w-65/100 before:aspect-square before:rounded-0.5 before:bg-main-700 before:duration-300 before:pointer-events-none before:opacity-0 peer-hover:border-main-700 peer-checked:border-main-700 peer-checked:before:opacity-100">
                                        </div>
                                        <div
                                            class="text leading-tight duration-300 text-3.5 font-medium text-tertiary-950 [-webkit-text-stroke:0.5px_transparent] peer-checked:text-[#2675FA] peer-checked:[-webkit-text-stroke:0.5px_#2675FA]">
                                            Arsa</div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="radio-wrapper border border-solid border-[#8AA5D3]/15 bg-[#F2F8FD] rounded-2.5 mt-3 p-5">
                                <div class="title text-3.5 font-semibold text-tertiary-950 mb-4">Tekli Select</div>
                                <div
                                    class="list-wrapper grid gap-2.5 overflow-x-hidden overflow-y-auto max-h-[135px] scrollbar scrollbar-w-1 scrollbar-track-rounded-full scrollbar-thumb-rounded-full scrollbar-track-[#8AA5D3]/24 scrollbar-thumb-[#8AA5D3]/65">
                                    <div class="custom-checkbox relative flex items-center gap-2.5">
                                        <input type="radio" name="q1"
                                            class="peer absolute left-0 top-0 w-full h-full z-2 cursor-pointer opacity-0">
                                        <div
                                            class="box relative duration-300 w-4 aspect-square shrink-0 rounded-full bg-white border border-solid border-[#8AA5D3]/50 before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:w-65/100 before:aspect-square before:rounded-full before:bg-main-700 before:duration-300 before:pointer-events-none before:opacity-0 peer-hover:border-main-700 peer-checked:border-main-700 peer-checked:before:opacity-100">
                                        </div>
                                        <div
                                            class="text leading-tight duration-300 text-3.5 font-medium text-tertiary-950 [-webkit-text-stroke:0.5px_transparent] peer-checked:text-[#2675FA] peer-checked:[-webkit-text-stroke:0.5px_#2675FA]">
                                            Toplu Konut</div>
                                    </div>
                                    <div class="custom-checkbox relative flex items-center gap-2.5">
                                        <input type="radio" name="q1"
                                            class="peer absolute left-0 top-0 w-full h-full z-2 cursor-pointer opacity-0">
                                        <div
                                            class="box relative duration-300 w-4 aspect-square shrink-0 rounded-full bg-white border border-solid border-[#8AA5D3]/50 before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:w-65/100 before:aspect-square before:rounded-full before:bg-main-700 before:duration-300 before:pointer-events-none before:opacity-0 peer-hover:border-main-700 peer-checked:border-main-700 peer-checked:before:opacity-100">
                                        </div>
                                        <div
                                            class="text leading-tight duration-300 text-3.5 font-medium text-tertiary-950 [-webkit-text-stroke:0.5px_transparent] peer-checked:text-[#2675FA] peer-checked:[-webkit-text-stroke:0.5px_#2675FA]">
                                            Turizm</div>
                                    </div>
                                    <div class="custom-checkbox relative flex items-center gap-2.5">
                                        <input type="radio" name="q1"
                                            class="peer absolute left-0 top-0 w-full h-full z-2 cursor-pointer opacity-0">
                                        <div
                                            class="box relative duration-300 w-4 aspect-square shrink-0 rounded-full bg-white border border-solid border-[#8AA5D3]/50 before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:w-65/100 before:aspect-square before:rounded-full before:bg-main-700 before:duration-300 before:pointer-events-none before:opacity-0 peer-hover:border-main-700 peer-checked:border-main-700 peer-checked:before:opacity-100">
                                        </div>
                                        <div
                                            class="text leading-tight duration-300 text-3.5 font-medium text-tertiary-950 [-webkit-text-stroke:0.5px_transparent] peer-checked:text-[#2675FA] peer-checked:[-webkit-text-stroke:0.5px_#2675FA]">
                                            Turizm + Ticari</div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="radio-wrapper border border-solid border-[#8AA5D3]/15 bg-[#F2F8FD] rounded-2.5 mt-3 p-5">
                                <div class="title text-3.5 font-semibold text-tertiary-950 mb-4">Kelime ile filtrele
                                </div>
                                <div class="form-el relative group/form w-full mb-2">
                                    <!-- Buraya `error` classı gelince ilgili style değişiyor -->
                                    <input type="" placeholder="kelime"
                                        class="w-full h-11 duration-300 rounded-2.5 px-5 bg-white placeholder:text-[#6D6D6D] text-tertiary-950 font-medium text-3.5 border border-solid border-[#8AA5D3]/15 hover:border-[#8AA5D3]/30 focus:border-main-700 group-[&.error]/form:border-secondary-700">

                                    <div
                                        class="tooltip text-secondary-700 text-3 mt-2 hidden group-[&.error]/form:block">
                                        Lütfen ilgili alanı doldurunuz.</div>
                                </div>
                                <div class="form-el group/form w-full">
                                    <!-- Buraya `error` classı gelince ilgili style değişiyor -->
                                    <div class="custom-input relative flex items-center gap-2">
                                        <input type="checkbox"
                                            class="opacity-0 absolute left-0 top-0 w-full h-full peer z-2 cursor-pointer">
                                        <div
                                            class="box relative duration-300 w-4 aspect-square shrink-0 bg-white rounded-0.75 border border-solid border-[#8AA5D3]/30 before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:w-65/100 before:aspect-square before:rounded-0.5 before:bg-main-700 before:duration-300 before:pointer-events-none before:opacity-0 peer-hover:border-main-700 peer-checked:border-main-700 peer-checked:before:opacity-100">
                                        </div>
                                        <div class="text text-tertiary-950 text-3 leading-tight font-medium">ilan
                                            açıklamalarını dahil et</div>
                                    </div>
                                    <div
                                        class="tooltip text-secondary-700 text-3 mt-2 hidden group-[&.error]/form:block">
                                        Lütfen ilgili alanı doldurunuz.</div>
                                </div>
                            </div>
                        </div>
                        <div class="form-el group/form w-full sticky bottom-6 mt-7.5">
                            <!-- Buraya `loading` classı gelince ilgili style değişiyor -->
                            <button
                                class="button group/button relative flex items-center justify-center gap-4 md:gap-3 duration-300 rounded-5 md:rounded-3 after:absolute after:left-[calc(50%-13px)] xl:after:left-[calc(50%-12px)] md:after:left-[calc(50%-10px)] after:top-[calc(50%-13px)] xl:after:top-[calc(50%-12px)] md:after:top-[calc(50%-10px)] after:h-6.5 xl:after:h-6 md:after:h-5 after:aspect-square after:rounded-full after:border-0.5 after:border-solid after:border-white after:[clip-path:polygon(0%_0%,100%_0%,100%_50%,0%_50%)] after:opacity-0 after:duration-300 after:transition-opacity after:animate-spin group-[&.loading]/form:[&_.icon]:opacity-0 group-[&.loading]/form:[&_.text]:opacity-0 group-[&.loading]/form:after:opacity-100 group-[&.loading]/form:pointer-events-none h-16 xl:h-14 md:h-12 w-full px-8 sm:px-6 bg-secondary-700 hover:bg-secondary-600 text-white">
                                <div
                                    class="text whitespace-nowrap font-medium text-4 md:text-3.5 transition-opacity duration-300">
                                    Arama Yap</div>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="content-wrapper">
                    <div
                        class="heading-wrapper flex items-center justify-between sm:flex-col sm:gap-4 gap-7.5 px-2 mb-5">
                        <div class="text font-medium text-tertiary-950 text-3.5 sm:text-center"><strong>“Pendik Satılık
                                Arsa”</strong> aramanızda <strong>343</strong> ilan bulundu.</div>
                        <div class="tools-wrapper">
                            <div class="view-wrapper flex items-center gap-3">
                                <div class="text text-3 font-medium text-[#6D6D6D]">Görünüm</div>
                                <div class="options flex items-center shrink-0">
                                    <a href="{{ request()->fullUrlWithQuery(['grid_type'=>'list']) }}"
                                        class="item text-[#8AA5D3] h-10 flex items-center justify-center border border-solid border-[#8AA5D3]/30 bg-[#F2F8FD] px-3 rounded-bl-2 rounded-tl-2 hover:border-[#8AA5D3] hover:text-[#2675FA] duration-300 [&.active]:pointer-events-none [&.active]:text-white [&.active]:bg-[#2675FA] [&.active]:border-[#2675FA] @if(request()->query('grid_type') == 'list') active @endif ">
                                        <div class="icon icon-row text-5 h-5 block leading-none
                                         "></div>
                                    </a>
                                    <a href="{{ request()->fullUrlWithQuery(['grid_type'=>'grid']) }}"
                                        class="item text-[#8AA5D3] h-10 flex items-center justify-center border border-solid border-[#8AA5D3]/30 bg-[#F2F8FD] px-3 rounded-br-2 rounded-tr-2 hover:border-[#8AA5D3] hover:text-[#2675FA] duration-300 [&.active]:pointer-events-none [&.active]:text-white [&.active]:bg-[#2675FA] [&.active]:border-[#2675FA]
                                         @if(request()->query('grid_type') == 'grid') active @endif">
                                        <div class="icon icon-grid text-5 h-5 block leading-none"></div>
                                    </a>
                                </div>
                                <div class="order-select relative w-[145px] sm:w-[130px]">
                                    <select
                                        class="peer duration-300 w-full block h-10 bg-white border border-solid border-[#8AA5D3]/15 rounded-2 px-5 text-3.5 font-semibold text-[#6D6D6D] hover:border-[#8AA5D3]/50 focus:border-[#8AA5D3]/50">
                                        <option value="" selected disabled>Sıralama</option>
                                        <option value="Opsiyon1">Opsiyon1</option>
                                        <option value="Opsiyon2">Opsiyon2</option>
                                        <option value="Opsiyon3">Opsiyon3</option>
                                    </select>
                                    <div
                                        class="icon icon-chevron-bottom text-2 h-2 block leading-none duration-300 text-[#6D6D6D] pointer-events-none absolute right-5 top-1/2 -translate-y-1/2 peer-focus:rotate-180">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if(request()->query('grid_type') == 'list')
                    <div class="list-wrapper grid grid-cols-1 gap-6">
                        @foreach($portfolios as $portfolio)
                        <div
                                    class="portfolio group/item grid grid-cols-[minmax(0,300px)_minmax(0,auto)_minmax(0,40px)] gap-9 sm:gap-0 sm:grid-cols-1 items-center p-2.5 sm:p-2.5 pr-11 bg-white rounded-6 md:rounded-3 border border-solid border-transparent hover:border-[#8AA5D3]/35 duration-300">
                                    <div class="carousel-wrapper w-full">
                                        <div
                                            class="portfolio-images-carousel w-full relative swiper !h-auto shadow-s3 rounded-6 md:rounded-3 overflow-hidden isolate">
                                            <div class="swiper-wrapper !h-auto">

                                                @foreach($portfolio->images as $image)


                                                <div class="swiper-slide">
                                                    <a href="portfolio-detail.html"
                                                        class="image group block aspect-[36/25] overflow-hidden isolate translate-z-0"><img
                                                            class="full-cover group-hover:scale-105 duration-450 translate-z-0 pointer-events-none"
                                                            src="{{ $image->full_url }}" alt="" loading="lazy"></a>
                                                </div>

@endforeach
                                            </div>
                                            <div
                                                class="portfolio-images-next flex items-center justify-center cursor-pointer z-5 absolute right-5.5 top-1/2 -translate-y-1/2 w-7 aspect-square rounded-full bg-white text-tertiary-950 [&:not(.swiper-button-disabled):hover]:bg-main-700 [&:not(.swiper-button-disabled):hover]:text-white duration-300 [&.swiper-button-disabled]:cursor-default min-lg:opacity-0 min-lg:pointer-events-none min-lg:group-hover/item:opacity-100 min-lg:group-hover/item:pointer-events-auto">
                                                <div class="icon icon-chevron-right text-2 h-2 block leading-none"></div>
                                            </div>
                                            <div
                                                class="portfolio-images-prev flex items-center justify-center cursor-pointer z-5 absolute left-5.5 top-1/2 -translate-y-1/2 w-7 aspect-square rounded-full bg-white text-tertiary-950 [&:not(.swiper-button-disabled):hover]:bg-main-700 [&:not(.swiper-button-disabled):hover]:text-white duration-300 [&.swiper-button-disabled]:cursor-default min-lg:opacity-0 min-lg:pointer-events-none min-lg:group-hover/item:opacity-100 min-lg:group-hover/item:pointer-events-auto">
                                                <div class="icon icon-chevron-left text-2 h-2 block leading-none"></div>
                                            </div>
                                            <div
                                                class="portfolio-images-pagination duration-300 !flex items-center justify-center gap-3 absolute !left-1/2 -translate-x-1/2 !bottom-5.5 z-5 !w-fit !right-auto !top-auto [&_span]:w-2 [&_span]:h-2 [&_span]:!m-0 [&_span]:!p-0 [&_span]:opacity-100 [&_span]:bg-white/40 [&_span:hover]:bg-white [&_span]:duration-300 [&_span.swiper-pagination-bullet-active]:pointer-events-none [&_span.swiper-pagination-bullet-active]:bg-white min-lg:opacity-0 min-lg:pointer-events-none min-lg:group-hover/item:opacity-100 min-lg:group-hover/item:pointer-events-auto">
                                            </div>
                                            <div
                                                class="tag absolute left-4 top-4 bg-tertiary-950/50 rounded-2 px-2 py-1.5 text-white text-3 font-medium leading-none z-5 capitalize">
{{ $portfolio->category->rootAncestor->name }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content-wrapper sm:p-4 sm:mt-2.5">
                                        <div class="item flex items-center gap-2 mb-2">
                                            <div class="icon icon-location-1 text-3.5 h-3.5 block leading-none duration-300 text-[#2675FA]"></div>
                                            <div class="text text-3.5 font-medium text-tertiary-950/40">
{{ $portfolio->district->town->province->name }}/{{$portfolio->district->town->name }} ,<span class="capitalize">
    {{ $portfolio->district->name }}
</span>
                                            </div>
                                        </div>
                                        <a href="portfolio-detail.html"
                                            class="title text-4.5 leading-tight text-tertiary-950 hover:text-main-700 duration-300 font-semibold mb-4 xl:mb-5 md:mb-4 block capitalize">

                                        {{ $portfolio->title }}
                                        </a>
                                        <div class="price text-[#2675FA] font-semibold text-5 lg:text-4.5 md:text-4">
                                            {{ $portfolio->price_in_tl }}
                                            TL
                                        </div>
                                        <div class="info flex items-center justify-between gap-7.5 mt-5 md:mt-4">
                                            <div class="tags flex flex-wrap items-center gap-8 2xl:gap-7 xl:gap-6 lg:gap-5 md:gap-4 sm:gap-3">
                                                <div class="item flex items-center gap-2">
                                                    <div
                                                        class="icon-wrapper w-7.5 aspect-square shrink-0 bg-[#EDF3FE] flex items-center justify-center rounded-full">
                                                        <div
                                                            class="icon icon-bedroom text-3.5 h-3.5 block leading-none duration-300 text-[#2675FA]">
                                                        </div>
                                                    </div>
                                                    <div class="text text-3.5 font-medium text-tertiary-950/40">3+1</div>
                                                </div>
                                                <div class="item flex items-center gap-2">
                                                    <div
                                                        class="icon-wrapper w-7.5 aspect-square shrink-0 bg-[#EDF3FE] flex items-center justify-center rounded-full">
                                                        <div
                                                            class="icon icon-square-meter-1 text-3.5 h-3.5 block leading-none duration-300 text-[#2675FA]">
                                                        </div>
                                                    </div>
                                                    <div class="text text-3.5 font-medium text-tertiary-950/40">352 m²</div>
                                                </div>
                                            </div>
                                            <button
                                                class="button shrink-0 add-favorite group/button relative duration-300 bg-[#EFF5FF] hidden sm:flex items-center justify-center h-10 aspect-square rounded-full hover:border-tertiary-950/30">
                                                <div class="icon icon-like text-4 h-4 block leading-none duration-300 text-[#DC1C2E]"></div>
                                                <div
                                                    class="icon icon-liked text-4 h-4 block leading-none duration-300 text-[#DC1C2E] absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 opacity-0 group-hover/button:opacity-100 group-[&.favorited]/button:opacity-100">
                                                </div>
                                            </button>
                                        </div>
                                    </div>
                                    <button
                                        class="button shrink-0 add-favorite group/button relative duration-300 bg-[#EFF5FF] flex items-center justify-center h-10 aspect-square rounded-full hover:border-tertiary-950/30 sm:hidden">
                                        <div class="icon icon-like text-4 h-4 block leading-none duration-300 text-[#DC1C2E]"></div>
                                        <div
                                            class="icon icon-liked text-4 h-4 block leading-none duration-300 text-[#DC1C2E] absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 opacity-0 group-hover/button:opacity-100 group-[&.favorited]/button:opacity-100">
                                        </div>
                                    </button>
                                </div>
@endforeach
                            </div>
                            @else
                    <div class="list-wrapper grid grid-cols-3 lg:grid-cols-2 sm:grid-cols-1 gap-x-9 xl:gap-x-8 lg:gap-x-7 gap-y-6">
                      @foreach($portfolios as $portfolio)
                        <div
                            class="portfolio group/item p-2.5 bg-white rounded-6 md:rounded-3 border border-solid border-transparent hover:border-[#8AA5D3]/35 duration-300">
                            <div class="carousel-wrapper w-full">
                                <div
                                    class="portfolio-images-carousel w-full relative swiper !h-auto shadow-s3 rounded-6 md:rounded-3 overflow-hidden isolate">
                                    <div class="swiper-wrapper !h-auto">

                                    @foreach($portfolio->images as $image)
                                            <div class="swiper-slide">
                                                <a href="portfolio-detail.html" class="image group block aspect-[36/25] overflow-hidden isolate translate-z-0"><img
                                                        class="full-cover group-hover:scale-105 duration-450 translate-z-0 pointer-events-none"
                                                        src="{{ $image->full_url }}" alt="" loading="lazy"></a>
                                            </div>
                                            @endforeach


                                    </div>
                                    <div
                                        class="portfolio-images-next flex items-center justify-center cursor-pointer z-5 absolute right-5.5 top-1/2 -translate-y-1/2 w-7 aspect-square rounded-full bg-white text-tertiary-950 [&:not(.swiper-button-disabled):hover]:bg-main-700 [&:not(.swiper-button-disabled):hover]:text-white duration-300 [&.swiper-button-disabled]:cursor-default min-lg:opacity-0 min-lg:pointer-events-none min-lg:group-hover/item:opacity-100 min-lg:group-hover/item:pointer-events-auto">
                                        <div class="icon icon-chevron-right text-2 h-2 block leading-none"></div>
                                    </div>
                                    <div
                                        class="portfolio-images-prev flex items-center justify-center cursor-pointer z-5 absolute left-5.5 top-1/2 -translate-y-1/2 w-7 aspect-square rounded-full bg-white text-tertiary-950 [&:not(.swiper-button-disabled):hover]:bg-main-700 [&:not(.swiper-button-disabled):hover]:text-white duration-300 [&.swiper-button-disabled]:cursor-default min-lg:opacity-0 min-lg:pointer-events-none min-lg:group-hover/item:opacity-100 min-lg:group-hover/item:pointer-events-auto">
                                        <div class="icon icon-chevron-left text-2 h-2 block leading-none"></div>
                                    </div>
                                    <div
                                        class="portfolio-images-pagination duration-300 !flex items-center justify-center gap-3 absolute !left-1/2 -translate-x-1/2 !bottom-5.5 z-5 !w-fit !right-auto !top-auto [&_span]:w-2 [&_span]:h-2 [&_span]:!m-0 [&_span]:!p-0 [&_span]:opacity-100 [&_span]:bg-white/40 [&_span:hover]:bg-white [&_span]:duration-300 [&_span.swiper-pagination-bullet-active]:pointer-events-none [&_span.swiper-pagination-bullet-active]:bg-white min-lg:opacity-0 min-lg:pointer-events-none min-lg:group-hover/item:opacity-100 min-lg:group-hover/item:pointer-events-auto">
                                    </div>
                                   <div
                                        class="tag absolute left-4 top-4 bg-tertiary-950/50 rounded-2 px-2 py-1.5 text-white text-3 font-medium leading-none z-5 capitalize">
                                        {{ $portfolio->category->rootAncestor->name }}
                                    </div>
                                </div>
                            </div>
                            <div class="content-wrapper p-5 lg:p-4 mt-2.5">
                                <div class="item flex items-center gap-2 mb-2">
                                    <div
                                        class="icon icon-location-1 text-3.5 h-3.5 block leading-none duration-300 text-[#2675FA]">
                                    </div>
                                  <div class=" text-3.5 font-medium text-tertiary-950/40 capitalize">{{ $portfolio->district->town->province->name }}/{{
                                                                $portfolio->district->town->name }} , {{ $portfolio->district->name }}
                                                            </div>
                                </div>
                                <a href="portfolio-detail.html"
                                    class="title text-4.5 leading-tight text-tertiary-950 hover:text-main-700 duration-300 font-semibold mb-4 xl:mb-5 md:mb-4 block capitalize">{{ $portfolio->title }}</a>
                            <div   div class="price text-[#2675FA] font-semibold text-5 lg:text-4.5 md:text-4">
                            {{ $portfolio->price_in_tl }} TL
                        </div>
                                    <div class="info flex items-center justify-between gap-7.5 mt-5 md:mt-4">
                                    <div
                                        class="tags flex flex-wrap items-center gap-8 2xl:gap-7 xl:gap-6 lg:gap-5 md:gap-4 sm:gap-3">
                                        <div class="item flex items-center gap-2">
                                            <div
                                                class="icon-wrapper w-7.5 aspect-square shrink-0 bg-[#EDF3FE] flex items-center justify-center rounded-full">
                                                <div
                                                    class="icon icon-bedroom text-3.5 h-3.5 block leading-none duration-300 text-[#2675FA]">
                                                </div>
                                            </div>
                                            <div class="text text-3.5 font-medium text-tertiary-950/40">3+1</div>
                                        </div>
                                        <div class="item flex items-center gap-2">
                                            <div
                                                class="icon-wrapper w-7.5 aspect-square shrink-0 bg-[#EDF3FE] flex items-center justify-center rounded-full">
                                                <div
                                                    class="icon icon-square-meter-1 text-3.5 h-3.5 block leading-none duration-300 text-[#2675FA]">
                                                </div>
                                            </div>
                                            <div class="text text-3.5 font-medium text-tertiary-950/40">352 m²</div>
                                        </div>
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
                            </div>
                        </div>
                        @endforeach

                    </div>
                    @endif
                    {{ $portfolios->links('vendor.pagination.loca') }}

                </div>
            </div>
        </section>

    </main>

    <footer class="footer-field z-10 block relative bg-tertiary-950">
        <div class="wrapper max-w-1440 mx-auto w-full px-7.5">
            <div
                class="content-wrapper flex items-start justify-between py-15 lg:py-13 md:py-11 sm:py-9 gap-7.5 md:flex-col">
                <div class="brand-wrapper max-w-40 grid gap-6 md:max-w-none md:w-full">
                    <a href="index.html" class="w-full h-auto md:max-w-40 md:mx-auto"><img
                            class="w-full h-auto object-contain object-center block" src="assets/image/static/2.webp"
                            alt="" loading="lazy"></a>
                    <a href="loca-tv.html"
                        class="button group/button relative duration-300 flex items-center justify-center gap-3 h-14 bg-[#34425A] px-3 rounded-2 hover:bg-main-900 sm:w-ful">
                        <span class="text text-white font-medium text-6">LOCA</span>
                        <img class="w-7.5 h-auto object-contain object-center block pointer-events-none"
                            src="assets/image/static/1.webp" alt="" loading="lazy">
                    </a>
                </div>
                <div class="split w-full h-px bg-[#34425A]/75 hidden md:block"></div>
                <div class="menu-wrapper max-w-36 md:max-w-none md:w-full">
                    <div class="title text-white font-medium text-4.5 tracking-wider">HIZLI MENÜ</div>
                    <div class="list mt-5 grid gap-1">
                        <a href="about.html"
                            class="draw-child-underline text-[#8AA5D3] [--line-color:#8AA5D3] font-medium text-3.5 block"><span
                                class="draw-el">Hakkımızda</span></a>
                        <a href="services.html"
                            class="draw-child-underline text-[#8AA5D3] [--line-color:#8AA5D3] font-medium text-3.5 block"><span
                                class="draw-el">Hizmetlerimiz</span></a>
                        <a href="team.html"
                            class="draw-child-underline text-[#8AA5D3] [--line-color:#8AA5D3] font-medium text-3.5 block"><span
                                class="draw-el">Ekibimiz</span></a>
                        <a href="career.html"
                            class="draw-child-underline text-[#8AA5D3] [--line-color:#8AA5D3] font-medium text-3.5 block"><span
                                class="draw-el">Kariyer</span></a>
                        <a href="portfolio-grid.html"
                            class="draw-child-underline text-[#8AA5D3] [--line-color:#8AA5D3] font-medium text-3.5 block"><span
                                class="draw-el">Porföylerimiz</span></a>
                        <a href="projects.html"
                            class="draw-child-underline text-[#8AA5D3] [--line-color:#8AA5D3] font-medium text-3.5 block"><span
                                class="draw-el">Projeler</span></a>
                        <a href="faq.html"
                            class="draw-child-underline text-[#8AA5D3] [--line-color:#8AA5D3] font-medium text-3.5 block"><span
                                class="draw-el">Sıkça Sorulan Sorular</span></a>
                        <a href="blog.html"
                            class="draw-child-underline text-[#8AA5D3] [--line-color:#8AA5D3] font-medium text-3.5 block"><span
                                class="draw-el">Blog</span></a>
                        <a href="contact.html"
                            class="draw-child-underline text-[#8AA5D3] [--line-color:#8AA5D3] font-medium text-3.5 block"><span
                                class="draw-el">İletişim</span></a>
                    </div>
                    <div class="list mt-5 grid gap-1">
                        <a href="template.html"
                            class="draw-child-underline text-[#8AA5D3] [--line-color:#8AA5D3] font-semibold text-3 block"><span
                                class="draw-el">Aydınlatma Metni</span></a>
                        <a href="template.html"
                            class="draw-child-underline text-[#8AA5D3] [--line-color:#8AA5D3] font-semibold text-3 block"><span
                                class="draw-el">Çerez Politikası</span></a>
                        <a href="404.html"
                            class="draw-child-underline text-[#8AA5D3] [--line-color:#8AA5D3] font-semibold text-3 block"><span
                                class="draw-el">404</span></a>
                    </div>
                </div>
                <div class="split w-full h-px bg-[#34425A]/75 hidden md:block"></div>
                <div class="contact-wrapper max-w-80 lg:max-w-64 md:max-w-none md:w-full grid gap-5.5">
                    <a href="javascript:void(0)"
                        class="flex items-center gap-4 draw-child-underline [--line-color:#FFFFFF]">
                        <div class="icon icon-headset-1 text-6 h-6 block leading-none duration-300 text-[#2675FA]">
                        </div>
                        <div class="text text-white text-5 font-semibold"><span class="draw-el">+90 (324)
                                325-3030</span></div>
                    </a>
                    <a href="javascript:void(0)"
                        class="flex items-center gap-4 draw-child-underline [--line-color:#8AA5D3]">
                        <div class="icon icon-email-1 text-5 h-5 block leading-none duration-300 text-[#2675FA]"></div>
                        <div class="text text-[#8AA5D3] text-3.5 font-medium"><span
                                class="draw-el">info@remax-loca-mrs.com</span></div>
                    </a>

                    <div class="address-wrapper">
                        <a href="javascript:void(0)"
                            class="flex items-center gap-4 draw-child-underline [--line-color:#8AA5D3]">
                            <div class="icon icon-location-3 text-5 h-5 block leading-none duration-300 text-[#2675FA]">
                            </div>
                            <div class="text text-[#8AA5D3] text-3.5 font-medium"><span class="draw-el">Dumlupınar
                                    Mahallesi.1524 Sokak. Oğuz İş Merkezi No:2/1 Yenişehir / Mersin</span></div>
                        </a>
                        <div class="button-wrapper ml-4 pl-5 mt-3">
                            <a href="javascript:void(0)"
                                class="button group/button relative duration-300 w-fit flex items-center gap-2 h-7.5 border border-solid border-[#8AA5D3]/25 px-3 rounded-2 hover:border-[#8AA5D3]/50">
                                <div class="icon icon-map-1 text-3 h-3 block leading-none duration-300 text-[#2675FA]">
                                </div>
                                <div class="text text-white font-semibold text-3.5 tracking-wider">YOL TARİFİ</div>
                            </a>
                        </div>
                    </div>
                    <div class="address-wrapper">
                        <a href="javascript:void(0)"
                            class="flex items-center gap-4 draw-child-underline [--line-color:#8AA5D3]">
                            <div class="icon icon-location-3 text-5 h-5 block leading-none duration-300 text-[#2675FA]">
                            </div>
                            <div class="text text-[#8AA5D3] text-3.5 font-medium"><span class="draw-el">Deniz Mahallesi,
                                    Gazipaşa Cadddesi, Akbusi Sitesi AltıNo:56/B Mezitli / Mersin</span></div>
                        </a>
                        <div class="button-wrapper ml-4 pl-5 mt-3">
                            <a href="javascript:void(0)"
                                class="button group/button relative duration-300 w-fit flex items-center gap-2 h-7.5 border border-solid border-[#8AA5D3]/25 px-3 rounded-2 hover:border-[#8AA5D3]/50">
                                <div class="icon icon-map-1 text-3 h-3 block leading-none duration-300 text-[#2675FA]">
                                </div>
                                <div class="text text-white font-semibold text-3.5 tracking-wider">YOL TARİFİ</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="split w-full h-px bg-[#34425A]/75 hidden md:block"></div>
                <div class="subscribe-wrapper w-full max-w-96 lg:max-w-72 md:max-w-none md:w-full">
                    <div class="title px-5.5 flex items-center gap-3 mb-5">
                        <div class="icon icon-paperplane text-6 h-6 block leading-none duration-300 text-secondary-700">
                        </div>
                        <div class="text font-semibold text-5 text-white tracking-wide">E-bülten’e Kaydol</div>
                    </div>
                    <form action="" class="w-full">
                        <div class="form-wrapper w-full grid gap-4">
                            <div class="form-el group/form w-full relative">
                                <input type="text" placeholder="E-posta adresi giriniz"
                                    class="h-14 duration-300 bg-[#34425A] rounded-4 w-full placeholder:text-[#8AA5D3] font-medium text-3.5 text-white pl-5.5 pr-24 border border-solid border-transparent hover:border-white focus:border-white group-[&.error]/form:border-secondary-700">
                                <button
                                    class="absolute right-1 top-1 h-12 px-6 bg-secondary-700 rounded-3.5 text-white font-semibold text-3.5 hover:bg-secondary-600 duration-300 cursor-pointer flex items-center justify-center">Katıl</button>
                                <div
                                    class="tooltip text-secondary-700 text-3.5 font-medium mt-1 hidden group-[&.error]/form:block">
                                    Lütfen ilgili alanı doldurunuz.</div>
                            </div>
                            <div class="form-el group/form w-full relative px-5.5">
                                <div class="custom-checkbox relative flex items-center gap-2">
                                    <input type="checkbox"
                                        class="peer absolute left-0 top-0 w-full h-full cursor-pointer opacity-0 z-2">
                                    <div
                                        class="box relative duration-300 w-4 aspect-square shrink-0 rounded-0.75 border border-solid border-[#8AA5D3] before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:w-60/100 before:aspect-square before:rounded-0.5 before:bg-[#8AA5D3] before:duration-300 before:pointer-events-none before:opacity-0 peer-hover:border-white peer-checked:before:opacity-100">
                                    </div>
                                    <div class="text text-[#8AA5D3] text-3 font-medium"><a href="#popup-gdpr"
                                            data-fancybox
                                            class="text-[#8AA5D3] font-semibold duration-300 hover:text-white relative z-3">Aydınlatma
                                            Metni</a>’ni okudum ve kabul ediyorum.</div>
                                </div>
                                <div
                                    class="tooltip text-secondary-700 text-3.5 font-medium mt-1 hidden group-[&.error]/form:block">
                                    Lütfen ilgili alanı doldurunuz.</div>
                            </div>
                        </div>
                    </form>

                    <div class="social-outer-wrapper px-5.5 mt-15 2xl:mt-13 xl:mt-11 lg:mt-9">
                        <div class="title text-3.5 font-medium text-white mb-3">Bizi Takip Edin</div>
                        <div class="social-wrapper flex items-center gap-4.5">
                            <a href="javascript:void(0)"
                                class="block relative text-[#8AA5D3] duration-350 before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:pointer-events-none before:w-150/100 before:aspect-square before:rounded-1 before:-rotate-90 before:opacity-0 before:duration-350 before:bg-[#8AA5D3] hover:before:rotate-0 hover:before:opacity-100 hover:text-tertiary-950">
                                <div class="icon icon-whatsapp-1 text-4 h-4 block leading-none relative z-2"></div>
                            </a>
                            <a href="javascript:void(0)"
                                class="block relative text-[#8AA5D3] duration-350 before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:pointer-events-none before:w-150/100 before:aspect-square before:rounded-1 before:-rotate-90 before:opacity-0 before:duration-350 before:bg-[#8AA5D3] hover:before:rotate-0 hover:before:opacity-100 hover:text-tertiary-950">
                                <div class="icon icon-facebook-1 text-4 h-4 block leading-none relative z-2"></div>
                            </a>
                            <a href="javascript:void(0)"
                                class="block relative text-[#8AA5D3] duration-350 before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:pointer-events-none before:w-150/100 before:aspect-square before:rounded-1 before:-rotate-90 before:opacity-0 before:duration-350 before:bg-[#8AA5D3] hover:before:rotate-0 hover:before:opacity-100 hover:text-tertiary-950">
                                <div class="icon icon-instagram text-4 h-4 block leading-none relative z-2"></div>
                            </a>
                            <a href="javascript:void(0)"
                                class="block relative text-[#8AA5D3] duration-350 before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:pointer-events-none before:w-150/100 before:aspect-square before:rounded-1 before:-rotate-90 before:opacity-0 before:duration-350 before:bg-[#8AA5D3] hover:before:rotate-0 hover:before:opacity-100 hover:text-tertiary-950">
                                <div class="icon icon-linkedin-1 text-4 h-4 block leading-none relative z-2"></div>
                            </a>
                            <a href="javascript:void(0)"
                                class="block relative text-[#8AA5D3] duration-350 before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:pointer-events-none before:w-150/100 before:aspect-square before:rounded-1 before:-rotate-90 before:opacity-0 before:duration-350 before:bg-[#8AA5D3] hover:before:rotate-0 hover:before:opacity-100 hover:text-tertiary-950">
                                <div class="icon icon-youtube text-4 h-4 block leading-none relative z-2"></div>
                            </a>
                            <a href="javascript:void(0)"
                                class="block relative text-[#8AA5D3] duration-350 before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:pointer-events-none before:w-150/100 before:aspect-square before:rounded-1 before:-rotate-90 before:opacity-0 before:duration-350 before:bg-[#8AA5D3] hover:before:rotate-0 hover:before:opacity-100 hover:text-tertiary-950">
                                <div class="icon icon-tiktok text-4 h-4 block leading-none relative z-2"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="split w-full h-px bg-[#34425A]/75"></div>
            <div class="copyright-wrapper py-7.5">
                <div class="text text-white text-3.5 font-medium sm:text-center">© 2024 Remax Loca</div>
            </div>
        </div>
    </footer>

</soho-technologies>
@endsection
