<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>@yield('title', 'RE/MAX Loca')</title>
    <link rel="shortcut icon" href="{{ asset('image/trademark/favicon.webp') }}" type="image/x-icon">
    <script type="module" src="{{ asset('script/script.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('style/style.css') }}">
    <link rel="stylesheet" href="{{ asset('style/utils.css') }}">
    @vite(['resources/js/app.js'])
</head>

<body
    class="select-none scrollbar scrollbar-w-1 scrollbar-h-1 scrollbar-thumb-main-500 scrollbar-track-main-500/10 scrollbar-thumb-rounded-none [&.scroll-deactive]:scrollbar-w-0">
    <header
        class="header-field group/header block z-80 fixed w-full left-0 top-0 duration-300 smart-menu [&.scroll-down]:bg-white [&.menu-open]:bg-white">
        <div class="top-wrapper h-11 bg-tertiary-950 relative z-2">
            <div class="wrapper max-w-1440 mx-auto w-full h-full px-7.5 flex items-center justify-between gap-4">
                <div class="left-wrapper flex items-center gap-7.5 lg:hidden">
                    <div class="social-wrapper flex items-center gap-4.5">
                        <a href="https://wa.me/905324275936"
                            class="block relative text-[#8AA5D3] duration-350 before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:pointer-events-none before:w-150/100 before:aspect-square before:rounded-1 before:-rotate-90 before:opacity-0 before:duration-350 before:bg-[#8AA5D3] hover:before:rotate-0 hover:before:opacity-100 hover:text-tertiary-950">
                            <div class="icon icon-whatsapp-1 text-4 h-4 block leading-none relative z-2"></div>
                        </a>
                        <a href="https://www.facebook.com/remaxloca/"
                            class="block relative text-[#8AA5D3] duration-350 before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:pointer-events-none before:w-150/100 before:aspect-square before:rounded-1 before:-rotate-90 before:opacity-0 before:duration-350 before:bg-[#8AA5D3] hover:before:rotate-0 hover:before:opacity-100 hover:text-tertiary-950">
                            <div class="icon icon-facebook-1 text-4 h-4 block leading-none relative z-2"></div>
                        </a>
                        <a href="https://www.instagram.com/remaxloca/"
                            class="block relative text-[#8AA5D3] duration-350 before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:pointer-events-none before:w-150/100 before:aspect-square before:rounded-1 before:-rotate-90 before:opacity-0 before:duration-350 before:bg-[#8AA5D3] hover:before:rotate-0 hover:before:opacity-100 hover:text-tertiary-950">
                            <div class="icon icon-instagram text-4 h-4 block leading-none relative z-2"></div>
                        </a>
                        <a href="https://www.linkedin.com/company/12904651/admin/"
                            class="block relative text-[#8AA5D3] duration-350 before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:pointer-events-none before:w-150/100 before:aspect-square before:rounded-1 before:-rotate-90 before:opacity-0 before:duration-350 before:bg-[#8AA5D3] hover:before:rotate-0 hover:before:opacity-100 hover:text-tertiary-950">
                            <div class="icon icon-linkedin-1 text-4 h-4 block leading-none relative z-2"></div>
                        </a>
                        <a href="https://www.youtube.com/channel/UCsirgnE5j4PZNOTvaMuezeQ"
                            class="block relative text-[#8AA5D3] duration-350 before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:pointer-events-none before:w-150/100 before:aspect-square before:rounded-1 before:-rotate-90 before:opacity-0 before:duration-350 before:bg-[#8AA5D3] hover:before:rotate-0 hover:before:opacity-100 hover:text-tertiary-950">
                            <div class="icon icon-youtube text-4 h-4 block leading-none relative z-2"></div>
                        </a>
                        <a href="https://www.tiktok.com/@remaxloca"
                            class="block relative text-[#8AA5D3] duration-350 before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:pointer-events-none before:w-150/100 before:aspect-square before:rounded-1 before:-rotate-90 before:opacity-0 before:duration-350 before:bg-[#8AA5D3] hover:before:rotate-0 hover:before:opacity-100 hover:text-tertiary-950">
                            <div class="icon icon-tiktok text-4 h-4 block leading-none relative z-2"></div>
                        </a>
                    </div>
                    <a href="javascript:void(0)"
                        class="text-3.5 text-white draw-child-underline [--line-color:#FFFFFF]">
                        <span class="font-semibold">TR</span>
                        <span class="font-medium draw-el">+90 543 21 21 212</span>
                    </a>
                    <a href="javascript:void(0)"
                        class="text-3.5 text-white draw-child-underline [--line-color:#FFFFFF]">
                        <span class="font-semibold">KZ</span>
                        <span class="font-medium draw-el">+90 543 21 21 212</span>
                    </a>
                    <a href="javascript:void(0)"
                        class="text-3.5 text-white draw-child-underline [--line-color:#FFFFFF]">
                        <span class="font-semibold">UA</span>
                        <span class="font-medium draw-el">+90 543 21 21 212</span>
                    </a>
                </div>
                <div class="right-wrapper flex items-center lg:hidden">
                    <a href="javascript:void(0)"
                        class="flex items-center gap-2 text-3.5 text-[#8AA5D3] draw-child-underline [--line-color:#8AA5D3]">
                        <div class="icon icon-email-1 text-4 h-4 block leading-none duration-300"></div>
                        <div class="text font-medium"><span class="draw-el">info@remaxloca.com</span></div>
                    </a>
                </div>
                <div class="language-wrapper relative group/wrapper hidden lg:block">
                    <div class="current cursor-pointer flex items-center justify-center gap-2 py-1 h-7.5">

                        <div
                            class="image-wrapper bg-white/5 self-stretch flex items-center px-1 rounded-1 group-hover/wrapper:bg-white/10 duration-300">
                            <img class="w-3.5 h-auto block pointer-events-none" src="{{ asset('image/static/4.webp') }}"
                                alt="" loading="lazy">
                            </div>
                        <span class="text text-white text-3.5 font-medium">
                            @if(app()->getLocale() == 'en')
                            ENG
                            @elseif(app()->getLocale() == 'tr')
                            TUR
                            @else
                            RUS
                            @endif
                        </span>
                        <div
                            class="icon icon-chevron-bottom text-2 h-2 block leading-none duration-300 text-white/55 group-hover/wrapper:text-white group-hover/wrapper:rotate-180">
                        </div>
                    </div>

                    <div
                        class="options bg-white duration-300 grid gap-1 p-2 rounded-2 absolute left-1/2 -translate-x-1/2 w-max min-w-full top-[calc(100%+8px)] before:absolute before:bottom-full before:left-0 before:w-full before:h-2 opacity-0 pointer-events-none scale-95 origin-top group-hover/wrapper:opacity-100 group-hover/wrapper:pointer-events-auto group-hover/wrapper:scale-100">
                        <a href="{{ route('locale','tr') }}"
                            class="flex items-center h-7.5 border border-solid border-tertiary-950/10 rounded-2 duration-300 px-2.5 gap-2.5 hover:border-tertiary-950/30 [&.current]:bg-tertiary-950/5 [&.current]:border-transparent [&.current]:pointer-events-none current">
                            <img src="{{ asset('image/static/4.webp') }}" alt="" loading="lazy">
                            <span class="text text-3.5 font-medium text-tertiary-950">TUR</span>
                        </a>
                        <a href="{{ route('locale','en') }}"
                            class="flex items-center h-7.5 border border-solid border-tertiary-950/10 rounded-2 duration-300 px-2.5 gap-2.5 hover:border-tertiary-950/30 [&.current]:bg-tertiary-950/5 [&.current]:border-transparent [&.current]:pointer-events-none">
                            <img src="{{ asset('image/static/5.webp') }}" alt="" loading="lazy">
                            <span class="text text-3.5 font-medium text-tertiary-950">ENG</span>
                        </a>
                        <a href="{{ route('locale','rus') }}"
                            class="flex items-center h-7.5 border border-solid border-tertiary-950/10 rounded-2 duration-300 px-2.5 gap-2.5 hover:border-tertiary-950/30 [&.current]:bg-tertiary-950/5 [&.current]:border-transparent [&.current]:pointer-events-none">
                            <img src="{{ asset('image/static/6.webp') }}" alt="" loading="lazy">
                            <span class="text text-3.5 font-medium text-tertiary-950">RUS</span>
                        </a>
                    </div>
                </div>
                <div class="currency-wrapper relative group/wrapper hidden lg:block">
                    <div class="current cursor-pointer flex items-center justify-center gap-2 py-1 h-7.5">
                        <div
                            class="icon-wrapper bg-white/5 self-stretch flex items-center px-1 rounded-1 group-hover/wrapper:bg-white/10 duration-300">
                            <div
                                class="icon @if(session('currency') == 'usd') icon-dolar @elseif(session('currency') == 'eur') icon-euro @else icon-turkish-lira @endif text-3 h-3 block leading-none duration-300 text-[#2675FA]">
                            </div>
                        </div>
                        {{-- PHONEEE --}}
                        <span class="text text-white text-3.5 font-medium">

                            @if(session('currency') == 'usd') USD
                            @elseif(session('currency') == 'eur') EUR @else TRY @endif
                        </span>
                        <div
                            class="icon icon-chevron-bottom text-2 h-2 block leading-none duration-300 text-white/55 group-hover/wrapper:text-white group-hover/wrapper:rotate-180">
                        </div>
                    </div>
                    <div
                        class="options bg-white duration-300 grid gap-1 p-2 rounded-2 absolute left-1/2 -translate-x-1/2 w-max min-w-full top-[calc(100%+8px)] before:absolute before:bottom-full before:left-0 before:w-full before:h-2 opacity-0 pointer-events-none scale-95 origin-top group-hover/wrapper:opacity-100 group-hover/wrapper:pointer-events-auto group-hover/wrapper:scale-100">
                        <a href="{{ route('currency','tl') }}"
                            class="flex items-center h-7.5 border border-solid border-tertiary-950/10 rounded-2 duration-300 px-2.5 gap-2.5 hover:border-tertiary-950/30 [&.current]:bg-tertiary-950/5 [&.current]:border-transparent [&.current]:pointer-events-none current">
                            <div
                                class="icon icon-turkish-lira text-3 h-3 block leading-none duration-300 text-[#2675FA]">
                            </div>
                            <span class="text text-3.5 font-medium text-tertiary-950">TRY</span>
                        </a>
                        <a href="{{ route('currency','eur') }}"
                            class="flex items-center h-7.5 border border-solid border-tertiary-950/10 rounded-2 duration-300 px-2.5 gap-2.5 hover:border-tertiary-950/30 [&.current]:bg-tertiary-950/5 [&.current]:border-transparent [&.current]:pointer-events-none">
                            <div class="icon icon-euro text-3 h-3 block leading-none duration-300 text-[#2675FA]"></div>
                            <span class="text text-3.5 font-medium text-tertiary-950">EUR</span>
                        </a>
                        <a href="{{ route('currency','usd') }}"
                            class="flex items-center h-7.5 border border-solid border-tertiary-950/10 rounded-2 duration-300 px-2.5 gap-2.5 hover:border-tertiary-950/30 [&.current]:bg-tertiary-950/5 [&.current]:border-transparent [&.current]:pointer-events-none">
                            <div class="icon icon-dolar text-3 h-3 block leading-none duration-300 text-[#2675FA]">
                            </div>
                            <span class="text text-3.5 font-medium text-tertiary-950">USD</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-wrapper h-22 sm:h-20">
            <div class="wrapper max-w-1440 mx-auto w-full h-full px-7.5 flex justify-between">
                <a href="{{ route('home') }}"
                    class="logo-wrapper duration-300 block max-w-48 2xl:max-w-42 xl:max-w-36 lg:max-w-32 md:max-w-28 sm:max-w-24 mt-1 xl:mt-0 group-[&.scroll-down.scroll-up]/header:-translate-y-20/100 xl:flex xl:items-center">
                    <img class="w-full h-auto object-contain object-center block mt-0 mb-auto xl:my-0"
                        src="{{ asset('image/trademark/logo.webp') }}" alt="" loading="lazy">
                </a>
                <div
                    class="menu-wrapper flex lg:absolute lg:left-0 lg:top-full lg:w-full lg:h-auto lg:max-h-[calc(100dvh-90px-44px)] sm:max-h-[calc(100dvh-80px-44px)] lg:group-[&.scroll-bottom]/header:max-h-[calc(100dvh-90px)] sm:group-[&.scroll-bottom]/header:max-h-[calc(100dvh-80px)] lg:bg-white lg:p-7.5 lg:overflow-x-hidden lg:overflow-y-auto lg:scrollbar lg:scrollbar-w-1 lg:scrollbar-h-1 lg:scrollbar-thumb-main-500 lg:scrollbar-track-main-500/10 lg:scrollbar-thumb-rounded-none lg:border-0 lg:border-t lg:border-solid lg:border-tertiary-950/10 lg:hidden lg:group-[&.menu-open]/header:block">
                    @if(Route::currentRouteName()=='home')
                    <ul class="menu flex gap-8 2xl:gap-7 xl:gap-6 lg:flex-col">
                        <li class="group/li flex">
                            <a href="{{ route('frontend.services') }}"
                                class="flex items-center capitalize text-tertiary-950 font-medium text-3.5 duration-300 group-hover/li:text-main-900 min-lg:group-[&:not(.scroll-down)]/header:text-white min-lg:group-[&:not(.scroll-down)]/header:group-hover/li:text-main-100">
                            {{ __('general.services') }}
                            </a>
                        </li>
                        <li class="group/li flex">
                            <a href="{{ route('frontend.about') }}"
                                class="flex items-center capitalize text-tertiary-950 font-medium text-3.5 duration-300 group-hover/li:text-main-900 min-lg:group-[&:not(.scroll-down)]/header:text-white min-lg:group-[&:not(.scroll-down)]/header:group-hover/li:text-main-100">{{ __('general.about') }}</a>
                        </li>
                        <li class="group/li flex">
                            <a href="{{ route('frontend.team.index') }}"
                                class="flex items-center capitalize text-tertiary-950 font-medium text-3.5 duration-300 group-hover/li:text-main-900 min-lg:group-[&:not(.scroll-down)]/header:text-white min-lg:group-[&:not(.scroll-down)]/header:group-hover/li:text-main-100">{{ __('general.team') }}</a>
                        </li>
                        <li class="group/li flex">
                            <a href="{{ route('portfolios',['grid_type'=>'grid']) }}"
                                class="flex items-center capitalize text-tertiary-950 font-medium text-3.5 duration-300 group-hover/li:text-main-900 min-lg:group-[&:not(.scroll-down)]/header:text-white min-lg:group-[&:not(.scroll-down)]/header:group-hover/li:text-main-100">
                            {{ __('general.portfolios') }}
                            </a>
                        </li>
                        <li class="group/li flex">
                            <a href="{{ route('projects') }}"
                                class="flex items-center capitalize text-tertiary-950 font-medium text-3.5 duration-300 group-hover/li:text-main-900 min-lg:group-[&:not(.scroll-down)]/header:text-white min-lg:group-[&:not(.scroll-down)]/header:group-hover/li:text-main-100">
                            {{ __('general.projects') }}
                            </a>
                        </li>
                        <li class="group/li flex">
                            <a href="{{ route('frontend.blog') }}"
                                class="flex items-center capitalize text-tertiary-950 font-medium text-3.5 duration-300 group-hover/li:text-main-900 min-lg:group-[&:not(.scroll-down)]/header:text-white min-lg:group-[&:not(.scroll-down)]/header:group-hover/li:text-main-100">
                            {{ __('general.blog') }}
                            </a>
                        </li>
                        <li class="group/li flex">
                            <a href="{{ route('contact') }}"
                                class="flex items-center capitalize text-tertiary-950 font-medium text-3.5 duration-300 group-hover/li:text-main-900 min-lg:group-[&:not(.scroll-down)]/header:text-white min-lg:group-[&:not(.scroll-down)]/header:group-hover/li:text-main-100">
                            {{ __('general.contact') }}
                            </a>
                        </li>
                        <li class="group/li flex">
                            <a href="{{ route('videos') }}" class="flex items-center gap-2">
                                <span
                                    class="text text-tertiary-950 font-medium text-3.5 duration-300 group-hover/li:text-main-900 min-lg:group-[&:not(.scroll-down)]/header:text-white min-lg:group-[&:not(.scroll-down)]/header:group-hover/li:text-main-100">LOCA</span>
                                <img class="w-6 h-auto object-contain object-center block pointer-events-none"
                                    src="{{ asset('image/static/1.webp') }}" alt="" loading="lazy">
                            </a>
                        </li>
                    </ul>
                    @else
                    <ul class="menu flex gap-8 2xl:gap-7 xl:gap-6 lg:flex-col">
                        <li class="group/li flex">
                            <a href="{{ route('frontend.about') }}"
                                class="flex items-center capitalize text-tertiary-950 font-medium text-3.5 duration-300 group-hover/li:text-main-900">
                                   {{ __('general.about') }}
