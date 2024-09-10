<link rel="stylesheet" href={{ asset('css/beranda.css') }}>
@extends('layouts.default')
@section('title', 'Beranda')

@section('content')
    <div id="controls-carousel" class="relative w-full" data-carousel="static">
        <!-- Carousel wrapper -->
        <div class="relative h-48 overflow-hidden mt-16 xl:mt-0 md:h-96 xl:h-96">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                <img src="{{ asset('images/BannerBeranda.png') }}"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                <div class="absolute inset-x-[15%] bottom-5 py-5 text-center text-white block">
                    <center>
                        <b class="text-xl md:text-2xl xl:text-2xl">First slide label</b>
                        <p class="headerDesc hidden md:block xl:block">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            laboreet dolore magna aliqua. Ut enim ad minim veniam, quis
                        </p>
                    </center>
                </div>
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('images/BannerBeranda.png') }}"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                <div class="absolute inset-x-[15%] bottom-5 py-5 text-center text-white block">
                    <center>
                        <b class="text-xl md:text-2xl xl:text-2xl">First slide label</b>
                        <p class="headerDesc hidden md:block xl:block">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            laboreet dolore magna aliqua. Ut enim ad minim veniam, quis
                        </p>
                    </center>
                </div>
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('images/BannerBeranda.png') }}"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                <div class="absolute inset-x-[15%] bottom-5 py-5 text-center text-white block">
                    <center>
                        <b class="text-xl md:text-2xl xl:text-2xl">First slide label</b>
                        <p class="headerDesc hidden md:block xl:block">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            laboreet dolore magna aliqua. Ut enim ad minim veniam, quis
                        </p>
                    </center>
                </div>
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('images/BannerBeranda.png') }}"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                <div class="absolute inset-x-[15%] bottom-5 py-5 text-center text-white block">
                    <center>
                        <b class="text-xl md:text-2xl xl:text-2xl">First slide label</b>
                        <p class="headerDesc hidden md:block xl:block">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            laboreet dolore magna aliqua. Ut enim ad minim veniam, quis
                        </p>
                    </center>
                </div>
            </div>
            <!-- Item 5 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('images/BannerBeranda.png') }}"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                <div class="absolute inset-x-[15%] bottom-5 py-5 text-center text-white block">
                    <center>
                        <b class="text-xl md:text-2xl xl:text-2xl">First slide label</b>
                        <p class="headerDesc hidden md:block xl:block">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            laboreet dolore magna aliqua. Ut enim ad minim veniam, quis
                        </p>
                    </center>
                </div>
            </div>
        </div>
        <!-- Slider controls -->
        <button type="button"
            class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-10 cursor-pointer group focus:outline-none"
            data-carousel-prev>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full dark:bg-gray-800/30 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 1 1 5l4 4" />
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button"
            class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-10 cursor-pointer group focus:outline-none"
            data-carousel-next>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full dark:bg-gray-800/30 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 9 4-4-4-4" />
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>

    {{-- CONTAINER BIDANG --}}
    <div class="containerBidang drop-shadow-xl z-10">
        <div class="subtitle pb-10 md:pb-10 xl:pb-20">
            <b class="text-3xl text-white">BIDANG KAMI</b>
        </div>
        <div class="containerCard card grid gap-10 md:gap-20 xl:gap-20 md:grid-cols-2 xl:grid-cols-4">
            <a href="/service/cooler" class="card">
                <div class="iconBidang" style="background-image: url('{{ asset('images/iconAC.svg') }}')"></div>
                <div class="cardText"><b class="titleBidang text-xl">PENDINGIN RUANGAN</b></div>
                <p class="deskripsiBidang">
                    AC (Air Conditioner), FCU(Fan Coil Units), AHU(Air Handling Unit), SPLIT DUCT, AC STANDING</p>
            </a>
            <a href="/service/storage" class="card">
                <div class="iconBidang" style="background-image: url('{{ asset('images/iconColdStorage.svg') }}')"></div>
                <div class="cardText"><b class="titleBidang text-xl">COLD STORAGE</b></div>
                <p class="deskripsiBidang">
                    Melayani berbagai macam pelayanan terkait Cold Storage dan Ice Crystal</p>
            </a>
            <a href="/service/chiller" class="card">
                <div class="iconBidang" style="background-image: url('{{ asset('images/iconFan.svg') }}')"></div>
                <div class="cardText"><b class="titleBidang text-xl">WATER CHILLER & COLLING TOWER</b></div>
                <p class="deskripsiBidang">
                    Melayani berbagai macam pelayanan terkait Water Chiller dan Colling Tower</p>
            </a>
            <a href="/service/belanja" class="card">
                <div class="iconBidang" style="background-image: url('{{ asset('images/iconBag.svg') }}')"></div>
                <div class="cardText"><b class="titleBidang text-xl">BELANJA COOLER</b></div>
                <p class="deskripsiBidang">
                    Melayani pembelian kebutuhan Pendingin ruangan, Cold Storage, Water Chiller dan Colling Tower</p>
            </a>
        </div>
    </div>

    {{-- CONTAINER  KLIEN KAMI --}}
    <div class="containerKlien z-0">
        <div class="subtitle pb-10 md:pb-10 xl:pb-20">
            <b class="text-3xl">KLIEN KAMI</b>
        </div>
        <center>
            <div class="w-full grid gap-5 gap-x-40 md:grid-cols-2 xl:grid-cols-3">
                <div class="flex align-middle gap-5">
                    <div class="logoKlien" style="background-image: url('{{ asset('images/logoSutindo.webp') }}')"></div>
                    <a href="https://sutindo.com/" class="text-start self-center">PT. SUTINDO</a>
                </div>
                <div class="flex align-middle gap-5">
                    <div class="logoKlien"
                        style="background-image: url('{{ asset('images/logoTempo.svg') }}'); background-color:white; background-size:90%">
                    </div>
                    <p class="text-start self-center">PT. PRITHO (TEMPO GRUP)</p>
                </div>
                <div class="flex align-middle gap-5">
                    <div class="logoKlien" style="background-image: url('{{ asset('images/logoSmart.svg') }}')"></div>
                    <p class="text-start self-center">PT. SMART</p>
                </div>
                <div class="flex align-middle gap-5">
                    <div class="logoKlien" style="background-image: url('{{ asset('images/logoJerindo.jfif') }}')"></div>
                    <p class="text-start self-center">PT. JERINDO JAYA ABADI</p>
                </div>
                <div class="flex align-middle gap-5">
                    <div class="logoKlien" style="background-image: url('{{ asset('images/logoTechnofrooze.png') }}')">
                    </div>
                    <p class="text-start self-center">PT. TECHNOFROOZE</p>
                </div>
                <div class="flex align-middle gap-5">
                    <div class="logoKlien" style="background-image: url('{{ asset('images/logoAice.webp') }}')"></div>
                    <p class="text-start self-center">PT. AICE</p>
                </div>
                <div class="flex align-middle gap-5">
                    <div class="logoKlien" style="background-image: url('{{ asset('') }}')"></div>
                    <p class="text-start self-center">PT.</p>
                </div>
            </div>
        </center>
    </div>

    {{-- CONTAINER GALERY --}}
    <div class="containerGalery z-10">
        <div class="subtitle pb-10 md:pb-10 xl:pb-20">
            <b class="text-3xl text-white">GALERY</b>
        </div>
        <div class="containerGrid">
            <div class="gridGalery1 galery">
                <div class="galeryContent foto1">1</div>
                <div class="galeryContent foto2">2</div>
                <div class="galeryContent foto3">3</div>
            </div>
            <div class="gridGalery2 galery">
                <div class="galeryContent foto4">4</div>
                <div class="galeryContent foto5">5</div>
                <div class="galeryContent foto6">6</div>
            </div>
            <div class="gridGalery3 galery">
                <div class="galeryContent foto7">7</div>
                <div class="galeryContent foto8">8</div>
                <div class="galeryContent foto9">9</div>
            </div>
        </div>
    </div>
@endsection
