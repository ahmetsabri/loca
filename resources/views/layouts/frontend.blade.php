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
</head>

<body
    class="select-none scrollbar scrollbar-w-1 scrollbar-h-1 scrollbar-thumb-main-500 scrollbar-track-main-500/10 scrollbar-thumb-rounded-none [&.scroll-deactive]:scrollbar-w-0">
    <header
        class="header-field group/header block z-80 fixed w-full left-0 top-0 duration-300 smart-menu [&.scroll-down]:bg-white [&.menu-open]:bg-white">
        <div class="top-wrapper h-11 bg-tertiary-950 relative z-2">
            <div class="wrapper max-w-1440 mx-auto w-full h-full px-7.5 flex items-center justify-between gap-4">
                <div class="left-wrapper flex items-center gap-7.5 lg:hidden">
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
                                alt="" loading="lazy"></div>
                        <span class="text text-white text-3.5 font-medium">TUR</span>
                        <div
                            class="icon icon-chevron-bottom text-2 h-2 block leading-none duration-300 text-white/55 group-hover/wrapper:text-white group-hover/wrapper:rotate-180">
                        </div>
                    </div>
                    <div
                        class="options bg-white duration-300 grid gap-1 p-2 rounded-2 absolute left-1/2 -translate-x-1/2 w-max min-w-full top-[calc(100%+8px)] before:absolute before:bottom-full before:left-0 before:w-full before:h-2 opacity-0 pointer-events-none scale-95 origin-top group-hover/wrapper:opacity-100 group-hover/wrapper:pointer-events-auto group-hover/wrapper:scale-100">
                        <a href="javascript:void(0)"
                            class="flex items-center h-7.5 border border-solid border-tertiary-950/10 rounded-2 duration-300 px-2.5 gap-2.5 hover:border-tertiary-950/30 [&.current]:bg-tertiary-950/5 [&.current]:border-transparent [&.current]:pointer-events-none current">
                            <img src="{{ asset('image/static/4.webp') }}" alt="" loading="lazy">
                            <span class="text text-3.5 font-medium text-tertiary-950">TUR</span>
                        </a>
                        <a href="javascript:void(0)"
                            class="flex items-center h-7.5 border border-solid border-tertiary-950/10 rounded-2 duration-300 px-2.5 gap-2.5 hover:border-tertiary-950/30 [&.current]:bg-tertiary-950/5 [&.current]:border-transparent [&.current]:pointer-events-none">
                            <img src="{{ asset('image/static/5.webp') }}" alt="" loading="lazy">
                            <span class="text text-3.5 font-medium text-tertiary-950">ENG</span>
                        </a>
                        <a href="javascript:void(0)"
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
                                class="icon icon-turkish-lira text-3 h-3 block leading-none duration-300 text-[#2675FA]">
                            </div>
                        </div>
                        <span class="text text-white text-3.5 font-medium">TRY</span>
                        <div
                            class="icon icon-chevron-bottom text-2 h-2 block leading-none duration-300 text-white/55 group-hover/wrapper:text-white group-hover/wrapper:rotate-180">
                        </div>
                    </div>
                    <div
                        class="options bg-white duration-300 grid gap-1 p-2 rounded-2 absolute left-1/2 -translate-x-1/2 w-max min-w-full top-[calc(100%+8px)] before:absolute before:bottom-full before:left-0 before:w-full before:h-2 opacity-0 pointer-events-none scale-95 origin-top group-hover/wrapper:opacity-100 group-hover/wrapper:pointer-events-auto group-hover/wrapper:scale-100">
                        <a href="javascript:void(0)"
                            class="flex items-center h-7.5 border border-solid border-tertiary-950/10 rounded-2 duration-300 px-2.5 gap-2.5 hover:border-tertiary-950/30 [&.current]:bg-tertiary-950/5 [&.current]:border-transparent [&.current]:pointer-events-none current">
                            <div
                                class="icon icon-turkish-lira text-3 h-3 block leading-none duration-300 text-[#2675FA]">
                            </div>
                            <span class="text text-3.5 font-medium text-tertiary-950">TRY</span>
                        </a>
                        <a href="javascript:void(0)"
                            class="flex items-center h-7.5 border border-solid border-tertiary-950/10 rounded-2 duration-300 px-2.5 gap-2.5 hover:border-tertiary-950/30 [&.current]:bg-tertiary-950/5 [&.current]:border-transparent [&.current]:pointer-events-none">
                            <div class="icon icon-euro text-3 h-3 block leading-none duration-300 text-[#2675FA]"></div>
                            <span class="text text-3.5 font-medium text-tertiary-950">EUR</span>
                        </a>
                        <a href="javascript:void(0)"
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
                <a href="index.html"
                    class="logo-wrapper duration-300 block max-w-48 2xl:max-w-42 xl:max-w-36 lg:max-w-32 md:max-w-28 sm:max-w-24 mt-1 xl:mt-0 group-[&.scroll-down.scroll-up]/header:-translate-y-20/100 xl:flex xl:items-center">
                    <img class="w-full h-auto object-contain object-center block mt-0 mb-auto xl:my-0"
                        src="{{ asset('image/trademark/logo.webp') }}" alt="" loading="lazy">
                </a>
                <div
                    class="menu-wrapper flex lg:absolute lg:left-0 lg:top-full lg:w-full lg:h-auto lg:max-h-[calc(100dvh-90px-44px)] sm:max-h-[calc(100dvh-80px-44px)] lg:group-[&.scroll-bottom]/header:max-h-[calc(100dvh-90px)] sm:group-[&.scroll-bottom]/header:max-h-[calc(100dvh-80px)] lg:bg-white lg:p-7.5 lg:overflow-x-hidden lg:overflow-y-auto lg:scrollbar lg:scrollbar-w-1 lg:scrollbar-h-1 lg:scrollbar-thumb-main-500 lg:scrollbar-track-main-500/10 lg:scrollbar-thumb-rounded-none lg:border-0 lg:border-t lg:border-solid lg:border-tertiary-950/10 lg:hidden lg:group-[&.menu-open]/header:block">
                    <ul class="menu flex gap-8 2xl:gap-7 xl:gap-6 lg:flex-col">
                        <li class="group/li flex">
                            <a href="about.html"
                                class="flex items-center text-tertiary-950 font-medium text-3.5 duration-300 group-hover/li:text-main-900 min-lg:group-[&:not(.scroll-down)]/header:text-white min-lg:group-[&:not(.scroll-down)]/header:group-hover/li:text-main-100">Hakkımızda</a>
                        </li>
                        <li class="group/li flex">
                            <a href="services.html"
                                class="flex items-center text-tertiary-950 font-medium text-3.5 duration-300 group-hover/li:text-main-900 min-lg:group-[&:not(.scroll-down)]/header:text-white min-lg:group-[&:not(.scroll-down)]/header:group-hover/li:text-main-100">Hizmetlerimiz</a>
                        </li>
                        <li class="group/li flex">
                            <a href="team.html"
                                class="flex items-center text-tertiary-950 font-medium text-3.5 duration-300 group-hover/li:text-main-900 min-lg:group-[&:not(.scroll-down)]/header:text-white min-lg:group-[&:not(.scroll-down)]/header:group-hover/li:text-main-100">Ekibimiz</a>
                        </li>
                        <li class="group/li flex">
                            <a href="portfolio-grid.html"
                                class="flex items-center text-tertiary-950 font-medium text-3.5 duration-300 group-hover/li:text-main-900 min-lg:group-[&:not(.scroll-down)]/header:text-white min-lg:group-[&:not(.scroll-down)]/header:group-hover/li:text-main-100">Porföylerimiz</a>
                        </li>
                        <li class="group/li flex">
                            <a href="projects.html"
                                class="flex items-center text-tertiary-950 font-medium text-3.5 duration-300 group-hover/li:text-main-900 min-lg:group-[&:not(.scroll-down)]/header:text-white min-lg:group-[&:not(.scroll-down)]/header:group-hover/li:text-main-100">Projeler</a>
                        </li>
                        <li class="group/li flex">
                            <a href="blog.html"
                                class="flex items-center text-tertiary-950 font-medium text-3.5 duration-300 group-hover/li:text-main-900 min-lg:group-[&:not(.scroll-down)]/header:text-white min-lg:group-[&:not(.scroll-down)]/header:group-hover/li:text-main-100">Blog</a>
                        </li>
                        <li class="group/li flex">
                            <a href="contact.html"
                                class="flex items-center text-tertiary-950 font-medium text-3.5 duration-300 group-hover/li:text-main-900 min-lg:group-[&:not(.scroll-down)]/header:text-white min-lg:group-[&:not(.scroll-down)]/header:group-hover/li:text-main-100">İletişim</a>
                        </li>
                        <li class="group/li flex">
                            <a href="loca-tv.html" class="flex items-center gap-2">
                                <span
                                    class="text text-tertiary-950 font-medium text-3.5 duration-300 group-hover/li:text-main-900 min-lg:group-[&:not(.scroll-down)]/header:text-white min-lg:group-[&:not(.scroll-down)]/header:group-hover/li:text-main-100">LOCA</span>
                                <img class="w-6 h-auto object-contain object-center block pointer-events-none"
                                    src="{{ asset('image/static/1.webp') }}" alt="" loading="lazy">
                            </a>
                        </li>
                    </ul>
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
                        <a href="buy-sell-rent.html"
                            class="button group/button relative duration-300 flex items-center justify-center h-7.5 bg-main-900 px-3 rounded-2 hover:bg-tertiary-950">
                            <span class="text text-white font-semibold text-3.5">AL, SAT KİRALA!</span>
                        </a>
                        <div class="split hidden lg:block w-full h-px bg-tertiary-950/10"></div>
                        <div class="social-wrapper flex items-center justify-center gap-4.5">
                            <a href="javascript:void(0)"
                                class="block relative text-main-900 duration-350 before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:pointer-events-none before:w-150/100 before:aspect-square before:rounded-1 before:-rotate-90 before:opacity-0 before:duration-350 before:bg-main-900 hover:before:rotate-0 hover:before:opacity-100 hover:text-white">
                                <div class="icon icon-whatsapp-1 text-4 h-4 block leading-none relative z-2"></div>
                            </a>
                            <a href="javascript:void(0)"
                                class="block relative text-main-900 duration-350 before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:pointer-events-none before:w-150/100 before:aspect-square before:rounded-1 before:-rotate-90 before:opacity-0 before:duration-350 before:bg-main-900 hover:before:rotate-0 hover:before:opacity-100 hover:text-white">
                                <div class="icon icon-facebook-1 text-4 h-4 block leading-none relative z-2"></div>
                            </a>
                            <a href="javascript:void(0)"
                                class="block relative text-main-900 duration-350 before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:pointer-events-none before:w-150/100 before:aspect-square before:rounded-1 before:-rotate-90 before:opacity-0 before:duration-350 before:bg-main-900 hover:before:rotate-0 hover:before:opacity-100 hover:text-white">
                                <div class="icon icon-instagram text-4 h-4 block leading-none relative z-2"></div>
                            </a>
                            <a href="javascript:void(0)"
                                class="block relative text-main-900 duration-350 before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:pointer-events-none before:w-150/100 before:aspect-square before:rounded-1 before:-rotate-90 before:opacity-0 before:duration-350 before:bg-main-900 hover:before:rotate-0 hover:before:opacity-100 hover:text-white">
                                <div class="icon icon-linkedin-1 text-4 h-4 block leading-none relative z-2"></div>
                            </a>
                            <a href="javascript:void(0)"
                                class="block relative text-main-900 duration-350 before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:pointer-events-none before:w-150/100 before:aspect-square before:rounded-1 before:-rotate-90 before:opacity-0 before:duration-350 before:bg-main-900 hover:before:rotate-0 hover:before:opacity-100 hover:text-white">
                                <div class="icon icon-youtube text-4 h-4 block leading-none relative z-2"></div>
                            </a>
                            <a href="javascript:void(0)"
                                class="block relative text-main-900 duration-350 before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:pointer-events-none before:w-150/100 before:aspect-square before:rounded-1 before:-rotate-90 before:opacity-0 before:duration-350 before:bg-main-900 hover:before:rotate-0 hover:before:opacity-100 hover:text-white">
                                <div class="icon icon-tiktok text-4 h-4 block leading-none relative z-2"></div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tools-wrapper flex items-center gap-3">
                    <a href="favorites.html"
                        class="button group/button relative duration-300 flex items-center h-7.5 lg:h-10 border border-solid border-tertiary-950/10 px-2 lg:px-3 rounded-2 hover:border-tertiary-950/30 group-[&:not(.scroll-down):not(.menu-open)]/header:border-white/10 group-[&:not(.scroll-down):not(.menu-open)]/header:hover:border-white/25">
                        <div
                            class="icon icon-like text-4 h-4 block leading-none duration-300 text-[#DC1C2E]  group-[&:not(.scroll-down):not(.menu-open)]/header:text-white">
                        </div>
                        <div
                            class="icon icon-liked text-4 h-4 block leading-none duration-300 text-[#DC1C2E]  group-[&:not(.scroll-down):not(.menu-open)]/header:text-white absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 opacity-0 group-hover/button:opacity-100">
                        </div>
                    </a>
                    <a href="buy-sell-rent.html"
                        class="button group/button relative duration-300 flex items-center h-7.5 bg-main-900 px-3 rounded-2 hover:bg-tertiary-950 lg:hidden">
                        <span class="text text-white font-semibold text-3.5">AL, SAT KİRALA!</span>
                    </a>
                    <div class="language-wrapper relative group/wrapper lg:hidden">
                        <div
                            class="current cursor-pointer flex items-center justify-center gap-2 p-1 pr-2.5 xl:pr-2 h-7.5 border border-solid border-tertiary-950/10 rounded-2 duration-300 group-hover/wrapper:border-tertiary-950/30 min-lg:group-[&:not(.scroll-down)]/header:border-white/10 min-lg:group-[&:not(.scroll-down)]/header:group-hover/wrapper:border-white/25">
                            <div
                                class="image-wrapper bg-tertiary-950/5 self-stretch flex items-center px-1 rounded-1 group-hover/wrapper:bg-tertiary-950/10 duration-300 min-lg:group-[&:not(.scroll-down)]/header:bg-white/5 min-lg:group-[&:not(.scroll-down)]/header:group-hover/wrapper:bg-white/10">
                                <img class="w-3.5 h-auto block pointer-events-none"
                                    src="{{ asset('image/static/4.webp') }}" alt="" loading="lazy"></div>
                            <span
                                class="text text-tertiary-950 text-3.5 font-medium duration-300 min-lg:group-[&:not(.scroll-down)]/header:text-white">TUR</span>
                            <div
                                class="icon icon-chevron-bottom text-2 h-2 block leading-none duration-300 text-tertiary-950/55 group-hover/wrapper:text-tertiary-950 group-hover/wrapper:rotate-180 xl:hidden min-lg:group-[&:not(.scroll-down)]/header:text-white/50">
                            </div>
                        </div>
                        <div
                            class="options bg-white duration-300 grid gap-1 p-2 rounded-2 absolute left-1/2 -translate-x-1/2 w-max min-w-full top-[calc(100%+8px)] before:absolute before:bottom-full before:left-0 before:w-full before:h-2 opacity-0 pointer-events-none scale-95 origin-top group-hover/wrapper:opacity-100 group-hover/wrapper:pointer-events-auto group-hover/wrapper:scale-100">
                            <a href="javascript:void(0)"
                                class="flex items-center h-7.5 border border-solid border-tertiary-950/10 rounded-2 duration-300 px-2.5 gap-2.5 hover:border-tertiary-950/30 [&.current]:bg-tertiary-950/5 [&.current]:border-transparent [&.current]:pointer-events-none current">
                                <img src="{{ asset('image/static/4.webp') }}" alt="" loading="lazy">
                                <span class="text text-3.5 font-medium text-tertiary-950">TUR</span>
                            </a>
                            <a href="javascript:void(0)"
                                class="flex items-center h-7.5 border border-solid border-tertiary-950/10 rounded-2 duration-300 px-2.5 gap-2.5 hover:border-tertiary-950/30 [&.current]:bg-tertiary-950/5 [&.current]:border-transparent [&.current]:pointer-events-none">
                                <img src="{{ asset('image/static/5.webp') }}" alt="" loading="lazy">
                                <span class="text text-3.5 font-medium text-tertiary-950">ENG</span>
                            </a>
                            <a href="javascript:void(0)"
                                class="flex items-center h-7.5 border border-solid border-tertiary-950/10 rounded-2 duration-300 px-2.5 gap-2.5 hover:border-tertiary-950/30 [&.current]:bg-tertiary-950/5 [&.current]:border-transparent [&.current]:pointer-events-none">
                                <img src="{{ asset('image/static/6.webp') }}" alt="" loading="lazy">
                                <span class="text text-3.5 font-medium text-tertiary-950">RUS</span>
                            </a>
                        </div>
                    </div>
                    <div class="currency-wrapper relative group/wrapper lg:hidden">
                        <div
                            class="current cursor-pointer flex items-center justify-center gap-2 p-1 pr-2.5 xl:pr-2 h-7.5 border border-solid border-tertiary-950/10 rounded-2 duration-300 group-hover/wrapper:border-tertiary-950/30 min-lg:group-[&:not(.scroll-down)]/header:border-white/10 min-lg:group-[&:not(.scroll-down)]/header:group-hover/wrapper:border-white/25">
                            <div
                                class="icon-wrapper bg-tertiary-950/5 self-stretch flex items-center px-1 rounded-1 group-hover/wrapper:bg-tertiary-950/10 duration-300 min-lg:group-[&:not(.scroll-down)]/header:bg-white/5 min-lg:group-[&:not(.scroll-down)]/header:group-hover/wrapper:bg-white/10">
                                <div
                                    class="icon icon-turkish-lira text-3 h-3 block leading-none duration-300 text-[#2675FA]">
                                </div>
                            </div>
                            <span
                                class="text text-tertiary-950 text-3.5 font-medium duration-300 min-lg:group-[&:not(.scroll-down)]/header:text-white">TRY</span>
                            <div
                                class="icon icon-chevron-bottom text-2 h-2 block leading-none duration-300 text-tertiary-950/55 group-hover/wrapper:text-tertiary-950 group-hover/wrapper:rotate-180 xl:hidden min-lg:group-[&:not(.scroll-down)]/header:text-white/50">
                            </div>
                        </div>
                        <div
                            class="options bg-white duration-300 grid gap-1 p-2 rounded-2 absolute left-1/2 -translate-x-1/2 w-max min-w-full top-[calc(100%+8px)] before:absolute before:bottom-full before:left-0 before:w-full before:h-2 opacity-0 pointer-events-none scale-95 origin-top group-hover/wrapper:opacity-100 group-hover/wrapper:pointer-events-auto group-hover/wrapper:scale-100">
                            <a href="javascript:void(0)"
                                class="flex items-center h-7.5 border border-solid border-tertiary-950/10 rounded-2 duration-300 px-2.5 gap-2.5 hover:border-tertiary-950/30 [&.current]:bg-tertiary-950/5 [&.current]:border-transparent [&.current]:pointer-events-none current">
                                <div
                                    class="icon icon-turkish-lira text-3 h-3 block leading-none duration-300 text-[#2675FA]">
                                </div>
                                <span class="text text-3.5 font-medium text-tertiary-950">TRY</span>
                            </a>
                            <a href="javascript:void(0)"
                                class="flex items-center h-7.5 border border-solid border-tertiary-950/10 rounded-2 duration-300 px-2.5 gap-2.5 hover:border-tertiary-950/30 [&.current]:bg-tertiary-950/5 [&.current]:border-transparent [&.current]:pointer-events-none">
                                <div class="icon icon-euro text-3 h-3 block leading-none duration-300 text-[#2675FA]">
                                </div>
                                <span class="text text-3.5 font-medium text-tertiary-950">EUR</span>
                            </a>
                            <a href="javascript:void(0)"
                                class="flex items-center h-7.5 border border-solid border-tertiary-950/10 rounded-2 duration-300 px-2.5 gap-2.5 hover:border-tertiary-950/30 [&.current]:bg-tertiary-950/5 [&.current]:border-transparent [&.current]:pointer-events-none">
                                <div class="icon icon-dolar text-3 h-3 block leading-none duration-300 text-[#2675FA]">
                                </div>
                                <span class="text text-3.5 font-medium text-tertiary-950">USD</span>
                            </a>
                        </div>
                    </div>
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
                        <a href="index.html" class="w-full h-auto md:max-w-40 md:mx-auto"><img
                                class="w-full h-auto object-contain object-center block"
                                src="{{ asset('image/static/4.webp') }}" alt="" loading="lazy"></a>
                        <a href="loca-tv.html"
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
                            <div class="icon icon-email-1 text-5 h-5 block leading-none duration-300 text-[#2675FA]">
                            </div>
                            <div class="text text-[#8AA5D3] text-3.5 font-medium"><span
                                    class="draw-el">info@remax-loca-mrs.com</span></div>
                        </a>

                        <div class="address-wrapper">
                            <a href="javascript:void(0)"
                                class="flex items-center gap-4 draw-child-underline [--line-color:#8AA5D3]">
                                <div
                                    class="icon icon-location-3 text-5 h-5 block leading-none duration-300 text-[#2675FA]">
                                </div>
                                <div class="text text-[#8AA5D3] text-3.5 font-medium"><span class="draw-el">Dumlupınar
                                        Mahallesi.1524 Sokak. Oğuz İş Merkezi No:2/1 Yenişehir / Mersin</span></div>
                            </a>
                            <div class="button-wrapper ml-4 pl-5 mt-3">
                                <a href="javascript:void(0)"
                                    class="button group/button relative duration-300 w-fit flex items-center gap-2 h-7.5 border border-solid border-[#8AA5D3]/25 px-3 rounded-2 hover:border-[#8AA5D3]/50">
                                    <div
                                        class="icon icon-map-1 text-3 h-3 block leading-none duration-300 text-[#2675FA]">
                                    </div>
                                    <div class="text text-white font-semibold text-3.5 tracking-wider">YOL TARİFİ</div>
                                </a>
                            </div>
                        </div>
                        <div class="address-wrapper">
                            <a href="javascript:void(0)"
                                class="flex items-center gap-4 draw-child-underline [--line-color:#8AA5D3]">
                                <div
                                    class="icon icon-location-3 text-5 h-5 block leading-none duration-300 text-[#2675FA]">
                                </div>
                                <div class="text text-[#8AA5D3] text-3.5 font-medium"><span class="draw-el">Deniz
                                        Mahallesi, Gazipaşa Cadddesi, Akbusi Sitesi AltıNo:56/B Mezitli / Mersin</span>
                                </div>
                            </a>
                            <div class="button-wrapper ml-4 pl-5 mt-3">
                                <a href="javascript:void(0)"
                                    class="button group/button relative duration-300 w-fit flex items-center gap-2 h-7.5 border border-solid border-[#8AA5D3]/25 px-3 rounded-2 hover:border-[#8AA5D3]/50">
                                    <div
                                        class="icon icon-map-1 text-3 h-3 block leading-none duration-300 text-[#2675FA]">
                                    </div>
                                    <div class="text text-white font-semibold text-3.5 tracking-wider">YOL TARİFİ</div>
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
                    sitedeki deneyiminizi iyileştirmek için hizmetlerimizde geliştirmeler yapmamıza yardımcı olur.
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

    <section id="popup-comment" class="hidden !bg-white !rounded-6 md:!rounded-3 !m-0 !p-0 !max-w-[620px] w-full">
        <div class="inner w-full p-11 2xl:p-10 xl:p-8 lg:p-6">
            <div class="heading flex items-center justify-between gap-7.5">
                <div class="title text-4 font-medium text-[#2675FA]">Yorum Yapın/Değerlendirin</div>
                <div
                    class="custom-fancybox-close-button group cursor-pointer relative before:absolute before:w-7.5 before:aspect-square before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2">
                    <div
                        class="icon icon-cross text-3 h-3 block leading-none duration-300 text-tertiary-950 group-hover:rotate-90 group-hover:text-[#2675FA]">
                    </div>
                </div>
            </div>
            <div class="form-outer-wrapper mt-7.5">
                <form action="">
                    <div class="form-inner-wrapper grid grid-cols-2 sm:grid-cols-1 gap-5">
                        <div class="form-el group/form w-full col-span-2 sm:col-span-1">
                            <!-- Buraya `error` classı gelince ilgili style değişiyor -->
                            <input type="text" placeholder="Adınız Soyadınız"
                                class="w-full h-13 md:h-12 duration-300 rounded-3 px-5 bg-transparent placeholder:text-[#8AA5D3] text-tertiary-950 font-medium text-3.5 border border-solid border-[#E8F0FD] hover:border-[#8AA5D3]/30 focus:border-main-700 group-[&.error]/form:border-secondary-700">
                            <div class="tooltip text-secondary-700 text-3 mt-2 hidden group-[&.error]/form:block">Lütfen
                                ilgili alanı doldurunuz.</div>
                        </div>
                        <div class="form-el group/form w-full col-span-2 sm:col-span-1 px-2">
                            <!-- Buraya `error` classı gelince ilgili style değişiyor -->
                            <div class="custom-input relative flex items-center gap-2">
                                <input type="checkbox"
                                    class="opacity-0 absolute left-0 top-0 w-full h-full peer z-2 cursor-pointer">
                                <div
                                    class="box relative duration-300 w-4 aspect-square shrink-0 bg-bodyColor rounded-0.75 border border-solid border-[#8AA5D3]/30 before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:w-65/100 before:aspect-square before:rounded-0.5 before:bg-main-700 before:duration-300 before:pointer-events-none before:opacity-0 peer-hover:border-main-700 peer-checked:border-main-700 peer-checked:before:opacity-100">
                                </div>
                                <div class="text text-[#6D6D6D] text-3.5 font-medium">Sayfada ismimi gizle</div>
                            </div>
                            <div class="tooltip text-secondary-700 text-3 mt-2 hidden group-[&.error]/form:block">Lütfen
                                ilgili alanı doldurunuz.</div>
                        </div>
                        <div class="form-el group/form w-full">
                            <!-- Buraya `error` classı gelince ilgili style değişiyor -->
                            <input type="tel" placeholder="+90 (___) ___ __ __"
                                class="w-full h-13 md:h-12 duration-300 rounded-3 px-5 bg-transparent placeholder:text-[#8AA5D3] text-tertiary-950 font-medium text-3.5 border border-solid border-[#E8F0FD] hover:border-[#8AA5D3]/30 focus:border-main-700 group-[&.error]/form:border-secondary-700">
                            <div class="tooltip text-secondary-700 text-3 mt-2 hidden group-[&.error]/form:block">Lütfen
                                ilgili alanı doldurunuz.</div>
                        </div>
                        <div class="form-el group/form w-full">
                            <!-- Buraya `error` classı gelince ilgili style değişiyor -->
                            <input type="email" placeholder="E-posta adresiniz"
                                class="w-full h-13 md:h-12 duration-300 rounded-3 px-5 bg-transparent placeholder:text-[#8AA5D3] text-tertiary-950 font-medium text-3.5 border border-solid border-[#E8F0FD] hover:border-[#8AA5D3]/30 focus:border-main-700 group-[&.error]/form:border-secondary-700">
                            <div class="tooltip text-secondary-700 text-3 mt-2 hidden group-[&.error]/form:block">Lütfen
                                ilgili alanı doldurunuz.</div>
                        </div>
                        <div class="form-el group/form w-full col-span-2 sm:col-span-1">
                            <!-- Buraya `error` classı gelince ilgili style değişiyor -->
                            <textarea placeholder="Yorumunuz"
                                class="w-full h-28 md:h-20 duration-300 rounded-3 p-5 bg-transparent placeholder:text-[#8AA5D3] text-tertiary-950 font-medium text-3.5 border border-solid border-[#E8F0FD] hover:border-[#8AA5D3]/30 focus:border-main-700 group-[&.error]/form:border-secondary-700"></textarea>
                            <div class="tooltip text-secondary-700 text-3 mt-2 hidden group-[&.error]/form:block">Lütfen
                                ilgili alanı doldurunuz.</div>
                        </div>
                        <div
                            class="ratings col-span-2 sm:col-span-1 border border-solid border-[#E8F0FD] rounded-3 p-5">
                            <div class="title text-[#224391] font-medium text-3.5 mb-5">Danışmanızı puanlayın</div>
                            <div class="list">
                                <div class="item">
                                    <div
                                        class="item flex items-center justify-between gap-7.5 sm:flex-col sm:items-start sm:gap-1.5">
                                        <div class="title text-[#224391] text-3.5">Düzenli Bilgilendirme</div>
                                        <div class="star-rating flex items-center gap-2">
                                            <div
                                                class="icon icon-star text-4 h-4 block leading-none duration-300 text-[#2675FA] cursor-pointer [&:has(+.active)+.icon~.icon]:text-[#224391] [&:is(.active)~.icon]:text-[#224391]">
                                            </div>
                                            <div
                                                class="icon icon-star text-4 h-4 block leading-none duration-300 text-[#2675FA] cursor-pointer [&:has(+.active)+.icon~.icon]:text-[#224391] [&:is(.active)~.icon]:text-[#224391]">
                                            </div>
                                            <div
                                                class="icon icon-star text-4 h-4 block leading-none duration-300 text-[#2675FA] cursor-pointer [&:has(+.active)+.icon~.icon]:text-[#224391] [&:is(.active)~.icon]:text-[#224391]">
                                            </div>
                                            <div
                                                class="icon icon-star text-4 h-4 block leading-none duration-300 text-[#2675FA] cursor-pointer [&:has(+.active)+.icon~.icon]:text-[#224391] [&:is(.active)~.icon]:text-[#224391]">
                                            </div>
                                            <div
                                                class="icon icon-star text-4 h-4 block leading-none duration-300 text-[#2675FA] cursor-pointer [&:has(+.active)+.icon~.icon]:text-[#224391] [&:is(.active)~.icon]:text-[#224391]">
                                            </div>
                                            <input type="hidden" value="5">
                                        </div>
                                    </div>
                                    <div class="split h-px w-full bg-[#E8F0FD] my-2"></div>
                                    <div
                                        class="item flex items-center justify-between gap-7.5 sm:flex-col sm:items-start sm:gap-1.5">
                                        <div class="title text-[#224391] text-3.5">Profesyonel Deneyim</div>
                                        <div class="star-rating flex items-center gap-2">
                                            <div
                                                class="icon icon-star text-4 h-4 block leading-none duration-300 text-[#2675FA] cursor-pointer [&:has(+.active)+.icon~.icon]:text-[#224391] [&:is(.active)~.icon]:text-[#224391]">
                                            </div>
                                            <div
                                                class="icon icon-star text-4 h-4 block leading-none duration-300 text-[#2675FA] cursor-pointer [&:has(+.active)+.icon~.icon]:text-[#224391] [&:is(.active)~.icon]:text-[#224391]">
                                            </div>
                                            <div
                                                class="icon icon-star text-4 h-4 block leading-none duration-300 text-[#2675FA] cursor-pointer [&:has(+.active)+.icon~.icon]:text-[#224391] [&:is(.active)~.icon]:text-[#224391]">
                                            </div>
                                            <div
                                                class="icon icon-star text-4 h-4 block leading-none duration-300 text-[#2675FA] cursor-pointer [&:has(+.active)+.icon~.icon]:text-[#224391] [&:is(.active)~.icon]:text-[#224391]">
                                            </div>
                                            <div
                                                class="icon icon-star text-4 h-4 block leading-none duration-300 text-[#2675FA] cursor-pointer [&:has(+.active)+.icon~.icon]:text-[#224391] [&:is(.active)~.icon]:text-[#224391]">
                                            </div>
                                            <input type="hidden" value="5">
                                        </div>
                                    </div>
                                    <div class="split h-px w-full bg-[#E8F0FD] my-2"></div>
                                    <div
                                        class="item flex items-center justify-between gap-7.5 sm:flex-col sm:items-start sm:gap-1.5">
                                        <div class="title text-[#224391] text-3.5">Sektör Bilgisi</div>
                                        <div class="star-rating flex items-center gap-2">
                                            <div
                                                class="icon icon-star text-4 h-4 block leading-none duration-300 text-[#2675FA] cursor-pointer [&:has(+.active)+.icon~.icon]:text-[#224391] [&:is(.active)~.icon]:text-[#224391]">
                                            </div>
                                            <div
                                                class="icon icon-star text-4 h-4 block leading-none duration-300 text-[#2675FA] cursor-pointer [&:has(+.active)+.icon~.icon]:text-[#224391] [&:is(.active)~.icon]:text-[#224391]">
                                            </div>
                                            <div
                                                class="icon icon-star text-4 h-4 block leading-none duration-300 text-[#2675FA] cursor-pointer [&:has(+.active)+.icon~.icon]:text-[#224391] [&:is(.active)~.icon]:text-[#224391]">
                                            </div>
                                            <div
                                                class="icon icon-star text-4 h-4 block leading-none duration-300 text-[#2675FA] cursor-pointer [&:has(+.active)+.icon~.icon]:text-[#224391] [&:is(.active)~.icon]:text-[#224391]">
                                            </div>
                                            <div
                                                class="icon icon-star text-4 h-4 block leading-none duration-300 text-[#2675FA] cursor-pointer [&:has(+.active)+.icon~.icon]:text-[#224391] [&:is(.active)~.icon]:text-[#224391]">
                                            </div>
                                            <input type="hidden" value="5">
                                        </div>
                                    </div>
                                    <div class="split h-px w-full bg-[#E8F0FD] my-2"></div>
                                    <div
                                        class="item flex items-center justify-between gap-7.5 sm:flex-col sm:items-start sm:gap-1.5">
                                        <div class="title text-[#224391] text-3.5">Güvenirlik</div>
                                        <div class="star-rating flex items-center gap-2">
                                            <div
                                                class="icon icon-star text-4 h-4 block leading-none duration-300 text-[#2675FA] cursor-pointer [&:has(+.active)+.icon~.icon]:text-[#224391] [&:is(.active)~.icon]:text-[#224391]">
                                            </div>
                                            <div
                                                class="icon icon-star text-4 h-4 block leading-none duration-300 text-[#2675FA] cursor-pointer [&:has(+.active)+.icon~.icon]:text-[#224391] [&:is(.active)~.icon]:text-[#224391]">
                                            </div>
                                            <div
                                                class="icon icon-star text-4 h-4 block leading-none duration-300 text-[#2675FA] cursor-pointer [&:has(+.active)+.icon~.icon]:text-[#224391] [&:is(.active)~.icon]:text-[#224391]">
                                            </div>
                                            <div
                                                class="icon icon-star text-4 h-4 block leading-none duration-300 text-[#2675FA] cursor-pointer [&:has(+.active)+.icon~.icon]:text-[#224391] [&:is(.active)~.icon]:text-[#224391]">
                                            </div>
                                            <div
                                                class="icon icon-star text-4 h-4 block leading-none duration-300 text-[#2675FA] cursor-pointer [&:has(+.active)+.icon~.icon]:text-[#224391] [&:is(.active)~.icon]:text-[#224391]">
                                            </div>
                                            <input type="hidden" value="5">
                                        </div>
                                    </div>
                                    <div class="split h-px w-full bg-[#E8F0FD] my-2"></div>
                                    <div
                                        class="item flex items-center justify-between gap-7.5 sm:flex-col sm:items-start sm:gap-1.5">
                                        <div class="title text-[#224391] text-3.5">Diğer</div>
                                        <div class="star-rating flex items-center gap-2">
                                            <div
                                                class="icon icon-star text-4 h-4 block leading-none duration-300 text-[#2675FA] cursor-pointer [&:has(+.active)+.icon~.icon]:text-[#224391] [&:is(.active)~.icon]:text-[#224391]">
                                            </div>
                                            <div
                                                class="icon icon-star text-4 h-4 block leading-none duration-300 text-[#2675FA] cursor-pointer [&:has(+.active)+.icon~.icon]:text-[#224391] [&:is(.active)~.icon]:text-[#224391]">
                                            </div>
                                            <div
                                                class="icon icon-star text-4 h-4 block leading-none duration-300 text-[#2675FA] cursor-pointer [&:has(+.active)+.icon~.icon]:text-[#224391] [&:is(.active)~.icon]:text-[#224391]">
                                            </div>
                                            <div
                                                class="icon icon-star text-4 h-4 block leading-none duration-300 text-[#2675FA] cursor-pointer [&:has(+.active)+.icon~.icon]:text-[#224391] [&:is(.active)~.icon]:text-[#224391]">
                                            </div>
                                            <div
                                                class="icon icon-star text-4 h-4 block leading-none duration-300 text-[#2675FA] cursor-pointer [&:has(+.active)+.icon~.icon]:text-[#224391] [&:is(.active)~.icon]:text-[#224391]">
                                            </div>
                                            <input type="hidden" value="5">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-el group/form w-full col-span-2 sm:col-span-1">
                            <!-- Buraya `loading` classı gelince ilgili style değişiyor -->
                            <button
                                class="button group/button relative flex items-center justify-center gap-4 md:gap-3 duration-300 rounded-5 md:rounded-3 after:absolute after:left-[calc(50%-13px)] xl:after:left-[calc(50%-12px)] md:after:left-[calc(50%-10px)] after:top-[calc(50%-13px)] xl:after:top-[calc(50%-12px)] md:after:top-[calc(50%-10px)] after:h-6.5 xl:after:h-6 md:after:h-5 after:aspect-square after:rounded-full after:border-0.5 after:border-solid after:border-white after:[clip-path:polygon(0%_0%,100%_0%,100%_50%,0%_50%)] after:opacity-0 after:duration-300 after:transition-opacity after:animate-spin group-[&.loading]/form:[&_.icon]:opacity-0 group-[&.loading]/form:[&_.text]:opacity-0 group-[&.loading]/form:after:opacity-100 group-[&.loading]/form:pointer-events-none h-13 md:h-12 w-fit mr-0 ml-auto px-8 sm:px-6 bg-secondary-700 hover:bg-secondary-600 text-white">

                                <div
                                    class="text whitespace-nowrap font-medium text-4 md:text-3.5 transition-opacity duration-300">
                                    Gönder</div>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section id="popup-share-team"
        class="hidden !bg-white !rounded-6 md:!rounded-3 !m-0 !p-0 !max-w-[620px] !overflow-x-hidden !isolate w-full">
        <div class="inner w-full">
            <div
                class="heading flex items-center justify-between gap-7.5 px-11 2xl:px-10 xl:px-8 lg:px-6 pt-11 2xl:pt-10 xl:pt-8 lg:pt-6 pb-6">
                <div class="title text-4 font-medium text-[#2675FA]">Danışmanı Paylaş</div>
                <div
                    class="custom-fancybox-close-button group cursor-pointer relative before:absolute before:w-7.5 before:aspect-square before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2">
                    <div
                        class="icon icon-cross text-3 h-3 block leading-none duration-300 text-tertiary-950 group-hover:rotate-90 group-hover:text-[#2675FA]">
                    </div>
                </div>
            </div>
            <div class="info-wrapper bg-[#F2F8FD] px-11 2xl:px-10 xl:px-8 lg:px-6 py-6 flex items-center gap-7">
                <div class="image aspect-[3/4] overflow-hidden isolate rounded-3 max-w-[120px] w-full"><img
                        class="full-cover" src="{{ asset('image/other/3.webp') }}" alt="" loading="lazy"></div>
                <div class="naming">
                    <div class="name text-4 font-medium text-tertiary-950">Aslı Hekimoğlu</div>
                    <div class="position text-3.5 text-[#6D6D6D] font-medium leading-tight">Lisanslı Gayrimenkul
                        Danışmanı</div>
                </div>
            </div>
            <div
                class="share-wrapper flex-wrap p-11 2xl:p-10 xl:p-8 lg:p-6 flex items-center justify-evenly gap-7.5 sm:gap-4">
                <a href="javascript:void(0)" class="item block group">
                    <img class="w-7.5 aspect-square object-contain object-center block mx-auto"
                        src="assets/image/icon/1.webp" alt="" loading="lazy">
                    <div
                        class="text text-3 sm:text-2.5 font-medium text-tertiary-950 duration-300 group-hover:text-main-600 mt-1.5 leading-tight text-center">
                        Whatsapp</div>
                </a>
                <a href="javascript:void(0)" class="item block group">
                    <img class="w-7.5 aspect-square object-contain object-center block mx-auto"
                        src="assets/image/icon/2.webp" alt="" loading="lazy">
                    <div
                        class="text text-3 sm:text-2.5 font-medium text-tertiary-950 duration-300 group-hover:text-main-600 mt-1.5 leading-tight text-center">
                        Facebook</div>
                </a>
                <a href="javascript:void(0)" class="item block group">
                    <img class="w-7.5 aspect-square object-contain object-center block mx-auto"
                        src="{{ asset('image/icon/3.webp') }}" alt="" loading="lazy">
                    <div
                        class="text text-3 sm:text-2.5 font-medium text-tertiary-950 duration-300 group-hover:text-main-600 mt-1.5 leading-tight text-center">
                        X ile Paylaş</div>
                </a>
                <a href="javascript:void(0)" class="item block group">
                    <img class="w-7.5 aspect-square object-contain object-center block mx-auto"
                        src="assets/image/icon/4.webp" alt="" loading="lazy">
                    <div
                        class="text text-3 sm:text-2.5 font-medium text-tertiary-950 duration-300 group-hover:text-main-600 mt-1.5 leading-tight text-center">
                        E-posta</div>
                </a>
                <a href="javascript:void(0)" class="item block group">
                    <img class="w-7.5 aspect-square object-contain object-center block mx-auto"
                        src="assets/image/icon/5.webp" alt="" loading="lazy">
                    <div
                        class="text text-3 sm:text-2.5 font-medium text-tertiary-950 duration-300 group-hover:text-main-600 mt-1.5 leading-tight text-center">
                        SMS</div>
                </a>
            </div>
            <div class="copy-wrapper px-11 2xl:px-10 xl:px-8 lg:px-6 pb-11 2xl:pb-10 xl:pb-8 lg:pb-6 pt-6 bg-[#F2F8FD]">
                <div class="title text-4 md:text-3.5 font-medium text-[#2675FA] mb-3">Bağlantıyı kopyalayın</div>
                <div
                    class="link-wrapper bg-white h-14 rounded-4 md:rounded-3 flex items-center justify-between pl-6 pr-1 py-1 gap-6">
                    <div class="link w-[calc(100%-72px)] text-3.5 font-medium text-tertiary-950"><span
                            class="line-clamp-1">https://www.remax.com.tr/danisman/10941-467/cagri-akbas</span></div>
                    <button
                        class="h-full shrink-0 relative copy-link group aspect-square rounded-3 bg-[#E8F0FD] flex items-center justify-center duration-300 hover:bg-main-100">
                        <div class="icon icon-copy text-4 h-4 block leading-none duration-300 text-[#2675FA]"></div>
                        <div
                            class="tooltip bg-[#0B90F3] text-white absolute px-3 leading-none rounded-2 left-1/2 -translate-x-1/2 bottom-[calc(100%+15px)] translate-y-[-5px] pointer-events-none opacity-0 ease-manidar backface-hidden whitespace-nowrap font-medium text-[10px] tracking-[-0.03em] py-[7.5px] group-[&.copied]:translate-y-0 group-[&.copied]:opacity-100 duration-300">
                            Link Kopyalandı</div>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section id="popup-share-project"
        class="hidden !bg-white !rounded-6 md:!rounded-3 !m-0 !p-0 !max-w-[620px] !overflow-x-hidden !isolate w-full">
        <div class="inner w-full">
            <div
                class="heading flex items-center justify-between gap-7.5 px-11 2xl:px-10 xl:px-8 lg:px-6 pt-11 2xl:pt-10 xl:pt-8 lg:pt-6 pb-6">
                <div class="title text-4 font-medium text-[#2675FA]">Proje Paylaş</div>
                <div
                    class="custom-fancybox-close-button group cursor-pointer relative before:absolute before:w-7.5 before:aspect-square before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2">
                    <div
                        class="icon icon-cross text-3 h-3 block leading-none duration-300 text-tertiary-950 group-hover:rotate-90 group-hover:text-[#2675FA]">
                    </div>
                </div>
            </div>
            <div
                class="info-wrapper bg-[#F2F8FD] px-11 2xl:px-10 xl:px-8 lg:px-6 py-6 flex items-center gap-7 sm:flex-col sm:gap-6">
                <div class="image aspect-[52/33] overflow-hidden isolate rounded-3 max-w-[230px] sm:max-w-none w-full">
                    <img class="full-cover" src="{{ asset('image/photo/12.webp') }}" alt="" loading="lazy"></div>
                <div class="naming">
                    <div class="name text-4 font-medium text-tertiary-950 mb-1">Soğucakta Projeli İnşaata Hazır Arsa
                    </div>
                    <div class="adress flex items-center gap-1">
                        <div class="icon icon-location-1 text-3.5 h-3.5 block leading-none duration-300 text-[#2675FA]">
                        </div>
                        <div class="text text-4 text-[#6D6D6D] font-medium leading-tight">Mersin/Merkez, Deniz Mah</div>
                    </div>
                </div>
            </div>
            <div
                class="share-wrapper flex-wrap p-11 2xl:p-10 xl:p-8 lg:p-6 flex items-center justify-evenly gap-7.5 sm:gap-4">
                <a href="javascript:void(0)" class="item block group">
                    <img class="w-7.5 aspect-square object-contain object-center block mx-auto"
                        src="assets/image/icon/1.webp" alt="" loading="lazy">
                    <div
                        class="text text-3 sm:text-2.5 font-medium text-tertiary-950 duration-300 group-hover:text-main-600 mt-1.5 leading-tight text-center">
                        Whatsapp</div>
                </a>
                <a href="javascript:void(0)" class="item block group">
                    <img class="w-7.5 aspect-square object-contain object-center block mx-auto"
                        src="assets/image/icon/2.webp" alt="" loading="lazy">
                    <div
                        class="text text-3 sm:text-2.5 font-medium text-tertiary-950 duration-300 group-hover:text-main-600 mt-1.5 leading-tight text-center">
                        Facebook</div>
                </a>
                <a href="javascript:void(0)" class="item block group">
                    <img class="w-7.5 aspect-square object-contain object-center block mx-auto"
                        src="{{ asset('image/icon/3.webp') }}" alt="" loading="lazy">
                    <div
                        class="text text-3 sm:text-2.5 font-medium text-tertiary-950 duration-300 group-hover:text-main-600 mt-1.5 leading-tight text-center">
                        X ile Paylaş</div>
                </a>
                <a href="javascript:void(0)" class="item block group">
                    <img class="w-7.5 aspect-square object-contain object-center block mx-auto"
                        src="assets/image/icon/4.webp" alt="" loading="lazy">
                    <div
                        class="text text-3 sm:text-2.5 font-medium text-tertiary-950 duration-300 group-hover:text-main-600 mt-1.5 leading-tight text-center">
                        E-posta</div>
                </a>
                <a href="javascript:void(0)" class="item block group">
                    <img class="w-7.5 aspect-square object-contain object-center block mx-auto"
                        src="assets/image/icon/5.webp" alt="" loading="lazy">
                    <div
                        class="text text-3 sm:text-2.5 font-medium text-tertiary-950 duration-300 group-hover:text-main-600 mt-1.5 leading-tight text-center">
                        SMS</div>
                </a>
            </div>
            <div class="copy-wrapper px-11 2xl:px-10 xl:px-8 lg:px-6 pb-11 2xl:pb-10 xl:pb-8 lg:pb-6 pt-6 bg-[#F2F8FD]">
                <div class="title text-4 md:text-3.5 font-medium text-[#2675FA] mb-3">Bağlantıyı kopyalayın</div>
                <div
                    class="link-wrapper bg-white h-14 rounded-4 md:rounded-3 flex items-center justify-between pl-6 pr-1 py-1 gap-6">
                    <div class="link w-[calc(100%-72px)] text-3.5 font-medium text-tertiary-950"><span
                            class="line-clamp-1">https://www.remax.com.tr/danisman/10941-467/cagri-akbas</span></div>
                    <button
                        class="h-full shrink-0 relative copy-link group aspect-square rounded-3 bg-[#E8F0FD] flex items-center justify-center duration-300 hover:bg-main-100">
                        <div class="icon icon-copy text-4 h-4 block leading-none duration-300 text-[#2675FA]"></div>
                        <div
                            class="tooltip bg-[#0B90F3] text-white absolute px-3 leading-none rounded-2 left-1/2 -translate-x-1/2 bottom-[calc(100%+15px)] translate-y-[-5px] pointer-events-none opacity-0 ease-manidar backface-hidden whitespace-nowrap font-medium text-[10px] tracking-[-0.03em] py-[7.5px] group-[&.copied]:translate-y-0 group-[&.copied]:opacity-100 duration-300">
                            Link Kopyalandı</div>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section id="popup-share-portfolio"
        class="hidden !bg-white !rounded-6 md:!rounded-3 !m-0 !p-0 !max-w-[620px] !overflow-x-hidden !isolate w-full">
        <div class="inner w-full">
            <div
                class="heading flex items-center justify-between gap-7.5 px-11 2xl:px-10 xl:px-8 lg:px-6 pt-11 2xl:pt-10 xl:pt-8 lg:pt-6 pb-6">
                <div class="title text-4 font-medium text-[#2675FA]">Portföy Paylaş</div>
                <div
                    class="custom-fancybox-close-button group cursor-pointer relative before:absolute before:w-7.5 before:aspect-square before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2">
                    <div
                        class="icon icon-cross text-3 h-3 block leading-none duration-300 text-tertiary-950 group-hover:rotate-90 group-hover:text-[#2675FA]">
                    </div>
                </div>
            </div>
            <div
                class="info-wrapper bg-[#F2F8FD] px-11 2xl:px-10 xl:px-8 lg:px-6 py-6 flex items-center gap-7 sm:flex-col sm:gap-6">
                <div class="image aspect-[52/33] overflow-hidden isolate rounded-3 max-w-[230px] sm:max-w-none w-full">
                    <img class="full-cover" src="{{ asset('image/other/2.webp') }}" alt="" loading="lazy"></div>
                <div class="naming">
                    <div class="name text-4 font-medium text-tertiary-950 mb-1">Soğucakta Projeli İnşaata Hazır Arsa
                    </div>
                    <div class="adress flex items-center gap-1">
                        <div class="icon icon-location-1 text-3.5 h-3.5 block leading-none duration-300 text-[#2675FA]">
                        </div>
                        <div class="text text-4 text-[#6D6D6D] font-medium leading-tight">Mersin/Merkez, Deniz Mah</div>
                    </div>
                </div>
            </div>
            <div
                class="share-wrapper flex-wrap p-11 2xl:p-10 xl:p-8 lg:p-6 flex items-center justify-evenly gap-7.5 sm:gap-4">
                <a href="javascript:void(0)" class="item block group">
                    <img class="w-7.5 aspect-square object-contain object-center block mx-auto"
                        src="assets/image/icon/1.webp" alt="" loading="lazy">
                    <div
                        class="text text-3 sm:text-2.5 font-medium text-tertiary-950 duration-300 group-hover:text-main-600 mt-1.5 leading-tight text-center">
                        Whatsapp</div>
                </a>
                <a href="javascript:void(0)" class="item block group">
                    <img class="w-7.5 aspect-square object-contain object-center block mx-auto"
                        src="assets/image/icon/2.webp" alt="" loading="lazy">
                    <div
                        class="text text-3 sm:text-2.5 font-medium text-tertiary-950 duration-300 group-hover:text-main-600 mt-1.5 leading-tight text-center">
                        Facebook</div>
                </a>
                <a href="javascript:void(0)" class="item block group">
                    <img class="w-7.5 aspect-square object-contain object-center block mx-auto"
                        src="{{ asset('image/icon/3.webp') }}" alt="" loading="lazy">
                    <div
                        class="text text-3 sm:text-2.5 font-medium text-tertiary-950 duration-300 group-hover:text-main-600 mt-1.5 leading-tight text-center">
                        X ile Paylaş</div>
                </a>
                <a href="javascript:void(0)" class="item block group">
                    <img class="w-7.5 aspect-square object-contain object-center block mx-auto"
                        src="assets/image/icon/4.webp" alt="" loading="lazy">
                    <div
                        class="text text-3 sm:text-2.5 font-medium text-tertiary-950 duration-300 group-hover:text-main-600 mt-1.5 leading-tight text-center">
                        E-posta</div>
                </a>
                <a href="javascript:void(0)" class="item block group">
                    <img class="w-7.5 aspect-square object-contain object-center block mx-auto"
                        src="assets/image/icon/5.webp" alt="" loading="lazy">
                    <div
                        class="text text-3 sm:text-2.5 font-medium text-tertiary-950 duration-300 group-hover:text-main-600 mt-1.5 leading-tight text-center">
                        SMS</div>
                </a>
            </div>
            <div class="copy-wrapper px-11 2xl:px-10 xl:px-8 lg:px-6 pb-11 2xl:pb-10 xl:pb-8 lg:pb-6 pt-6 bg-[#F2F8FD]">
                <div class="title text-4 md:text-3.5 font-medium text-[#2675FA] mb-3">Bağlantıyı kopyalayın</div>
                <div
                    class="link-wrapper bg-white h-14 rounded-4 md:rounded-3 flex items-center justify-between pl-6 pr-1 py-1 gap-6">
                    <div class="link w-[calc(100%-72px)] text-3.5 font-medium text-tertiary-950"><span
                            class="line-clamp-1">https://www.remax.com.tr/danisman/10941-467/cagri-akbas</span></div>
                    <button
                        class="h-full shrink-0 relative copy-link group aspect-square rounded-3 bg-[#E8F0FD] flex items-center justify-center duration-300 hover:bg-main-100">
                        <div class="icon icon-copy text-4 h-4 block leading-none duration-300 text-[#2675FA]"></div>
                        <div
                            class="tooltip bg-[#0B90F3] text-white absolute px-3 leading-none rounded-2 left-1/2 -translate-x-1/2 bottom-[calc(100%+15px)] translate-y-[-5px] pointer-events-none opacity-0 ease-manidar backface-hidden whitespace-nowrap font-medium text-[10px] tracking-[-0.03em] py-[7.5px] group-[&.copied]:translate-y-0 group-[&.copied]:opacity-100 duration-300">
                            Link Kopyalandı</div>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <div
        class="body-overlay fixed left-0 top-0 w-full h-full z-70 bg-black/50 pointer-events-none opacity-0 duration-350 [&.active]:opacity-100 [&.active]:pointer-events-auto">
    </div>


</body>

</html>