</a>
                        </li>
                        <li class="group/li flex">
                            <a href="{{ route('frontend.services') }}"
                                class="flex items-center capitalize text-tertiary-950 font-medium text-3.5 duration-300 group-hover/li:text-main-900">
                                    {{ __('general.services') }}
</a>
                        </li>
                        <li class="group/li flex">
                            <a href="{{ route('frontend.team.index') }}"
                                class="flex items-center capitalize text-tertiary-950 font-medium text-3.5 duration-300 group-hover/li:text-main-900">{{ __('general.team') }}</a>
                        </li>
                        <li class="group/li flex">
                            <a href="{{ route('portfolios',['grid_type'=>'grid']) }}"
                                class="flex items-center capitalize text-tertiary-950 font-medium text-3.5 duration-300 group-hover/li:text-main-900">{{ __('general.portfolios') }}</a>
                        </li>
                        <li class="group/li flex">
                            <a href="{{ route('projects') }}"
                                class="flex items-center capitalize text-tertiary-950 font-medium text-3.5 duration-300 group-hover/li:text-main-900">{{ __('general.projects') }}</a>
                        </li>
                        <li class="group/li flex">
                            <a href="{{ route('frontend.blog') }}"
                                class="flex items-center capitalize text-tertiary-950 font-medium text-3.5 duration-300 group-hover/li:text-main-900">
                            {{ __('general.blog') }}

                            </a>
                        </li>
                        <li class="group/li flex">
                            <a href="{{ route('contact') }}"
                                class="flex items-center capitalize text-tertiary-950 font-medium text-3.5 duration-300 group-hover/li:text-main-900">
                            {{ __('general.contact') }}
                            </a>
                        </li>
                        <li class="group/li flex">
                            <a href="{{ route('videos') }}" class="flex items-center gap-2">
                                <span
                                    class="text text-tertiary-950 font-medium text-3.5 duration-300 group-hover/li:text-main-900">LOCA</span>
                                <img class="w-6 h-auto object-contain object-center block pointer-events-none"
                                    src="{{ asset('image/static/1.webp') }}" alt="" loading="lazy">
                            </a>
                        </li>
                    </ul>
                    @endif
                    <div class="split hidden lg:block w-full h-px my-7.5 bg-tertiary-950/10"></div>
                    <div class="content-wrapper hidden lg:grid gap-4.5">
                        <a href="javascript:void(0)"
                            class="text-3.5 text-main-900 draw-child-underline [--line-color:#144495]">
                            <span class="font-semibold">TR</span>
                            <span class="font-medium draw-el">+90 543 21 21 212</span>
                        </a>
                        <a href="javascript:void(0)"
                            class="text-3.5 text-main-900 draw-child-underline [--line-color:#144495]">
                            <span class="font-semibold">KZ</span>
                            <span class="font-medium draw-el">+90 543 21 21 212</span>
                        </a>
                        <a href="javascript:void(0)"
                            class="text-3.5 text-main-900 draw-child-underline [--line-color:#144495]">
                            <span class="font-semibold">UA</span>
                            <span class="font-medium draw-el">+90 543 21 21 212</span>
                        </a>
                        <a href="javascript:void(0)"
                            class="flex items-center gap-2 text-3.5 text-main-900 draw-child-underline [--line-color:#144495]">
                            <div class="icon icon-email-1 text-4 h-4 block leading-none duration-300"></div>
                            <div class="text font-medium"><span class="draw-el">info@remaxloca.com</span></div>
                        </a>
                        <div class="split hidden lg:block w-full h-px bg-tertiary-950/10"></div>
                        <a href="{{ route('buy_sell') }}"
                            class="button group/button relative duration-300 flex items-center justify-center h-7.5 bg-main-900 px-3 rounded-2 hover:bg-tertiary-950">
                            <span class="text text-white font-semibold text-3.5">{{ __('general.buy_sell') }}</span>
                        </a>
                        <div class="split hidden lg:block w-full h-px bg-tertiary-950/10"></div>
                        <div class="social-wrapper flex items-center justify-center gap-4.5">
                            <a href="https://wa.me/905324275936"
                                class="block relative text-[#8AA5D3] duration-350 before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:pointer-events-none before:w-150/100 before:aspect-square before:rounded-1 before:-rotate-90 before:opacity-0 before:duration-350 before:bg-[#8AA5D3] hover:before:rotate-0 hover:before:opacity-100 hover:text-tertiary-950">
                                <div class="icon icon-whatsapp-1 text-4 h-4 block leading-none relative z-2"></div>
                            </a>
                            <a href="https://www.facebook.com/remaxloca/"
                                class="block relative text-[#8AA5D3] duration-350 before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:pointer-events-none before:w-150/100 before:aspect-square before:rounded-1 before:-rotate-90 before:opacity-0 before:duration-350 before:bg-[#8AA5D3] hover:before:rotate-0 hover:before:opacity-100 hover:text-tertiary-950">
                                <div class="icon icon-facebook-1 text-4 h-4 block leading-none relative z-2"></div>
                            </a>
                            <a href="https://www.instagram.com/remaxloca/"
                                class="block relative text-[#8AA5D3] duration-350 before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:pointer-events-none before:w-150/100 before:aspect-square before:rounded-1 before:-rotate-90 before:opacity-0 before:duration-350 before:bg-[#8AA5D3] hover:before:rotate-0 hover:before:opacity-100 hover:text-tertiary-950">
                                <div class="icon icon-instagram text-4 h-4 block leading-none relative z-2"></div>
                            </a>
                            <a href="https://www.linkedin.com/company/12904651/admin/"
                                class="block relative text-[#8AA5D3] duration-350 before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:pointer-events-none before:w-150/100 before:aspect-square before:rounded-1 before:-rotate-90 before:opacity-0 before:duration-350 before:bg-[#8AA5D3] hover:before:rotate-0 hover:before:opacity-100 hover:text-tertiary-950">
                                <div class="icon icon-linkedin-1 text-4 h-4 block leading-none relative z-2"></div>
                            </a>
                            <a href="https://www.youtube.com/channel/UCsirgnE5j4PZNOTvaMuezeQ"
                                class="block relative text-[#8AA5D3] duration-350 before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:pointer-events-none before:w-150/100 before:aspect-square before:rounded-1 before:-rotate-90 before:opacity-0 before:duration-350 before:bg-[#8AA5D3] hover:before:rotate-0 hover:before:opacity-100 hover:text-tertiary-950">
                                <div class="icon icon-youtube text-4 h-4 block leading-none relative z-2"></div>
                            </a>
                            <a href="https://www.tiktok.com/@remaxloca"
                                class="block relative text-[#8AA5D3] duration-350 before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:pointer-events-none before:w-150/100 before:aspect-square before:rounded-1 before:-rotate-90 before:opacity-0 before:duration-350 before:bg-[#8AA5D3] hover:before:rotate-0 hover:before:opacity-100 hover:text-tertiary-950">
                                <div class="icon icon-tiktok text-4 h-4 block leading-none relative z-2"></div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tools-wrapper flex items-center gap-3">
                    {{-- <a href="favorites.html"
                        class="button group/button relative duration-300 flex items-center h-7.5 lg:h-10 border border-solid border-tertiary-950/10 px-2 lg:px-3 rounded-2 hover:border-tertiary-950/30 group-[&:not(.scroll-down):not(.menu-open)]/header:border-white/10 group-[&:not(.scroll-down):not(.menu-open)]/header:hover:border-white/25">
                        <div
                            class="icon icon-like text-4 h-4 block leading-none duration-300 text-[#DC1C2E]  group-[&:not(.scroll-down):not(.menu-open)]/header:text-white">
                        </div>
                        <div
                            class="icon icon-liked text-4 h-4 block leading-none duration-300 text-[#DC1C2E]  group-[&:not(.scroll-down):not(.menu-open)]/header:text-white absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 opacity-0 group-hover/button:opacity-100">
                        </div>
                    </a> --}}
                    <a href="{{ route('buy_sell') }}"
                        class="button group/button relative duration-300 flex items-center h-7.5 bg-main-900 px-3 rounded-2 hover:bg-tertiary-950 lg:hidden">
                        <span class="text text-white font-semibold text-3.5">{{ __('general.buy_sell') }}</span>
                    </a>

                    @if(\Route::currentRouteName() == 'home')
