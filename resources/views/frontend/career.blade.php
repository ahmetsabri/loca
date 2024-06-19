@extends('layouts.frontend')

@section('title','Contact us')
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
                    KARİYER</h1>
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
    <section class="form-field py-20 2xl:py-16 xl:py-14 lg:py-12 md:py-11 sm:py-10">
        <div
            class="wrapper max-w-1440 mx-auto w-full px-7.5 md:px-5 grid grid-cols-2 items-end lg:items-center sm:grid-cols-1 sm:gap-6">
            <div class="text-wrapper relative mt-15 lg:mt-0">
                <div
                    class="background-wrapper absolute left-0 top-0 bg-white w-120/100 h-full rounded-6 md:rounded-3 shadow-s1 sm:w-full">
                </div>
                <div
                    class="content-wrapper relative z-2 px-30 2xl:px-24 xl:px-20 lg:px-16 md:px-10 sm:px-7.5 py-12 lg:py-10 md:py-8">
                    <div class="text-editor">
                        <!-- .text-editor içerisindeki style attribute değerleri frontendi tasarıma benzetmek adına eklenmiştir, backend aşamasında silinerek panel editöründen tanımlanmalıdır. -->
                        <h4 style="font-weight:600;color:#DB0620">#BenLOCAdayımSen Nerdesin?</h4>
                        <h6 style="font-weight:500;color:#0D1523">Büyümeye ve gelişmeye devam ediyoruz, bizimle çalışmak
                            için <strong>formu doldurmayı unutma :)</strong></h6>
                    </div>
                    <div class="form-outer-wrapper pt-12 2xl:pt-10 xl:pt-8 lg:pt-6">
