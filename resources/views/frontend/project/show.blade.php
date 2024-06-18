@extends('layouts.frontend')

@section('content')
<soho-technologies class="block">

        <main class="main-field relative pt-[134px] sm:pt-[124px]" x-data="{
            priceCurrency:'tl',
            price:null,
            init(){
                this.setPriceCurrency()
            },
            setPriceCurrency(currency='tl'){
                if(currency == 'eur'){

                 this.price= `{{ $project->price_in_eur }}` + ' EUR'
                 return
                }
                if(currency == 'usd' ){
                    this.price = `{{ $project->price_in_usd }}` + ' USD'
                 return
                }
                    this.price = `{{ $project->price_in_tl }}` + ' TL'

            }
        }">

            <section class="breadcrumb-field px-7 md:px-5">
                <div class="inner bg-[#8AA5D3]/15 rounded-6 md:rounded-4 py-24 2xl:py-20 xl:py-16 lg:py-12 md:py-10">
                    <div
                        class="wrapper max-w-1440 mx-auto w-full px-7.5 flex items-center justify-between md:flex-col md:items-start gap-7.5 md:gap-6">
                        <div class="text-wrapper">
                            <h1 class="title text-6 2xl:text-5.5 xl:text-4.5 font-semibold text-tertiary-950 leading-tight">
                               {{ $project->title }}
                            </h1>
                            <div class="location flex items-center gap-2 mt-3">
                                <div
                                    class="icon icon-location-1 text-4 h-4 xl:text-3.5 xl:h-3.5 block leading-none text-[#2675FA]">
                                </div>
                                <div class="text text-[#888888] font-medium text-4 xl:text-3.5">Türkiye /
                                    {{ $project->full_address }} | Proje No: {{ $project->id }}</div>
                            </div>
                        </div>
                        <div class="buttons-wrapper flex items-center gap-5 md:gap-4 sm:gap-3 xs:gap-2 flex-wrap">
                            <a href="javascript:void(0)"
                                class="button add-favorite group/button h-12 md:h-11 sm:h-10 px-5 md:px-4 sm:px-3.5 rounded-3 border border-solid border-black/13 flex items-center justify-center gap-3 sm:gap-2 duration-300 hover:border-black/25">
                                <div class="icon-wrapper relative">
                                    <div
                                        class="icon icon-like text-3.5 h-3.5 sm:text-3 sm:h-3 block leading-none duration-300 text-[#454545]">
                                    </div>
                                    <div
                                        class="icon icon-liked text-3.5 h-3.5 sm:text-3 sm:h-3 block leading-none duration-300 text-[#DC1C2E] absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 opacity-0 group-hover/button:opacity-100 group-[&.favorited]/button:opacity-100">
                                    </div>
                                </div>
                                <div class="text text-[#454545] text-3.5 sm:text-3 font-medium">
                                    <span class="block group-[&.favorited]/button:hidden">Favori Yap</span>
                                    <span class="hidden group-[&.favorited]/button:block">Favoriden Kaldır</span>
                                </div>
                            </a>
                            <a href="#popup-share-project"
                                class="button add-favorite group/button h-12 md:h-11 sm:h-10 px-5 md:px-4 sm:px-3.5 rounded-3 border border-solid border-black/13 flex items-center justify-center gap-3 sm:gap-2 duration-300 hover:border-black/25"
                                data-fancybox>
                                <div
                                    class="icon icon-share text-3.5 h-3.5 sm:text-3 sm:h-3 block leading-none duration-300 text-[#454545]">
                                </div>
                                <div class="text text-[#454545] text-3.5 sm:text-3 font-medium">Paylaş</div>
                            </a>
                            @if($project->brochure_full_url)
                            <a href="{{ $project->brochure_full_url }}" download
                                class="button add-favorite group/button h-12 md:h-11 sm:h-10 px-5 md:px-4 sm:px-3.5 rounded-3 border border-solid border-black/13 flex items-center justify-center gap-3 sm:gap-2 duration-300 hover:border-black/25">
                                <div
                                    class="icon icon-download text-3.5 h-3.5 sm:text-3 sm:h-3 block leading-none duration-300 text-[#454545]">
                                </div>
                                <div class="text text-[#454545] text-3.5 sm:text-3 font-medium">Broşür</div>
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
            </section>

            <section class="content-field py-15 2xl:py-14 xl:py-13 lg:pt-12 md:pt-11 sm:pt-10 lg:pb-0">
                <div class="wrapper max-w-1440 mx-auto w-full px-7.5 md:px-5">
                    <div class="image-outer-wrapper relative grid grid-cols-2 sm:grid-cols-1 gap-3">
                        <div class="image-inner-wrapper flex">
                            <a href="{{ ($project->promotion_url) }}"
                                class="image bg-tertiary-950 relative block sm:aspect-square overflow-hidden isolate rounded-6 md:rounded-3 translate-z-0 group"
                                data-fancybox="gallery">
                                <img class="full-cover translate-z-0 group-hover:scale-105 duration-450 opacity-70 group-hover:opacity-100"
                                    src="{{ $project->images->first()->full_url }}" alt="" loading="lazy">
                                <div
                                    class="icon-wrapper w-13 xl:w-11 md:w-9 rounded-full aspect-square bg-secondary-600 flex items-center justify-center absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 duration-450 group-hover:delay-150 group-hover:scale-125">
                                    <div
                                        class="icon icon-play text-4 h-4 xl:text-3.5 xl:h-3.5 md:text-3 md:h-3 block leading-none duration-300 text-white">
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="image-inner-wrapper grid grid-row-2 gap-3">
                            <div class="image-wrapper">
                                <a href="{{ $project->images->first()->full_url }}"
                                    class="image block aspect-[131/67] overflow-hidden isolate rounded-6 md:rounded-3 translate-z-0 group"
                                    data-fancybox="gallery"><img
                                        class="full-cover translate-z-0 group-hover:scale-105 duration-450"
                                        src="{{ $project->images->first()->full_url }}" alt="" loading="lazy"></a>
                            </div>
                            <div class="image-wrapper grid grid-cols-2 gap-3">
                                @foreach($project->images as $image)
                                @if(!$loop->first)
                                <a href="{{ $image->full_url }}"
                                    class="image block aspect-[64/57] overflow-hidden isolate rounded-6 md:rounded-3 translate-z-0 group"
                                    data-fancybox="gallery"><img
                                        class="full-cover translate-z-0 group-hover:scale-105 duration-450"
                                        src="{{ $image->full_url }}" alt="" loading="lazy"></a>
                                @endif
                                @endforeach

                            </div>
                        </div>
                        <div
                            class="button-wrapper absolute bottom-0 right-0 lg:bottom-auto lg:top-0 p-4 flex items-center gap-2">
                            <a href="{{ $project->promotion_url }}" data-fancybox
                                class="button group/button bg-white h-12 md:h-11 sm:h-10 px-5 md:px-4 sm:px-3.5 rounded-3 flex items-center justify-center gap-3 sm:gap-2 duration-300 hover:bg-main-50">
                                <div class="text text-[#454545] text-3.5 sm:text-3 font-medium">Tanıtımı İzle</div>
                            </a>
                            <a href="{{ $project->images->first()->full_url }}" data-fancybox="gallery"
                                class="button group/button bg-white h-12 md:h-11 sm:h-10 px-5 md:px-4 sm:px-3.5 rounded-3 flex items-center justify-center gap-3 sm:gap-2 duration-300 hover:bg-main-50">
                                <div class="text text-[#454545] text-3.5 sm:text-3 font-medium">Tüm Fotoğraflar</div>
                            </a>
                        </div>
                    </div>
                    <div
                        class="content-wrapper mt-15 2xl:mt-13 xl:mt-11 lg:mt-9 md:mt-8 grid grid-cols-[minmax(0,auto)_minmax(0,450px)] xl:grid-cols-[minmax(0,auto)_minmax(0,400px)] lg:grid-cols-[minmax(0,auto)_minmax(0,350px)] md:grid-cols-[minmax(0,auto)_minmax(0,300px)] sm:grid-cols-1 gap-10 lg:gap-8">
                        <div class="inner-wrapper">
                            <div class="item grid grid-cols-2/10 lg:grid-cols-1 gap-6">
                                <div class="title text-4.5 xl:text-4 md:text-3.5 font-semibold text-tertiary-950">Açıklama
                                </div>
                                <div class="detail">
                                    <div class="text-editor text-editor-main">
                                        <p>{{ $project->description }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="split h-px w-full bg-black/11 my-10 xl:my-8 lg:my-6"></div>
                            <div class="item grid grid-cols-2/10 lg:grid-cols-1 gap-6">
                                <div class="title text-4.5 xl:text-4 md:text-3.5 font-semibold text-tertiary-950">
                                    {{ __('general.project_features') }}
                                </div>
                                <div class="detail">
                                    <div class="custom-list grid grid-cols-2 gap-6 xl:gap-5 lg:gap-4 md:gap-3">
                                        @foreach($project->features as $feature)
                                        <div class="item flex items-center gap-3">
                                            <div class="dot w-1.5 aspect-square rounded-full bg-tertiary-950 shrink-0">
                                            </div>
                                            <div class="text font-medium text-4.5 xl:text-4 md:text-3.5 text-tertiary-950">
                                                {{ $feature->value }}
                                            </div>
                                        </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                            <div class="split h-px w-full bg-black/11 my-10 xl:my-8 lg:my-6"></div>
                            <div class="item grid grid-cols-2/10 lg:grid-cols-1 gap-6">
                                <div class="title text-4.5 xl:text-4 md:text-3.5 font-semibold text-tertiary-950">
                                    {{ __('general.transportations') }}
                                </div>
                                <div class="detail">
                                    <div class="custom-list grid gap-6 xl:gap-5 lg:gap-4 md:gap-3">
                                        @foreach($project->transportations as $transportation)


                                        <div class="item grid grid-cols-3">
                                            <div class="title flex items-center gap-3">
                                                <div class="dot w-1.5 aspect-square rounded-full bg-tertiary-950 shrink-0">
                                                </div>
                                                <div
                                                    class="text font-medium text-4.5 xl:text-4 md:text-3.5 text-tertiary-950">
                                                    {{ $transportation->name }}
                                                </div>
                                            </div>
                                            <div class="time flex items-center gap-3">
                                                <div
                                                    class="icon icon-walking-distance text-5 h-5 block leading-none duration-300">
                                                </div>
                                                <div class="value text-3.5 text-tertiary-950">

                                                    {{ $transportation->duration }}dk
                                                </div>
                                            </div>
                                            <div class="distance">
                                                <div class="value text-3.5 text-tertiary-950">
                                                    {{ $transportation->distance }}
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>

                            <div class="tab-general-wrapper mt-30 2xl:mt-24 xl:mt-18 lg:mt-12 md:mt-8">
                                <div class="title text-4.5 xl:text-4 md:text-3.5 font-semibold text-tertiary-950 mb-6 capitalize">
                                    {{ __('general.flat_features') }}
                                </div>
                                <div class="tab-triggers flex items-center">
                                    @foreach($project->flats as $mainFlat)
                                    <div data-id="t{{ $mainFlat->id }}"
                                        class="item h-15 lg:h-14 sm:h-12 w-full flex items-center justify-center cursor-pointer text-4.5 lg:text-4 sm:text-3.5 font-medium text-tertiary-950 border-0 border-y border-r border-solid border-[#2675FA] first:border-l first:rounded-tl-5 first:rounded-bl-5 md:first:rounded-tl-3 md:first:rounded-bl-3 last:rounded-tr-5 last:rounded-br-5 md:last:rounded-tr-3 md:last:rounded-br-3 duration-300 [&.active]:bg-[#2675FA] [&.active]:text-white [&.active]:pointer-events-none hover:text-[#2675FA] @if($loop->first) active @endif">
                                       {{ $mainFlat->rooms }}
                                    </div>
                                    @endforeach
                                </div>
                                <div class="tab-panels mt-17 2xl:mt-14 xl:mt-11 lg:mt-8 md:mt-6">
                                    @foreach($project->flats as $flat)
                                    <div data-id="t{{ $flat->id }}" class="item hidden [&.active]:block @if($loop->first) active @endif">
                                        <div class="el">
                                            <div
                                                class="title text-4 xl:text-4 md:text-3.5 font-semibold text-tertiary-950 mb-5">
                                                {{ __('general.description') }}
                                            </div>
                                            <div class="info flex items-center gap-7">
                                                <div class="item flex items-center gap-5">
                                                    <div
                                                        class="icon icon-square-meter-2 text-7 h-7 block leading-none duration-300 text-[#2675FA]">
                                                    </div>
                                                    <div class="text-wrapper flex items-center gap-4">
                                                        <div class="text">
                                                            <div class="title text-3 text-tertiary-950 capitalize">{{ __('general.gross') }}</div>
                                                            <div class="value text-4 font-medium text-[#1D1D1B]">{{ $flat->gross }} m²
                                                            </div>
                                                        </div>
                                                        <div class="text">
                                                            <div class="title text-3 text-tertiary-950 capitalize">{{ __('general.net') }}</div>
                                                            <div class="value text-4 font-medium text-[#1D1D1B]">{{ $flat->net }} m²
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="split h-7 w-px shrink-0 bg-black/10"></div>
                                                <div class="item flex items-center gap-5">
                                                    <div
                                                        class="icon icon-bath text-7 h-7 block leading-none duration-300 text-[#2675FA]">
                                                    </div>
                                                    <div class="text-wrapper flex items-center gap-4">
                                                        <div class="text">
                                                            <div class="title text-3 text-tertiary-950">{{ __('general.bathroom_count') }}</div>
                                                            <div class="value text-4 font-medium text-[#1D1D1B]">
                                                                {{ $flat->bathroom_count }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-editor text-editor-main mt-5">
                                                <p>
                                                    {{ $flat->description }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="split h-px w-full bg-black/11 my-14 2xl:my-12 xl:my-10 lg:my-8 md:my-6">
                                        </div>
                                        <div class="item grid grid-cols-2/10 lg:grid-cols-1 gap-6">
                                            <div
                                                class="title text-4.5 xl:text-4 md:text-3.5 font-semibold text-tertiary-950 capitalize">
                                                {{ __('general.features') }}
                                            </div>
                                            <div class="detail">
                                                <div class="custom-list grid grid-cols-3 xs:grid-cols-2 gap-3">
                                                    @foreach($flat->features as $feature)
                                                    <div class="item flex items-center gap-3">
                                                            <div class="dot w-1 aspect-square rounded-full bg-tertiary-950 shrink-0">
                                                            </div>
                                                            <div class="text text-4 md:text-3.5 text-tertiary-950">
                                                                {{ $feature->value }}
                                                            </div>
                                                        </div>

                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        <div class="split h-px w-full bg-black/11 my-14 2xl:my-12 xl:my-10 lg:my-8 md:my-6">
                                        </div>
                                        <div class="item grid grid-cols-2/10 lg:grid-cols-1 gap-6">
                                            <div
                                                class="title text-4.5 xl:text-4 md:text-3.5 font-semibold text-tertiary-950 capitalize">
                                                {{ __('general.site_features') }}
                                            </div>
                                            <div class="detail">
                                                <div class="custom-list grid grid-cols-3 xs:grid-cols-2 gap-3">
                                                    @foreach($project->siteFeatures as $features)
                                                    <div class="item flex items-center gap-3">
                                                        <div class="dot w-1 aspect-square rounded-full bg-tertiary-950 shrink-0">
                                                        </div>
                                                        <div class="text text-4 md:text-3.5 text-tertiary-950">
                                                            {{ $feature->value }}
                                                        </div>
                                                    </div>
                                                    @endforeach

                                                </div>
                                            </div>
                                        </div>
                                        <div class="split h-px w-full bg-black/11 my-14 2xl:my-12 xl:my-10 lg:my-8 md:my-6">
                                        </div>
                                        <div class="item grid grid-cols-2/10 lg:grid-cols-1 gap-6">
                                            <div
                                                class="title capitalize text-4.5 xl:text-4 md:text-3.5 font-semibold text-tertiary-950">
                                               {{__('general.payment_plan')}}
                                            </div>
                                            <div class="detail">
                                                <div class="text-editor text-editor-main">
                                                    <p>{{$project->payment_plan}}.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="split h-px w-full bg-black/11 my-14 2xl:my-12 xl:my-10 lg:my-8 md:my-6">
                                        </div>
                                        <div class="item grid grid-cols-2/10 lg:grid-cols-1 gap-6">
                                            <div
                                                class="title capitalize text-4.5 xl:text-4 md:text-3.5 font-semibold text-tertiary-950">
                                            {{__('general.extra_payment')}}
                                            </div>
                                            <div class="detail">
                                                <div class="text-editor text-editor-main">
                                                    <p>{{ $project->extra_payment }}.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="split h-px w-full bg-black/11 my-14 2xl:my-12 xl:my-10 lg:my-8 md:my-6">
                                        </div>
                                        <div class="item grid grid-cols-2/10 lg:grid-cols-1 gap-6">
                                            <div
                                                class="title text-4.5 xl:text-4 md:text-3.5 font-semibold text-tertiary-950">
                                            {{ __('general.general.location') }}
                                            </div>
                                            <div class="detail">
                                              <iframe class="w-full h-auto block aspect-[177/73] xs:aspect-[5/4]"
                                                    src="https://www.google.com/maps/embed/v1/view?key=AIzaSyDw9HPxhdYmLJsF_xVXmEs_f2QwfaEoGho&center={{ $project?->lat_lon[0] ?? ''  }},{{ $project?->lat_lon[1] ?? '' }}&zoom=14"
                                                    style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" id="locationIframe">
                                                </iframe>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                        <div class="sidebar-wrapper">
                            <div class="sticky-el sticky top-0 duration-300">
                                <div class="inner bg-white rounded-4 md:rounded-3 p-7.5 sm:p-6">
                                    <div class="date text-center text-tertiary-950 font-medium text-4 lg:text-3.5 mb-3">
                                       {{__('general.delivery_date')}}: {{ $project->delivery_date }}</div>
                                    <div class="price text-center text-[#2675FA] leading-tight">
                                        <div x-text="price"
                                            class="value flex items-center justify-center font-semibold text-9 2xl:text-8 xl:text-7 lg:text-6 [&_span]:text-4 lg:[&_span]:text-3.5 [&_span]:font-medium">
                                              <span>‘den</span></div>
                                        <div class="joint text-4 lg:text-3.5 font-medium">başlayan fiyatlarla</div>
                                    </div>
                                    <div class="custom-radio-group flex items-center justify-center gap-3 xl:gap-2 mt-5">
                                        <div class="custom-radio relative">
                                            <input type="radio"  name="r1"
                                                class="peer absolute left-0 top-0 w-full h-full opacity-0 cursor-pointer"
                                                checked @click="setPriceCurrency('tl')">
                                            <div
                                                class="box text-3.5 md:text-3 font-medium w-16 xl:w-14 md:w-12 h-12 xl:h-10 md:h-8 rounded-2 flex items-center justify-center text-[#888888] peer-hover:text-tertiary-950 duration-300 border border-solid border-transparent [-webkit-text-stroke:0.5px_transparent] peer-checked:pointer-events-none peer-checked:border-[#144495] peer-checked:bg-[#144495]/5 peer-checked:text-[#144495] peer-checked:[-webkit-text-stroke:0.5px_#144495]">
                                                TRY</div>
                                        </div>
                                        <div class="custom-radio relative">
                                            <input type="radio" name="r1"
                                                class="peer absolute left-0 top-0 w-full h-full opacity-0 cursor-pointer" @click="setPriceCurrency('eur')">
                                            <div
                                                class="box text-3.5 md:text-3 font-medium w-16 xl:w-14 md:w-12 h-12 xl:h-10 md:h-8 rounded-2 flex items-center justify-center text-[#888888] peer-hover:text-tertiary-950 duration-300 border border-solid border-transparent [-webkit-text-stroke:0.5px_transparent] peer-checked:pointer-events-none peer-checked:border-[#144495] peer-checked:bg-[#144495]/5 peer-checked:text-[#144495] peer-checked:[-webkit-text-stroke:0.5px_#144495]">
                                                EUR</div>
                                        </div>
                                        <div class="custom-radio relative">
                                            <input type="radio" name="r1"
                                                class="peer absolute left-0 top-0 w-full h-full opacity-0 cursor-pointer"
                                                @click="setPriceCurrency('usd')">
                                            <div
                                                class="box text-3.5 md:text-3 font-medium w-16 xl:w-14 md:w-12 h-12 xl:h-10 md:h-8 rounded-2 flex items-center justify-center text-[#888888] peer-hover:text-tertiary-950 duration-300 border border-solid border-transparent [-webkit-text-stroke:0.5px_transparent] peer-checked:pointer-events-none peer-checked:border-[#144495] peer-checked:bg-[#144495]/5 peer-checked:text-[#144495] peer-checked:[-webkit-text-stroke:0.5px_#144495]">
                                                USD</div>
                                        </div>
                                    </div>
                                    <div
                                        class="logo-wrapper relative before:left-0 before:top-1/2 before:absolute before:h-px before:-translate-y-1/2 before:w-full before:bg-black/8 mt-9 md:mt-7">
                                        <div class="image w-fit mx-auto px-6 bg-white relative z-2">
                                            <img class="max-w-[150px] w-full mx-auto h-auto object-contain object-center block bg-white"
                                                src="assets/image/trademark/logo.webp" alt="" loading="lazy">
                                        </div>
                                    </div>
                                    <div class="heading-wrapper mt-6 mb-8">
                                        <h2
                                            class="title text-center text-tertiary-950 font-semibold text-6 2xl:text-5.5 xl:text-5 lg:text-4.5">
                                            Sizi Arayalım</h2>
                                        <p class="expo text-center text-[#888888] text-3.5 font-medium">Formu doldurun,
                                            uzman danışmanlarımız sizi arasın!</p>
                                    </div>

                                    <form action="{{ route('form.project') }}" method="POST">
                                        @csrf
                                        <div class="form-wrapper grid gap-3">
                                            <input type="hidden" name="project_id" value="{{ $project->id }}">
                                            <div class="form-el relative group/form w-full">
                                                <input name="name" type="text" placeholder="Adınız Soyadınız"
                                                    class="w-full h-14 md:h-12 duration-300 rounded-4 md:rounded-3 pl-13 md:pl-10 pr-7 md:pr-5 bg-bodyColor placeholder:text-[#6D6D6D] text-tertiary-950 font-medium text-3.5 border border-solid border-transparent hover:border-[#8AA5D3]/30 focus:border-main-700 group-[&.error]/form:border-secondary-700">
                                                <div
                                                    class="icon icon-person text-3 h-3 md:text-2.5 md:h-2.5 block leading-none duration-300 absolute left-7 md:left-5 top-5.5 md:top-5 text-black/25 pointer-events-none">
                                                </div>
                                                <div
                                                    class="tooltip text-secondary-700 text-3 mt-2 hidden group-[&.error]/form:block">
                                                    Lütfen ilgili alanı doldurunuz.</div>
                                            </div>
                                            <div class="form-el relative group/form w-full">
                                                <!-- Buraya `error` classı gelince ilgili style değişiyor -->
                                                <input name="phone" type="tel" placeholder="Telefon Numaranız"
                                                    class="w-full h-14 md:h-12 duration-300 rounded-4 md:rounded-3 pl-13 md:pl-10 pr-7 md:pr-5 bg-bodyColor placeholder:text-[#6D6D6D] text-tertiary-950 font-medium text-3.5 border border-solid border-transparent hover:border-[#8AA5D3]/30 focus:border-main-700 group-[&.error]/form:border-secondary-700">
                                                <div
                                                    class="icon icon-phone text-3 h-3 md:text-2.5 md:h-2.5 block leading-none duration-300 absolute left-7 md:left-5 top-5.5 md:top-5 text-black/25 pointer-events-none">
                                                </div>
                                                <div
                                                    class="tooltip text-secondary-700 text-3 mt-2 hidden group-[&.error]/form:block">
                                                    Lütfen ilgili alanı doldurunuz.</div>
                                            </div>
                                            <div
                                                class="form-inner-group flex items-center gap-7.5 sm:flex-col sm:gap-3 lg:flex-col lg:items-start lg:gap-3">
                                                <div
                                                    class="form-el group/form w-full [&amp;_.custom-input]:justify-center my-3 md:my-2">
                                                    <!-- Buraya `error` classı gelince ilgili style değişiyor -->
                                                    <div class="custom-input relative flex items-center gap-2">
                                                        <input type="checkbox"
                                                            class="opacity-0 absolute left-0 top-0 w-full h-full peer z-2 cursor-pointer">
                                                        <div
                                                            class="box relative duration-300 w-4 aspect-square shrink-0 bg-bodyColor rounded-0.75 border border-solid border-[#8AA5D3]/30 before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:w-65/100 before:aspect-square before:rounded-0.5 before:bg-main-700 before:duration-300 before:pointer-events-none before:opacity-0 peer-hover:border-main-700 peer-checked:border-main-700 peer-checked:before:opacity-100">
                                                        </div>
                                                        <div class="text text-[#6D6D6D] text-3.5 font-medium"><a
                                                                href="#popup-gdpr" data-fancybox
                                                                class="text-[#6D6D6D] font-semibold duration-300 hover:text-main-700 relative z-3">KVKK</a>
                                                            ve <a href="#popup-gdpr" data-fancybox
                                                                class="text-[#6D6D6D] font-semibold duration-300 hover:text-main-700 relative z-3">Gizlilik
                                                                Şartları</a>’nı okudum, kabul ediyorum.</div>
                                                    </div>
                                                    <div
                                                        class="tooltip text-secondary-700 text-3 mt-2 hidden group-[&.error]/form:block">
                                                        Lütfen ilgili alanı doldurunuz.</div>
                                                </div>
                                                <div class="form-el group/form w-fit lg:w-full col-span-2 sm:col-span-1">
                                                    <!-- Buraya `loading` classı gelince ilgili style değişiyor -->
                                                    <button
                                                        class="button group/button relative flex items-center justify-center gap-4 md:gap-3 duration-300 rounded-5 md:rounded-3 after:absolute after:left-[calc(50%-13px)] xl:after:left-[calc(50%-12px)] md:after:left-[calc(50%-10px)] after:top-[calc(50%-13px)] xl:after:top-[calc(50%-12px)] md:after:top-[calc(50%-10px)] after:h-6.5 xl:after:h-6 md:after:h-5 after:aspect-square after:rounded-full after:border-0.5 after:border-solid after:border-white after:[clip-path:polygon(0%_0%,100%_0%,100%_50%,0%_50%)] after:opacity-0 after:duration-300 after:transition-opacity after:animate-spin group-[&.loading]/form:[&_.icon]:opacity-0 group-[&.loading]/form:[&_.text]:opacity-0 group-[&.loading]/form:after:opacity-100 group-[&.loading]/form:pointer-events-none h-15 xl:h-14 md:h-12 w-full px-8 sm:px-6 bg-secondary-700 hover:bg-secondary-600 text-white">

                                                        <div
                                                            class="text whitespace-nowrap font-medium text-4 md:text-3.5 transition-opacity duration-300">
                                                            Sizi Arayalım</div>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                    <div class="phone-numbers mt-12 2xl:mt-11 xl:mt-10 lg:mt-8 md:mt-6">
                                        <div class="item flex items-center justify-between gap-7.5 px-3 sm:px-2">
                                            <div class="title text-4 md:text-3.5 font-medium text-[#888888]">Mobil No</div>
                                            <a href="javascript:void(0)"
                                                class="draw-underline [--line-color:#0D1523] text-tertiary-950 text-4 md:text-3.5 font-medium">+90
                                                542 899 33 19</a>
                                        </div>
                                        <div class="split h-px w-full bg-black/8 my-4 xl:my-3.5 lg:my-3 md:my-2.5"></div>
                                        <div class="item flex items-center justify-between gap-7.5 px-3 sm:px-2">
                                            <div class="title text-4 md:text-3.5 font-medium text-[#888888]">Ofis No</div>
                                            <a href="javascript:void(0)"
                                                class="draw-underline [--line-color:#0D1523] text-tertiary-950 text-4 md:text-3.5 font-medium">+90
                                                (324) 325 30 30</a>
                                        </div>
                                        <div class="split h-px w-full bg-black/8 my-4 xl:my-3.5 lg:my-3 md:my-2.5"></div>
                                        <div class="item flex items-center justify-between gap-7.5 px-3 sm:px-2">
                                            <div class="title text-4 md:text-3.5 font-medium text-[#888888]">Dil</div>
                                            <div class="text-tertiary-950 text-4 md:text-3.5 font-medium">Türkçe, İngilizce
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="carousel-field py-15 2xl:py-14 xl:py-13 lg:py-12 md:py-11 sm:py-10">
                <div class="wrapper max-w-1440 mx-auto w-full px-7.5">
                    <div class="text-editor text-editor-main mb-12 2xl:mb-10 xl:mb-8 md:mb-6">
                        <!-- .text-editor içerisindeki style attribute değerleri frontendi tasarıma benzetmek adına eklenmiştir, backend aşamasında silinerek panel editöründen tanımlanmalıdır. -->
                        <h3 style="text-align:center;"><strong>İlginizi Çekebilir</strong></h3>
                    </div>
                    <div class="related-carousel swiper !h-auto">
                        <div class="swiper-wrapper !h-auto">
                            @foreach($projects as $randomProject)
                            <div class="swiper-slide">
                                <div
                                    class="project p-2.5 bg-white rounded-6 md:rounded-3 border border-solid border-transparent hover:border-[#8AA5D3]/35 duration-300">
                                    <a href="{{ route('frontend.project.show',$randomProject) }}"
                                        class="image group shadow-s3 block aspect-[17/12] rounded-6 md:rounded-3 overflow-hidden isolate translate-z-0"><img
                                            class="full-cover group-hover:scale-105 duration-450 translate-z-0"
                                            src="{{ $randomProject->images->first()->full_url }}" alt="" loading="lazy"></a>
                                    <div class="content-wrapper p-5 lg:p-4 mt-2.5">
                                        <a href="project-detail.html"
                                            class="title text-6 2xl:text-5.5 xl:text-5 lg:text-4.5 leading-tight text-tertiary-950 hover:text-main-700 duration-300 font-semibold mb-6 xl:mb-5 md:mb-4 block">
                                            {{ $randomProject->title }}
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
                                                    {{ $randomProject->full_address }}
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
                                                    m²</div>
                                            </div>
                                        </div>
                                        <p
                                            class="expo text-[#888888] text-4 lg:text-3.5 font-medium mt-6 xl:mt-5 md:mt-4 block">
                                            {{ $project->description }}
                                        </p>
                                        <div class="info flex items-center justify-between gap-7.5 mt-6 xl:mt-5 md:mt-4">
                                            <div
                                                class="price text-tertiary-950 flex flex-wrap items-center sm:flex-col gap-1 sm:items-start sm:gap-0">
                                                <div
                                                    class="value font-semibold text-6 2xl:text-5.5 xl:text-5 lg:text-4.5 md:text-4">
                                                    {{ $project->price }} TL</div>
                                                <div class="joint text-4 xl:text-3.5 font-medium">‘den başlayan fiyatlarla
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
                                        <a href="{{ route('frontend.project.show',$project) }}"
                                            class="button group/button flex items-center justify-center gap-4 md:gap-3 duration-300 rounded-5 md:rounded-3 h-16 xl:h-14 md:h-12 w-full px-6 bg-[#F0F2F7] hover:bg-main-100 mt-7.5 xl:mt-6 md:mt-5 text-[#2675FA]">

                                            <div class="text whitespace-nowrap font-medium text-4 md:text-3.5">Detaylı
                                                İncele</div>

                                        </a>
                                    </div>
                                </div>
                            </div>
@endforeach
                        </div>
                    </div>
                    <div
                        class="related-pagination !flex items-center justify-center gap-3 !m-0 !mt-12 2xl:!mt-10 xl:!mt-8 lg:!mt-6 !p-0 [&_span]:!m-0 [&_span]:!p-0 [&_span]: [&_span]:w-3 [&_span]:h-3 [&_span]:shrink-0 [&_span]:block [&_span]:rounded-full [&_span]:opacity-100 [&_span]:border [&_span]:border-solid [&_span]:border-main-700 [&_span]:bg-transparent [&_span]:duration-300 [&_span:hover]:bg-main-600 [&_span.swiper-pagination-bullet-active]:bg-main-700 [&_span.swiper-pagination-bullet-active]:pointer-events-none">
                    </div>
                </div>
            </section>

        </main>


    </soho-technologies>
@endsection