<div class="language-wrapper relative group/wrapper  lg:block">
        <div class="current cursor-pointer flex items-center justify-center gap-2 py-1 h-7.5">
            <div
                class="image-wrapper bg-white/5 self-stretch flex items-center px-1 rounded-1 group-hover/wrapper:bg-white/10 duration-300">
                <img class="w-3.5 h-auto block pointer-events-none" src="{{asset('image/static/'.app()->getLocale().'.webp')}}" alt="" loading="lazy">
            </div>
            <span class="text text-white text-3.5 font-medium">
            @if(app()->getLocale() == 'en')
            ENG
            @elseif(app()->getLocale() == 'tr')
            TUR
            @else
            RUS
            @endif
            </span>
            <div
                class="icon icon-chevron-bottom text-2 h-2 block leading-none duration-300 text-white/55 group-hover/wrapper:text-white group-hover/wrapper:rotate-180">
            </div>
        </div>
        <div
            class="options bg-white duration-300 grid gap-1 p-2 rounded-2 absolute left-1/2 -translate-x-1/2 w-max min-w-full top-[calc(100%+8px)] before:absolute before:bottom-full before:left-0 before:w-full before:h-2 opacity-0 pointer-events-none scale-95 origin-top group-hover/wrapper:opacity-100 group-hover/wrapper:pointer-events-auto group-hover/wrapper:scale-100">
            <a href="{{ route('locale','tr') }}"
                class="flex items-center h-7.5 border border-solid border-tertiary-950/10 rounded-2 duration-300 px-2.5 gap-2.5 hover:border-tertiary-950/30 [&.current]:bg-tertiary-950/5 [&.current]:border-transparent [&.current]:pointer-events-none @if(app()->getLocale()=='tr') current @endif">
                <img src="{{asset('image/static/4.webp')}}" alt="" loading="lazy">
                <span class="text text-3.5 font-medium text-tertiary-950">TUR</span>
            </a>
            <a href="{{ route('locale','en') }}"
                class="flex items-center h-7.5 border border-solid border-tertiary-950/10 rounded-2 duration-300 px-2.5 gap-2.5 hover:border-tertiary-950/30 [&.current]:bg-tertiary-950/5 [&.current]:border-transparent [&.current]:pointer-events-none">
                <img src="{{ asset('image/static/5.webp') }}" alt="" loading="lazy">
                <span class="text text-3.5 font-medium text-tertiary-950 @if(app()->getLocale()=='en') current @endif">ENG</span>
            </a>
            <a href="{{ route('locale','ru') }}"
                class="flex items-center h-7.5 border border-solid border-tertiary-950/10 rounded-2 duration-300 px-2.5 gap-2.5 hover:border-tertiary-950/30 [&.current]:bg-tertiary-950/5 [&.current]:border-transparent [&.current]:pointer-events-none">
                <img src="{{ asset('image/static/6.webp') }}" alt="" loading="lazy">
                <span class="text text-3.5 font-medium text-tertiary-950 @if(app()->getLocale()=='en') current @endif">RUS</span>
            </a>
        </div>
    </div>

    {{-- MAIN --}}
    <div class="currency-wrapper relative group/wrapper lg:hidden">

        <div
            class="current cursor-pointer flex items-center justify-center gap-2 p-1 pr-2.5 xl:pr-2 h-7.5 border border-solid border-tertiary-950/10 rounded-2 duration-300 group-hover/wrapper:border-tertiary-950/30 min-lg:group-[&:not(.scroll-down)]/header:border-white/10 min-lg:group-[&:not(.scroll-down)]/header:group-hover/wrapper:border-white/25">
            <div
                class="icon-wrapper bg-tertiary-950/5 self-stretch flex items-center px-1 rounded-1 group-hover/wrapper:bg-tertiary-950/10 duration-300 min-lg:group-[&:not(.scroll-down)]/header:bg-white/5 min-lg:group-[&:not(.scroll-down)]/header:group-hover/wrapper:bg-white/10">
                <div class="icon @if(session('currency') == 'usd') icon-dolar @elseif(session('currency') == 'eur') icon-euro @else icon-turkish-lira @endif text-3 h-3 block leading-none duration-300 text-[#2675FA]">
                </div>
            </div>
            <span
                class="text text-tertiary-950 text-3.5 font-medium duration-300 min-lg:group-[&:not(.scroll-down)]/header:text-white">
            @if(session('currency') == 'usd') USD
            @elseif(session('currency') == 'eur') EUR @else TRY
            @endif
            </span>
            <div
                class="icon icon-chevron-bottom text-2 h-2 block leading-none duration-300 text-tertiary-950/55 group-hover/wrapper:text-tertiary-950 group-hover/wrapper:rotate-180 xl:hidden min-lg:group-[&:not(.scroll-down)]/header:text-white/50">
            </div>
        </div>
        <div
            class="options bg-white duration-300 grid gap-1 p-2 rounded-2 absolute left-1/2 -translate-x-1/2 w-max min-w-full top-[calc(100%+8px)] before:absolute before:bottom-full before:left-0 before:w-full before:h-2 opacity-0 pointer-events-none scale-95 origin-top group-hover/wrapper:opacity-100 group-hover/wrapper:pointer-events-auto group-hover/wrapper:scale-100">
      <a href="{{ route('currency','tl') }}"
                class="flex items-center h-7.5 border border-solid border-tertiary-950/10 rounded-2 duration-300 px-2.5 gap-2.5 hover:border-tertiary-950/30 [&.current]:bg-tertiary-950/5 [&.current]:border-transparent [&.current]:pointer-events-none">
                <div class="icon icon-turkish-lira text-3 h-3 block leading-none duration-300 text-[#2675FA]">
                </div>
                <span class="text text-3.5 font-medium text-tertiary-950">TRY</span>
            </a>
            <a href="{{ route('currency','eur') }}"
                class="flex items-center h-7.5 border border-solid border-tertiary-950/10 rounded-2 duration-300 px-2.5 gap-2.5 hover:border-tertiary-950/30 [&.current]:bg-tertiary-950/5 [&.current]:border-transparent [&.current]:pointer-events-none">
                <div class="icon icon-euro text-3 h-3 block leading-none duration-300 text-[#2675FA]">
                </div>
                <span class="text text-3.5 font-medium text-tertiary-950">EUR</span>
            </a>
            <a href="{{ route('currency','usd') }}"
                class="flex items-center h-7.5 border border-solid border-tertiary-950/10 rounded-2 duration-300 px-2.5 gap-2.5 hover:border-tertiary-950/30 [&.current]:bg-tertiary-950/5 [&.current]:border-transparent [&.current]:pointer-events-none">
                <div class="icon icon-dolar text-3 h-3 block leading-none duration-300 text-[#2675FA]">
                </div>
                <span class="text text-3.5 font-medium text-tertiary-950">USD</span>
            </a>
        </div>
    </div>
                    @else
                        <div class="language-wrapper relative group/wrapper lg:hidden">
                            <div
                                class="current cursor-pointer flex items-center justify-center gap-2 p-1 pr-2.5 xl:pr-2 h-7.5 border border-solid border-tertiary-950/10 rounded-2 duration-300 group-hover/wrapper:border-tertiary-950/30 min-lg:group-[&:not(.scroll-down)]/header:border-black/10 min-lg:group-[&:not(.scroll-down)]/header:group-hover/wrapper:border-black/25">
                                <div
                                    class="image-wrapper bg-tertiary-950/5 self-stretch flex items-center px-1 rounded-1 group-hover/wrapper:bg-tertiary-950/10 duration-300 min-lg:group-[&:not(.scroll-down)]/header:bg-white/5 min-lg:group-[&:not(.scroll-down)]/header:group-hover/wrapper:bg-white/10">
                                    <img class="w-3.5 h-auto block pointer-events-none" src="{{ asset('image/static/'.app()->getLocale().'.webp') }}" alt=""
                                        loading="lazy">
                                </div>
                                <span
                                    class="text text-tertiary-950 text-3.5 font-medium duration-300 min-lg:group-[&:not(.scroll-down)]/header:text-black">

                                    @if(app()->getLocale() == 'en')
                                    ENG
                                    @elseif(app()->getLocale() == 'tr')
                                    TUR
                                    @else
                                    RUS
                                    @endif
                                </span>
                                <div
                                    class="icon icon-chevron-bottom text-2 h-2 block leading-none duration-300 text-tertiary-950/55 group-hover/wrapper:text-tertiary-950 group-hover/wrapper:rotate-180 xl:hidden min-lg:group-[&:not(.scroll-down)]/header:text-white/50">
                                </div>
                            </div>
                            <div
                                class="options bg-white duration-300 grid gap-1 p-2 rounded-2 absolute left-1/2 -translate-x-1/2 w-max min-w-full top-[calc(100%+8px)] before:absolute before:bottom-full before:left-0 before:w-full before:h-2 opacity-0 pointer-events-none scale-95 origin-top group-hover/wrapper:opacity-100 group-hover/wrapper:pointer-events-auto group-hover/wrapper:scale-100">
                                <a href="{{ route('locale','tr') }}"
                                    class="flex items-center h-7.5 border border-solid border-tertiary-950/10 rounded-2 duration-300 px-2.5 gap-2.5 hover:border-tertiary-950/30 [&.current]:bg-tertiary-950/5 [&.current]:border-transparent [&.current]:pointer-events-none @if(app()->getLocale()=='tr') current @endif">
                                    <img src="{{ asset('image/static/4.webp') }}" alt="" loading="lazy">
                                    <span class="text text-3.5 font-medium text-tertiary-950">TUR</span>
                                </a>
                                <a href="{{ route('locale','en') }}"
                                    class="flex items-center h-7.5 border border-solid border-tertiary-950/10 rounded-2 duration-300 px-2.5 gap-2.5 hover:border-tertiary-950/30 [&.current]:bg-tertiary-950/5 [&.current]:border-transparent [&.current]:pointer-events-none">
                                    <img src="{{ asset('image/static/5.webp') }}" alt="" loading="lazy">
                                    <span class="text text-3.5 font-medium text-tertiary-950 @if(app()->getLocale()=='en') current @endif">ENG</span>
                                </a>
                                <a href="{{ route('locale','ru') }}"
                                    class="flex items-center h-7.5 border border-solid border-tertiary-950/10 rounded-2 duration-300 px-2.5 gap-2.5 hover:border-tertiary-950/30 [&.current]:bg-tertiary-950/5 [&.current]:border-transparent [&.current]:pointer-events-none">
                                    <img src="{{ asset('image/static/6.webp') }}" alt="" loading="lazy">
                                    <span class="text text-3.5 font-medium text-tertiary-950 @if(app()->getLocale()=='ru') current @endif">RUS</span>
                                </a>
                            </div>
                        </div>

                        <div class="currency-wrapper relative group/wrapper lg:hidden">
                            <div
                                class="current cursor-pointer flex items-center justify-center gap-2 p-1 pr-2.5 xl:pr-2 h-7.5 border border-solid border-tertiary-950/10 rounded-2 duration-300 group-hover/wrapper:border-tertiary-950/30">
                                <div
                                    class="icon-wrapper bg-tertiary-950/5 self-stretch flex items-center px-1 rounded-1 group-hover/wrapper:bg-tertiary-950/10 duration-300">
                                    <div class="icon @if(session('currency') == 'usd') icon-dolar @elseif(session('currency') == 'eur') icon-euro @else icon-turkish-lira @endif text-3 h-3 block leading-none duration-300 text-[#2675FA]"></div>
                                </div>
                                {{-- selected currency --}}
                                <span class="text text-tertiary-950 text-3.5 font-medium duration-300">

                                    @if(session('currency') == 'usd') USD @elseif(session('currency') == 'eur') EUR @else TRY
                                    @endif
                                </span>
                                <div
                                    class="icon icon-chevron-bottom text-2 h-2 block leading-none duration-300 text-tertiary-950/55 group-hover/wrapper:text-tertiary-950 group-hover/wrapper:rotate-180 xl:hidden">
                                </div>
                            </div>
                            <div
                                class="options bg-white duration-300 grid gap-1 p-2 rounded-2 absolute left-1/2 -translate-x-1/2 w-max min-w-full top-[calc(100%+8px)] before:absolute before:bottom-full before:left-0 before:w-full before:h-2 opacity-0 pointer-events-none scale-95 origin-top group-hover/wrapper:opacity-100 group-hover/wrapper:pointer-events-auto group-hover/wrapper:scale-100">
                            <a href="{{ route('currency','tl') }}"
                                class="flex items-center h-7.5 border border-solid border-tertiary-950/10 rounded-2 duration-300 px-2.5 gap-2.5 hover:border-tertiary-950/30 [&.current]:bg-tertiary-950/5 [&.current]:border-transparent [&.current]:pointer-events-none">
                                <div class="icon icon-turkish-lira text-3 h-3 block leading-none duration-300 text-[#2675FA]"></div>
                                <span class="text text-3.5 font-medium text-tertiary-950">TRY</span>
                            </a>
                                <a href="{{ route('currency','eur') }}"
                                    class="flex items-center h-7.5 border border-solid border-tertiary-950/10 rounded-2 duration-300 px-2.5 gap-2.5 hover:border-tertiary-950/30 [&.current]:bg-tertiary-950/5 [&.current]:border-transparent [&.current]:pointer-events-none">
                                    <div class="icon icon-euro text-3 h-3 block leading-none duration-300 text-[#2675FA]"></div>
                                    <span class="text text-3.5 font-medium text-tertiary-950">EUR</span>
                                </a>
                                <a href="{{ route('currency','usd') }}"
                                    class="flex items-center h-7.5 border border-solid border-tertiary-950/10 rounded-2 duration-300 px-2.5 gap-2.5 hover:border-tertiary-950/30 [&.current]:bg-tertiary-950/5 [&.current]:border-transparent [&.current]:pointer-events-none">
                                    <div class="icon icon-dolar text-3 h-3 block leading-none duration-300 text-[#2675FA]"></div>
                                    <span class="text text-3.5 font-medium text-tertiary-950">USD</span>
                                </a>
                            </div>
                        </div>
                    @endif
                    <div
                        class="mobile-menu-trigger bg-main-900 rounded-2 group/trigger cursor-pointer hidden h-10 aspect-square lg:flex items-center justify-center px-3 hover:bg-tertiary-950 duration-300">
                        <svg class="w-full fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 318.6 222.99">
                            <path
                                class="duration-300 [transform-box:fill-box] origin-center group-[&.menu-open]/header:-rotate-45 group-[&.menu-open]/header:translate-y-[310%]"
                                d="m159.33,0C205.74,0,252.15,0,298.55.02c2.49,0,5.02,0,7.45.44,7.81,1.42,12.67,7.44,12.6,15.34-.07,7.79-4.8,13.61-12.47,15.08-2.06.4-4.22.46-6.33.46-93.69.02-187.37.02-281.06.01-10.64,0-16.3-3.74-18.26-11.91C-1.72,10.25,3.71,1.91,13.03.38,15.35,0,17.75.02,20.12.01,66.52,0,112.93,0,159.33,0Z" />
                            <path
                                class="duration-300 [transform-box:fill-box] origin-center group-[&.menu-open]/header:scale-x-0"
                                d="m159.3,95.81c46.03,0,92.06,0,138.1,0,1.75,0,3.49-.03,5.24.05,9.85.43,16.02,6.52,15.97,15.72-.06,9.2-6.24,15.16-16.15,15.56-.87.04-1.75.03-2.62.03-93.69,0-187.37,0-281.06,0-10.66,0-16.31-3.72-18.28-11.88-2.22-9.19,3.19-17.55,12.5-19.1,2.32-.39,4.72-.36,7.09-.37,46.41-.02,92.81-.01,139.22-.01Z" />
                            <path
                                class="duration-300 [transform-box:fill-box] origin-center group-[&.menu-open]/header:rotate-45 group-[&.menu-open]/header:-translate-y-[310%]"
                                d="m159.08,222.99c-46.41,0-92.81,0-139.22-.02-2.49,0-5.02-.02-7.45-.48C4.77,221.03.04,215.14.01,207.37c-.02-7.78,4.67-13.7,12.29-15.22,2.18-.43,4.46-.5,6.7-.5,93.56-.02,187.12-.02,280.68,0,1.99,0,4.01.03,5.96.36,8.02,1.35,13.03,7.39,12.96,15.43-.07,7.93-4.97,13.81-12.84,15.14-2.44.41-4.97.39-7.46.39-46.41.02-92.81.02-139.22.02Z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <soho-technologies class="block">

        <main class="main-field relative">

            @yield('content')

        </main>

        <footer class="footer-field z-10 block relative bg-tertiary-950">
            <div class="wrapper max-w-1440 mx-auto w-full px-7.5">
                <div
                    class="content-wrapper flex items-start justify-between py-15 lg:py-13 md:py-11 sm:py-9 gap-7.5 md:flex-col">
                    <div class="brand-wrapper max-w-40 grid gap-6 md:max-w-none md:w-full">
                        <a href="{{ route('home') }}" class="w-full h-auto md:max-w-40 md:mx-auto"><img
                                class="w-full h-auto object-contain object-center block"
                                src="{{ asset('image/static/2.webp') }}" alt="" loading="lazy"></a>
                        <a href="{{ route('videos') }}"
                            class="button group/button relative duration-300 flex items-center justify-center gap-3 h-14 bg-[#34425A] px-3 rounded-2 hover:bg-main-900 sm:w-ful">
                            <span class="text text-white font-medium text-6">LOCA</span>
                            <img class="w-7.5 h-auto object-contain object-center block pointer-events-none"
                                src="{{ asset('image/static/1.webp') }}" alt="" loading="lazy">
                        </a>
                    </div>
                    <div class="split w-full h-px bg-[#34425A]/75 hidden md:block"></div>
                    <div class="menu-wrapper max-w-36 md:max-w-none md:w-full">
                        <div class="title text-white font-medium text-4.5 tracking-wider">HIZLI MENÜ</div>
                        <div class="list mt-5 grid gap-1">
                            <a href="{{ route('frontend.about') }}"
                                class="draw-child-underline capitalize text-[#8AA5D3] [--line-color:#8AA5D3] font-medium text-3.5 block"><span
                                    class="draw-el">                            {{ __('general.about') }}
