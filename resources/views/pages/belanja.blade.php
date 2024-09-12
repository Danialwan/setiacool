<link rel="stylesheet" href={{ asset('css/belanja.css') }}>
@extends('layouts.default')
@section('title', 'Beranda')

@section('content')

    {{-- HEADER HALAMAN --}}
    <div class="header relative h-56 overflow-hidden md:h-96 shadow-lg z-20"
        style="background-image: url('{{ asset('images/BannerBeranda.png') }}')">
        <div class="absolute inset-x-[15%] bottom-5 hidden py-5 text-center text-white md:block">
            <center>
                <b class="text-xl md:text-2xl xl:text-2xl">PRODUK TERJAMIN ORIGINAL DAN BERKUALITAS</b>
                <p class="headerDesc hidden md:block xl:block">
                    Menangani dengan cepat, menganalisa dengan tepat, dengan harga yang bersahabat dan ditunjang
                    dengan teknisi yang bersertifikat
                </p>
            </center>
        </div>
    </div>

    {{-- CONTAINER BELANJA --}}
    <div class="containerBelanja drop-shadow-xl z-10">
        <b class="text-2xl">BELANJA COOLER</b>
        <p class="text-lg">Produk dan spare part, AC, COLD STORAGE, WATER CHILLER, DAN COOLING TOWER yang kami sediakan terjamin keaslian, dan kualitasnya</p>
    </div>
    <div class="wrapperBelanja z-0 shadow-lg P-0">
        <div class="sidebar p-10">
            <p class="title text-lg">Filter Produk</p>
            <p class="title text-lg">Berdasarkan Jenis</p>
            <hr>
            <ul><br>
                <a href="/service/belanja"><b>AC</b></a>
                <li><a href="/service/belanja/acstanding">AC STANDING</a></li>
                <li><a href="">AC SPLIT WALL</a></li>
                <li><a href="">AC SPLIT DUCT</a></li>
                <li><a href="">AC CASETTE</a></li>
                <li><a href="">COIL FCU</a></li>
                <li><a href="">COIL AHU</a></li>
                <li><a href="">ACCESORIS,SPAREPART</a></li>
                <li><a href="">COMPRESSOR</a></li>
            </ul>
            <ul><br>
                <a href=""><b>COLD STORAGE</b></a>
                <li><a href="">FREEZER ROOM</a></li>
                <li><a href="">ABF (AIR BLAST FREEZER)</a></li>
                <li><a href="">ANTEROOM</a></li>
                <li><a href="">PERAKITAN PANEL CONTROL</a></li>
                <li><a href="">PERAKITAN CDU (CONDENSING UNIT)</a></li>
                <li><a href="">MESIN ICE CRYSTAL (IMPORT & LOKAL)</a></li>
                <li><a href="">MESIN ICE FLAKE (IMOPRT & LOKAL)</a></li>
                <li><a href="">ACCESORIS ,SPARE PART</a></li>
                <li><a href="">COMPRESSOR</a></li>
            </ul>
            <ul><br>
                <a href=""><b>WATER CHILLER & COOLING TOWER</b></a>
                <li><a href="">COMPRESSOR</a></li>
                <li><a href="">SPARE PART COOLING TOWER</a></li>
                <li><a href="">SPARE PART WATER CHILLER</a></li>
                <li><a href="">WATER CHILLER, SCROLL, SEMI HERMETIC</a></li>
            </ul>
        </div>
        <div class="containerSubmenu">
            {{-- <form class="mx-auto">
                <label for="default-search"
                    class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="search" id="default-search"
                        class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Search Mockups, Logos..." required />
                    <button type="submit"
                        class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                </div>
            </form> --}}
            <div class="mb-5 md:mb-10 xl:mb-10">
                <b class="title text-xl">MACAM MACAM PRODUK AC</b>
            </div>
            <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-5">
                <a class="submenu" href="/service/belanja/acstanding"
                    style="background-image: url('{{ asset('images/AC_STANDING.jpg') }}')">
                    <p>AC STANDING</p>
                </a>
                <a class="submenu" href="" style="background-image: url('{{ asset('images/AC_SPLIT_WALL.jfif') }}')">
                    <p>AC SPLIT WALL</p>
                </a>
                <a class="submenu" href="" style="background-image: url('{{ asset('images/Split-Ducted.jpg') }}')">
                    <p>AC SPLIT DUCT</p>
                </a>
                <a class="submenu" href="" style="background-image: url('{{ asset('images/AC_CASETTE.jpg') }}')">
                    <p>AC CASETTE</p>
                </a>
                <a class="submenu" href="" style="background-image: url('{{ asset('images/COIL FCU.webp') }}')">
                    <p>COIL FCU</p>
                </a>
                <a class="submenu" href="" style="background-image: url('{{ asset('images/COIL AHU.webp') }}')">
                    <p>COIL AHU</p>
                </a>
                <a class="submenu" href="" style="background-image: url('{{ asset('images/ACCESORIS.jpg') }}')">
                    <p class="md:text-sm xl:text-md">ACCESORIS, SPARE  PART</p>
                </a>
                <a class="submenu" href="" style="background-image: url('{{ asset('images/COMPRESSOR.jpg') }}')">
                    <p>COMPRESSOR</p>
                </a>
            </div>
            <br>
            <hr style="border: 0.5px solid #086CB6">
        </div>
        <div class="containerProduk">
            <b class="title text-xl">SEMUA PRODUK</b>
            {{-- PRODUK 1 --}}
            <div class="mt-5 grid md:grid-cols-1 xl:grid-cols-3 gap-5">
                <div class="image">
                </div>
                <div class="deskripsi col-span-2">
                    <b>LOREM IPSUM DOLOR</b>
                    <p class="text-justify">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Praesentium sed
                        corporis dolore fugit quia sint velit quisquam! Atque voluptatem, sunt molestias tempora fugit
                        provident repellendus voluptates voluptatum nobis aspernatur facere voluptatibus dolor, animi rem
                    </p>
                    <hr style="border: 0.01px solid #086bb683; margin: 10px 0">
                    <p>Dimensi produk : 20cm x 20cm</p>
                    <p>Daya : 100watt</p>
                    <p>Masa pakai produk : 1 tahun</p>
                    <p>Harga : Rp.250.000</p>
                </div>
            </div>
            {{-- PRODUK 2 --}}
            <div class="mt-5 grid md:grid-cols-1 xl:grid-cols-3 gap-5">
                <div class="image">
                </div>
                <div class="deskripsi col-span-2">
                    <b>LOREM IPSUM DOLOR</b>
                    <p class="text-justify">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Praesentium sed
                        corporis dolore fugit quia sint velit quisquam! Atque voluptatem, sunt molestias tempora fugit
                        provident repellendus voluptates voluptatum nobis aspernatur facere voluptatibus dolor, animi rem
                    </p>
                    <hr style="border: 0.01px solid #086bb683; margin: 10px 0">
                    <p>Dimensi produk : 20cm x 20cm</p>
                    <p>Daya : 100watt</p>
                    <p>Masa pakai produk : 1 tahun</p>
                    <p>Harga : Rp.250.000</p>
                </div>
            </div>
            {{-- PRODUK 3 --}}
            <div class="mt-5 grid md:grid-cols-1 xl:grid-cols-3 gap-5">
                <div class="image">
                </div>
                <div class="deskripsi col-span-2">
                    <b>LOREM IPSUM DOLOR</b>
                    <p class="text-justify">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Praesentium sed
                        corporis dolore fugit quia sint velit quisquam! Atque voluptatem, sunt molestias tempora fugit
                        provident repellendus voluptates voluptatum nobis aspernatur facere voluptatibus dolor, animi rem
                    </p>
                    <hr style="border: 0.01px solid #086bb683; margin: 10px 0">
                    <p>Dimensi produk : 20cm x 20cm</p>
                    <p>Daya : 100watt</p>
                    <p>Masa pakai produk : 1 tahun</p>
                    <p>Harga : Rp.250.000</p>
                </div>
            </div>
            {{-- PRODUK 4 --}}
            <div class="mt-5 grid md:grid-cols-1 xl:grid-cols-3 gap-5">
                <div class="image">
                </div>
                <div class="deskripsi col-span-2">
                    <b>LOREM IPSUM DOLOR</b>
                    <p class="text-justify">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Praesentium sed
                        corporis dolore fugit quia sint velit quisquam! Atque voluptatem, sunt molestias tempora fugit
                        provident repellendus voluptates voluptatum nobis aspernatur facere voluptatibus dolor, animi rem
                    </p>
                    <hr style="border: 0.01px solid #086bb683; margin: 10px 0">
                    <p>Dimensi produk : 20cm x 20cm</p>
                    <p>Daya : 100watt</p>
                    <p>Masa pakai produk : 1 tahun</p>
                    <p>Harga : Rp.250.000</p>
                </div>
            </div>
            {{-- PRODUK 5 --}}
            <div class="mt-5 grid md:grid-cols-1 xl:grid-cols-3 gap-5">
                <div class="image">
                </div>
                <div class="deskripsi col-span-2">
                    <b>LOREM IPSUM DOLOR</b>
                    <p class="text-justify">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Praesentium sed
                        corporis dolore fugit quia sint velit quisquam! Atque voluptatem, sunt molestias tempora fugit
                        provident repellendus voluptates voluptatum nobis aspernatur facere voluptatibus dolor, animi rem
                    </p>
                    <hr style="border: 0.01px solid #086bb683; margin: 10px 0">
                    <p>Dimensi produk : 20cm x 20cm</p>
                    <p>Daya : 100watt</p>
                    <p>Masa pakai produk : 1 tahun</p>
                    <p>Harga : Rp.250.000</p>
                </div>
            </div>
        </div>
    </div>
@endsection
