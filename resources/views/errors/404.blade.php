@extends('layouts.frontend')

@section('content')
<main class="main-field relative pt-[134px] sm:pt-[124px]">

    <section class="content-field px-7 pb-7 md:px-5 md:pb-5">
        <div class="inner bg-[#8AA5D3]/15 rounded-6 md:rounded-4 py-40 2xl:py-32 xl:py-24 lg:py-16 md:py-10">
            <div class="wrapper max-w-1440 mx-auto w-full px-7.5">
                <div class="text-editor !gap-2">
                    <!-- .text-editor içerisindeki style attribute değerleri frontendi tasarıma benzetmek adına eklenmiştir, backend aşamasında silinerek panel editöründen tanımlanmalıdır. -->
                    <h1 style="font-weight:600;color:#DB0620;text-align:center;">404</h1>
                    <b></b>
                    <h5 style="font-weight:500;color:#0D1523;text-align:center;">Sayfa bulunamıyor</h5>
                    <p style="font-weight:500;text-align:center;">Bu alanda hiçbir şey bulunamadı</p>
                </div>
                <a href="{{ route('home') }}"
                    class="button group/button flex items-center justify-center gap-4 md:gap-3 duration-300 rounded-5 md:rounded-3 h-16 xl:h-14 md:h-12 w-fit mx-auto px-30 2xl:px-24 xl:px-16 lg:px-12 md:px-8 sm:px-6 bg-main-900 hover:bg-main-950 mt-7.5 text-white">
                    <div class="icon icon-home text-4.5 h-4.5 md:text-4 md:h-4 sm:text-3.5 sm:h-3.5 block leading-none">
                    </div>
                    <div class="text whitespace-nowrap font-medium text-4 md:text-3.5">{{ __('back_to_home') }}</div>

                </a>
            </div>
        </div>
    </section>

</main>
@endsection