</span></a>
                            <a href="{{ route('frontend.services') }}"
                                class="draw-child-underline capitalize text-[#8AA5D3] [--line-color:#8AA5D3] font-medium text-3.5 block"><span
                                    class="draw-el">                            {{ __('general.contact') }}
</span></a>
                            <a href="{{ route('frontend.team.index') }}"
                                class="draw-child-underline capitalize text-[#8AA5D3] [--line-color:#8AA5D3] font-medium text-3.5 block"><span
                                    class="draw-el">{{ __('general.team') }}</span></a>
                            <a href="{{ route('career') }}"
                                class="draw-child-underline capitalize text-[#8AA5D3] [--line-color:#8AA5D3] font-medium text-3.5 block"><span
                                    class="draw-el">{{ __('general.career') }}</span></a>
                            <a href="portfolio-grid.html"
                                class="draw-child-underline capitalize text-[#8AA5D3] [--line-color:#8AA5D3] font-medium text-3.5 block"><span
                                    class="draw-el">{{ __('general.portfolios') }}</span></a>
                            <a href="{{ route('projects') }}"
                                class="draw-child-underline capitalize text-[#8AA5D3] [--line-color:#8AA5D3] font-medium text-3.5 block"><span
                                    class="draw-el">{{ __('general.projects') }}</span></a>
                            <a href="{{ route('frontend.faq') }}"
                                class="draw-child-underline capitalize text-[#8AA5D3] [--line-color:#8AA5D3] font-medium text-3.5 block"><span
                                    class="draw-el">{{ __('general.faq') }}</span></a>
                            <a href="{{ route('frontend.blog') }}"
                                class="draw-child-underline capitalize text-[#8AA5D3] [--line-color:#8AA5D3] font-medium text-3.5 block"><span
                                    class="draw-el">
                            {{ __('general.blog') }}

                                </span></a>
                            <a href="{{ route('contact') }}"
                                class="draw-child-underline capitalize text-[#8AA5D3] [--line-color:#8AA5D3] font-medium text-3.5 block"><span
                                    class="draw-el">
                            {{ __('general.contact') }}
                                </span></a>
                        </div>
                        <div class="list mt-5 grid gap-1">
                            <a href="template.html"
                                class="draw-child-underline capitalize text-[#8AA5D3] [--line-color:#8AA5D3] font-semibold text-3 block"><span
                                    class="draw-el">Aydınlatma Metni</span></a>
                            <a href="template.html"
                                class="draw-child-underline capitalize text-[#8AA5D3] [--line-color:#8AA5D3] font-semibold text-3 block"><span
                                    class="draw-el">Çerez Politikası</span></a>
                            {{-- <a href="404.html"
                                class="draw-child-underline capitalize text-[#8AA5D3] [--line-color:#8AA5D3] font-semibold text-3 block"><span
                                    class="draw-el">404</span></a> --}}
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
                            <div class="icon icon-email-1 text-5 h-5 block leading-none duration-300 text-[#2675FA]">
                            </div>
                            <div class="text text-[#8AA5D3] text-3.5 font-medium"><span
                                    class="draw-el">info@remax-loca-mrs.com</span></div>
                        </a>

                        <div class="address-wrapper">
                            <a href="https://maps.app.goo.gl/yrCwm7Dm9dxScu2K8"
                                class="flex items-center gap-4 draw-child-underline [--line-color:#8AA5D3]">
                                <div
                                    class="icon icon-location-3 text-5 h-5 block leading-none duration-300 text-[#2675FA]">
                                </div>
                                <div class="text text-[#8AA5D3] text-3.5 font-medium"><span class="draw-el">Dumlupınar
                                        Mahallesi.1524 Sokak. Oğuz İş Merkezi No:2/1 Yenişehir / Mersin</span></div>
                            </a>
                            <div class="button-wrapper ml-4 pl-5 mt-3">
                                <a href="https://maps.app.goo.gl/yrCwm7Dm9dxScu2K8"
                                    class="button group/button relative duration-300 w-fit flex items-center gap-2 h-7.5 border border-solid border-[#8AA5D3]/25 px-3 rounded-2 hover:border-[#8AA5D3]/50">
                                    <div
                                        class="icon icon-map-1 text-3 h-3 block leading-none duration-300 text-[#2675FA]">
                                    </div>
                                    <div class="text text-white font-semibold text-3.5 tracking-wider">{{ __('general.directions') }}</div>
                                </a>
                            </div>
                        </div>
                        <div class="address-wrapper">
                            <a href="https://maps.app.goo.gl/KYeR8YfndhggKMDB8"
                                class="flex items-center gap-4 draw-child-underline [--line-color:#8AA5D3]">
                                <div
                                    class="icon icon-location-3 text-5 h-5 block leading-none duration-300 text-[#2675FA]">
                                </div>
                                <div class="text text-[#8AA5D3] text-3.5 font-medium"><span class="draw-el">Deniz
                                        Mahallesi, Gazipaşa Cadddesi, Akbusi Sitesi AltıNo:56/B Mezitli / Mersin</span>
                                </div>
                            </a>
                            <div class="button-wrapper ml-4 pl-5 mt-3">
                                <a href="https://maps.app.goo.gl/KYeR8YfndhggKMDB8"
                                    class="button group/button relative duration-300 w-fit flex items-center gap-2 h-7.5 border border-solid border-[#8AA5D3]/25 px-3 rounded-2 hover:border-[#8AA5D3]/50">
                                    <div
                                        class="icon icon-map-1 text-3 h-3 block leading-none duration-300 text-[#2675FA]">
                                    </div>