<form action="{{ route('form.job') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                                            <div class="form-wrapper grid grid-cols-2 sm:grid-cols-1 gap-3">
                                <div class="form-el relative group/form w-full col-span-2 sm:col-span-1">
                                    <!-- Buraya `error` classı gelince ilgili style değişiyor -->
                                    <input  required name="name" type="text" placeholder="Adınız Soyadınız"
                                        class="w-full h-14 md:h-12 duration-300 rounded-4 md:rounded-3 px-7 md:px-5 bg-bodyColor placeholder:text-[#6D6D6D] text-tertiary-950 font-medium text-3.5 border border-solid border-transparent hover:border-[#8AA5D3]/30 focus:border-main-700 group-[&.error]/form:border-secondary-700">

                                    <div
                                        class="tooltip text-secondary-700 text-3 mt-2 hidden group-[&.error]/form:block">
                                        Lütfen ilgili alanı doldurunuz.</div>
                                </div>
                                <div class="form-el relative group/form w-full">
                                    <!-- Buraya `error` classı gelince ilgili style değişiyor -->
                                    <input  required name="email" type="email" placeholder="E-posta"
                                        class="w-full h-14 md:h-12 duration-300 rounded-4 md:rounded-3 px-7 md:px-5 bg-bodyColor placeholder:text-[#6D6D6D] text-tertiary-950 font-medium text-3.5 border border-solid border-transparent hover:border-[#8AA5D3]/30 focus:border-main-700 group-[&.error]/form:border-secondary-700">

                                    <div
                                        class="tooltip text-secondary-700 text-3 mt-2 hidden group-[&.error]/form:block">
                                        Lütfen ilgili alanı doldurunuz.</div>
                                </div>
                                <div class="form-el relative group/form w-full">
                                    <!-- Buraya `error` classı gelince ilgili style değişiyor -->
                                    <input  required name="phone" type="tel" placeholder="Telefon No"
                                        class="w-full h-14 md:h-12 duration-300 rounded-4 md:rounded-3 px-7 md:px-5 bg-bodyColor placeholder:text-[#6D6D6D] text-tertiary-950 font-medium text-3.5 border border-solid border-transparent hover:border-[#8AA5D3]/30 focus:border-main-700 group-[&.error]/form:border-secondary-700">

                                    <div
                                        class="tooltip text-secondary-700 text-3 mt-2 hidden group-[&.error]/form:block">
                                        Lütfen ilgili alanı doldurunuz.</div>
                                </div>
                                <div class="form-el group/form w-full col-span-2 sm:col-span-1">
                                    <!-- Buraya `error` classı gelince ilgili style değişiyor -->
                                    <div class="custom-input relative">
                                        <input  required name="attachment" type="file"
                                            class="opacity-0 absolute left-0 top-0 w-full h-full peer z-2 cursor-pointer">
                                        <div
                                            class="box flex items-center justify-center gap-2 duration-300 h-20 md:h-18 px-7 md:px-5 rounded-4 md:rounded-3 bg-bodyColor placeholder:text-[#6D6D6D] text-tertiary-950 font-medium text-3.5 border border-dashed border-[#8AA5D3]/30 peer-hover:border-main-700 peer-focus:border-main-700 group-[&.error]/form:border-secondary-700">
                                            <div class="text text-3.5 font-medium text-tertiary-950"><span
                                                    class="line-clamp-1">CV Yükle</span></div>
                                            <div
                                                class="icon icon-upload text-4 h-4 block leading-none duration-300 text-[#2675FA]">
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="tooltip text-secondary-700 text-3 mt-2 hidden group-[&.error]/form:block">
                                        Lütfen ilgili alanı doldurunuz.</div>
                                </div>
                                <div
                                    class="form-el group/form w-full col-span-2 sm:col-span-1 [&amp;_.custom-input]:justify-center my-3 md:my-2">
                                    <!-- Buraya `error` classı gelince ilgili style değişiyor -->
                                    <div class="custom-input relative flex items-center gap-2">
                                        <input required type="checkbox"
                                            class="opacity-0 absolute left-0 top-0 w-full h-full peer z-2 cursor-pointer">
                                        <div
                                            class="box relative duration-300 w-4 aspect-square shrink-0 bg-bodyColor rounded-0.75 border border-solid border-[#8AA5D3]/30 before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:w-65/100 before:aspect-square before:rounded-0.5 before:bg-main-700 before:duration-300 before:pointer-events-none before:opacity-0 peer-hover:border-main-700 peer-checked:border-main-700 peer-checked:before:opacity-100">
                                        </div>
                                        <div class="text text-[#6D6D6D] text-3.5 font-medium"><a href="#popup-gdpr"
                                                data-fancybox
                                                class="text-[#6D6D6D] font-semibold duration-300 hover:text-main-700 relative z-3">KVKK</a>
                                            ve <a href="#popup-gdpr" data-fancybox
                                                class="text-[#6D6D6D] font-semibold duration-300 hover:text-main-700 relative z-3">Gizlilik
                                                Şartları</a>’nı okudum, kabul ediyorum.</div>
                                    </div>
                                    <div
                                        class="tooltip text-secondary-700 text-3 mt-2 hidden group-[&.error]/form:block">
                                        Lütfen ilgili alanı doldurunuz.</div>
                                </div>
                                <div class="form-el group/form w-full col-span-2 sm:col-span-1">
                                    <!-- Buraya `loading` classı gelince ilgili style değişiyor -->
                                    <button type="submit"
                                        class="button group/button relative flex items-center justify-center gap-4 md:gap-3 duration-300 rounded-5 md:rounded-3 after:absolute after:left-[calc(50%-13px)] xl:after:left-[calc(50%-12px)] md:after:left-[calc(50%-10px)] after:top-[calc(50%-13px)] xl:after:top-[calc(50%-12px)] md:after:top-[calc(50%-10px)] after:h-6.5 xl:after:h-6 md:after:h-5 after:aspect-square after:rounded-full after:border-0.5 after:border-solid after:border-white after:[clip-path:polygon(0%_0%,100%_0%,100%_50%,0%_50%)] after:opacity-0 after:duration-300 after:transition-opacity after:animate-spin group-[&.loading]/form:[&_.icon]:opacity-0 group-[&.loading]/form:[&_.text]:opacity-0 group-[&.loading]/form:after:opacity-100 group-[&.loading]/form:pointer-events-none h-16 xl:h-14 md:h-12 w-full px-8 sm:px-6 bg-secondary-700 hover:bg-secondary-600 text-white">

                                        <div
                                            class="text whitespace-nowrap font-medium text-4 md:text-3.5 transition-opacity duration-300">
                                            {{__('general.submit')}}</div>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="image-wrapper relative z-2 mb-15 lg:mb-0">
                <div
                    class="logo-wrapper absolute aspect-square w-36 2xl:w-32 xl:w-28 lg:w-24 md:w-20 sm:hidden rounded-5 xl:rounded-3 overflow-hidden isolate z-2 left-0 bottom-0 -translate-x-30/100 -translate-y-30/100">
                    <img class="full-cover" src="{{ asset('image/static/3.webp') }}" alt="" loading="lazy"></div>
                <div
                    class="image w-full h-auto aspect-[71/63] rounded-6 md:rounded-3 overflow-hidden isolate translate-z-0">
                    <img class="full-cover" src="{{ asset('image/photo/10.webp') }}" alt="" loading="lazy"></div>
            </div>
        </div>
    </section>

</main>

@endsection