<div class="text text-white font-semibold text-3.5 tracking-wider">{{ __('general.directions') }}</div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="split w-full h-px bg-[#34425A]/75 hidden md:block"></div>
                    <div class="subscribe-wrapper w-full max-w-96 lg:max-w-72 md:max-w-none md:w-full">
                        <div class="title px-5.5 flex items-center gap-3 mb-5">
                            <div
                                class="icon icon-paperplane text-6 h-6 block leading-none duration-300 text-secondary-700">
                            </div>
                            <div class="text font-semibold text-5 text-white tracking-wide">

                                {{ __('general.new_letter_signup') }}
                            </div>
                        </div>
                        <form action="" class="w-full">
                            <div class="form-wrapper w-full grid gap-4">
                                <div class="form-el group/form w-full relative">
                                    <input type="text" placeholder="{{ __('general.email') }}"
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
                            <div class="title text-3.5 font-medium text-white mb-3">{{ __('general.follow_us') }}</div>
                            <div class="social-wrapper flex items-center gap-4.5">
<a href="https://wa.me/905324275936"
    class="block relative text-[#8AA5D3] duration-350 before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:pointer-events-none before:w-150/100 before:aspect-square before:rounded-1 before:-rotate-90 before:opacity-0 before:duration-350 before:bg-[#8AA5D3] hover:before:rotate-0 hover:before:opacity-100 hover:text-tertiary-950">
    <div class="icon icon-whatsapp-1 text-4 h-4 block leading-none relative z-2"></div>
</a>
<a href="https://www.facebook.com/remaxloca/"
    class="block relative text-[#8AA5D3] duration-350 before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:pointer-events-none before:w-150/100 before:aspect-square before:rounded-1 before:-rotate-90 before:opacity-0 before:duration-350 before:bg-[#8AA5D3] hover:before:rotate-0 hover:before:opacity-100 hover:text-tertiary-950">
    <div class="icon icon-facebook-1 text-4 h-4 block leading-none relative z-2"></div>
</a>
<a href="https://www.instagram.com/remaxloca/"
    class="block relative text-[#8AA5D3] duration-350 before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:pointer-events-none before:w-150/100 before:aspect-square before:rounded-1 before:-rotate-90 before:opacity-0 before:duration-350 before:bg-[#8AA5D3] hover:before:rotate-0 hover:before:opacity-100 hover:text-tertiary-950">
    <div class="icon icon-instagram text-4 h-4 block leading-none relative z-2"></div>
</a>
<a href="https://www.linkedin.com/company/12904651/admin/"
    class="block relative text-[#8AA5D3] duration-350 before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:pointer-events-none before:w-150/100 before:aspect-square before:rounded-1 before:-rotate-90 before:opacity-0 before:duration-350 before:bg-[#8AA5D3] hover:before:rotate-0 hover:before:opacity-100 hover:text-tertiary-950">
    <div class="icon icon-linkedin-1 text-4 h-4 block leading-none relative z-2"></div>
</a>
<a href="https://www.youtube.com/channel/UCsirgnE5j4PZNOTvaMuezeQ"
    class="block relative text-[#8AA5D3] duration-350 before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:pointer-events-none before:w-150/100 before:aspect-square before:rounded-1 before:-rotate-90 before:opacity-0 before:duration-350 before:bg-[#8AA5D3] hover:before:rotate-0 hover:before:opacity-100 hover:text-tertiary-950">
    <div class="icon icon-youtube text-4 h-4 block leading-none relative z-2"></div>
</a>
<a href="https://www.tiktok.com/@remaxloca"
    class="block relative text-[#8AA5D3] duration-350 before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:pointer-events-none before:w-150/100 before:aspect-square before:rounded-1 before:-rotate-90 before:opacity-0 before:duration-350 before:bg-[#8AA5D3] hover:before:rotate-0 hover:before:opacity-100 hover:text-tertiary-950">
    <div class="icon icon-tiktok text-4 h-4 block leading-none relative z-2"></div>
</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="split w-full h-px bg-[#34425A]/75"></div>
                <div class="copyright-wrapper py-7.5">
                    <div class="text text-white text-3.5 font-medium sm:text-center">© {{ date('Y') }} Remax Loca</div>
                </div>
            </div>
        </footer>

    </soho-technologies>

    <section id="popup-gdpr" class="hidden !bg-white !rounded-none !m-0 !p-0 !max-w-768 w-full">
        <div class="inner w-full p-7.5">
            <div class="text-editor">
                <h4>KİŞİSEL VERİLERİN KORUNMASI</h4>
                <h5>İNTERNET SİTESİ ÇEREZ POLİTİKASI</h5>

                <p>Kişisel verileriniz; veri sorumlusu olarak Firma Adı (“ŞİRKET” veya Firma Adı” olarak
                    adlandırılacaktır.) tarafından işletilen (www.alanadi.com) internet sitesini ziyaret edenlerin
                    gizliliğini korumak Kurumumuzun önde gelen ilkelerindendir. Bu Çerez Kullanımı Politikası
                    (“Politika”), tüm web sitesi ziyaretçilerimize ve kullanıcılarımıza hangi tür çerezlerin hangi
                    koşullarda kullanıldığını açıklamaktadır.</p>
                <p>Çerezler, bilgisayarınız ya da mobil cihazınız üzerinden ziyaret ettiğiniz internet siteleri
                    tarafından cihazınıza veya ağ sunucusuna depolanan küçük metin dosyalarıdır.</p>
                <p>Genellikle ziyaret ettiğiniz internet sitesini kullanmanız sırasında size kişiselleştirilmiş bir
                    deneyim sunmak, sunulan hizmetleri geliştirmek ve deneyiminizi iyileştirmek için kullanılır ve bir
                    internet sitesinde gezinirken kullanım kolaylığına katkıda bulunabilir. Çerez kullanılmasını tercih
                    etmezseniz tarayıcınızın ayarlarından Çerezleri silebilir ya da engelleyebilirsiniz. Ancak bunun
                    internet sitemizi kullanımınızı etkileyebileceğini hatırlatmak isteriz. Tarayıcınızdan Çerez
                    ayarlarınızı değiştirmediğiniz sürece bu sitede çerez kullanımını kabul ettiğinizi varsayacağız.</p>

                <h6>1. ÇEREZLERDE HANGİ TÜR VERİLER İŞLENİR?</h6>
                <p>İnternet sitelerinde yer alan çerezlerde, türüne bağlı olarak, siteyi ziyaret ettiğiniz cihazdaki
                    tarama ve kullanım tercihlerinize ilişkin veriler toplanmaktadır. Bu veriler, eriştiğiniz sayfalar,
                    incelediğiniz hizmet ve ürünler, tercih ettiğiniz dil seçeneği ve diğer tercihlerinize dair
                    bilgileri kapsamaktadır.</p>

                <h6>2. ÇEREZ NEDİR ve KULLANIM AMAÇLARI NELERDİR?</h6>
                <p>Çerezler, ziyaret ettiğiniz internet siteleri tarafından tarayıcılar aracılığıyla cihazınıza veya ağ
                    sunucusuna depolanan küçük metin dosyalarıdır. Sitede tercih ettiğiniz dil ve diğer ayarları içeren
                    bu küçük metin dosyaları, siteye bir sonraki ziyaretinizde tercihlerinizin hatırlanmasına ve
                    sitedeki deneyiminizi iyileştirmek için                             {{ __('general.') }}
de geliştirmeler yapmamıza yardımcı olur.
                    Böylece bir sonraki ziyaretinizde daha iyi ve kişiselleştirilmiş bir kullanım deneyimi
                    yaşayabilirsiniz.</p>
                <p>İnternet Sitemizde çerez kullanılmasının başlıca amaçları aşağıda sıralanmaktadır:</p>
                <ul>
                    <li>İnternet sitesinin işlevselliğini ve performansını arttırmak yoluyla sizlere sunulan hizmetleri
                        geliştirmek,</li>
                    <li>İnternet Sitesini iyileştirmek ve İnternet Sitesi üzerinden yeni özellikler sunmak ve sunulan
                        özellikleri sizlerin tercihlerine göre kişiselleştirmek;</li>
                    <li>İnternet Sitesinin, sizin ve Kurum’un hukuki ve ticari güvenliğinin teminini sağlamak, Site
                        üzerinden sahte işlemlerin gerçekleştirilmesini önlemek;</li>
                    <li>5651 sayılı Internet Ortamında Yapılan Yayınların Düzenlenmesi ve Bu Yayınlar Yoluyla İşlenen
                        Suçlarla Mücadele Edilmesi Hakkında Kanun ve Internet Ortamında Yapılan Yayınların
                        Düzenlenmesine Dair Usul ve Esaslar Hakkında Yönetmelik’ten kaynaklananlar başta olmak üzere,
                        kanuni ve sözleşmesel yükümlülüklerini yerine getirmek.</li>
                </ul>

                <h5>3.İNTERNET SİTEMİZDE KULLANILAN ÇEREZ TÜRLERİ</h5>

                <h6>3.1.Oturum Çerezleri</h6>
                <p>Oturum çerezlerini ziyaretinizi süresince internet sitesinin düzgün bir şekilde çalışmasının teminini
                    sağlamaktadır. Sitelerimizin ve sizin, ziyaretinizde güvenliğini, sürekliliğini sağlamak gibi
                    amaçlarla kullanılırlar. Oturum çerezleri geçici çerezlerdir, siz tarayıcınızı kapatıp sitemize
                    tekrar geldiğinizde silinir, kalıcı değillerdir.</p>

                <h6>3.2.Kalıcı Çerezler</h6>
                <p>Bu tür çerezler tercihlerinizi hatırlamak için kullanılır ve tarayıcılar vasıtasıyla cihazınızda
                    depolanır Kalıcı çerezler, sitemizi ziyaret ettiğiniz tarayıcınızı kapattıktan veya bilgisayarınızı
                    yeniden başlattıktan sonra bile saklı kalır. Tarayıcınızın ayarlarından silinene kadar bu çerezler
                    tarayıcınızın alt klasörlerinde tutulurlar.</p>
                <p>Kalıcı çerezlerin bazı türleri; İnternet Sitesini kullanım amacınız gibi hususlar göz önünde
                    bulundurarak sizlere özel öneriler sunulması için kullanılabilmektedir.</p>
                <p>Kalıcı çerezler sayesinde İnternet Sitemizi aynı cihazla tekrardan ziyaret etmeniz durumunda,
                    cihazınızda İnternet Sitemiz tarafından oluşturulmuş bir çerez olup olmadığı kontrol edilir ve var
                    ise, sizin siteyi daha önce ziyaret ettiğiniz anlaşılır ve size iletilecek içerik bu doğrultuda
                    belirlenir ve böylelikle sizlere daha iyi bir hizmet sunulur.</p>

                <h6>3.3.Zorunlu/Teknik Çerezler</h6>
                <p>Ziyaret ettiğiniz internet sitesinin düzgün şekilde çalışabilmesi için zorunlu çerezlerdir. Bu tür
                    çerezlerin amacı, sitenin çalışmasını sağlamak yoluyla gerekli hizmet sunmaktır. Örneğin, internet
                    sitesinin güvenli bölümlerine erişmeye, özelliklerini kullanabilmeye, üzerinde gezinti yapabilmeye
                    olanak verir.</p>

                <h6>3.4.Analitik Çerezler</h6>
                <p>İnternet sitesinin kullanım şekli, ziyaret sıklığı ve sayısı, hakkında bilgi toplayan ve
                    ziyaretçilerin siteye nasıl geçtiğini gösterirler. Bu tür çerezlerin kullanım amacı, sitenin işleyiş
                    biçimini iyileştirerek performans arttırmak ve genel eğilim yönünü belirlemektir. Ziyaretçi
                    kimliklerinin tespitini sağlayabilecek verileri içermezler. Örneğin, gösterilen hata mesajı sayısı
                    veya en çok ziyaret edilen sayfaları gösterirler.</p>

                <h6>3.5.İşlevsel/Fonksiyonel Çerezler</h6>
                <p>Ziyaretçinin site içerisinde yaptığı seçimleri kaydederek bir sonraki ziyarette hatırlar. Bu tür
                    çerezlerin amacı ziyaretçilere kullanım kolaylığı sağlamaktır. Örneğin, site kullanıcısının ziyaret
                    ettiği her bir sayfada kullanıcı şifresini tekrar girmesini önler.</p>

                <h6>3.6. Hedefleme/Reklam Çerezleri</h6>
                <p>Ziyaretçilere sunulan reklamların etkinliğinin ölçülmesi ve reklamların kaç kere görüntülendiğinin
                    hesaplanmasını sağlarlar. Bu tür çerezlerin amacı, ziyaretçilerin ilgi alanlarına özelleştirilmiş
                    reklamların sunulmasıdır.</p>
                <p>Aynı şekilde, ziyaretçilerin gezinmelerine özel olarak ilgi alanlarının tespit edilmesini ve uygun
                    içeriklerin sunulmasını sağlarlar. Örneğin, ziyaretçiye gösterilen reklamın kısa süre içinde tekrar
                    gösterilmesini engeller.</p>

                <h5>4.ÇEREZ TERCİHLERİ NASIL YÖNETİLİR?</h5>
                <p>Çerezlerin kullanımına ilişkin tercihlerinizi değiştirmek ya da çerezleri engellemek veya silmek için
                    tarayıcınızın ayarlarını değiştirmeniz yeterlidir.</p>
                <p>Birçok tarayıcı çerezleri kontrol edebilmeniz için size çerezleri kabul etme veya reddetme, yalnızca
                    belirli türdeki çerezleri kabul etme ya da bir internet sitesinin cihazınıza çerez depolamayı talep
                    ettiğinde tarayıcı tarafından uyarılma seçeneği sunar.</p>
                <p>Aynı zamanda, daha önce tarayıcınıza kaydedilmiş çerezlerin silinmesi de mümkündür.</p>
                <p>Çerezleri devre dışı bırakır veya reddederseniz, bazı tercihleri manuel olarak ayarlamanız
                    gerekebilir, hesabınızı tanıyamayacağımız ve ilişkilendiremeyeceğimiz için internet sitesindeki bazı
                    özellikler ve hizmetler düzgün çalışmayabilir. Tarayıcınızın ayarlarını aşağıdaki tablodan ilgili
                    link’e tıklayarak değiştirebilirsiniz.</p>

                <h5>5.İNTERNET SİTESİ GİZLİLİK POLİTİKASI’NIN YÜRÜRLÜĞÜ</h5>
                <p>İnternet Sitesi Gizlilik Politikası …………………………………..tarihlidir. Politika’nın tümünün veya belirli
                    maddelerinin yenilenmesi durumunda Politika’nın yürürlük tarihi güncellenecektir. Gizlilik
                    Politikası Kurum’un internet sitesinde (www.alanadi.com) yayımlanır ve kişisel veri sahiplerinin
                    talebi üzerine ilgili kişilerin erişimine sunulur.</p>
                <p>Firma Adı<br>Adres: Mahalle Adı Sokak Adı. No: 1/A, 34444 İlçe Adı/İl Adı<br>Telefon: +90 216 555 55
                    55<br>E – Posta: mail@alanadi.com<br>Web Adresi: www.alanadi.com</p>
            </div>
        </div>
    </section>
    <div
        class="body-overlay fixed left-0 top-0 w-full h-full z-70 bg-black/50 pointer-events-none opacity-0 duration-350 [&.active]:opacity-100 [&.active]:pointer-events-auto">
    </div>


</body>

</html>
