<link rel="stylesheet" href={{ asset('css/belanja.css') }}>
@extends('layouts.default')
@section('title', 'Beranda')

@section('content')

    {{-- HEADER HALAMAN --}}
    <div class="header relative h-56 overflow-hidden md:h-96 shadow-lg z-20"
        style="background-image: url('{{ asset('images/BannerBeranda.png') }}')">
        <div class="absolute inset-x-[15%] bottom-5 hidden py-5 text-center text-white md:block">
            <center>
                <b class="text-2xl">First slide label</b>
                <p class="headerDesc">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    laboreet dolore magna aliqua. Ut enim ad minim veniam, quis
                </p>
            </center>
        </div>
    </div>

    {{-- CONTAINER BELANJA --}}
    <div class="containerBelanja drop-shadow-xl z-10">
        <b class="text-2xl">BELANJA COOLER</b>
        <p class="text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
            labore et dolore
            magna aliqua. Ut enim ad minim </p>
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
        <div class="containerProduk mt-10">
            <b class="title text-xl">PRODUK AC STANDING</b>
            {{-- PRODUK 1 --}}
            <div class="mt-5 grid grid-cols-3 gap-5">
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
            <div class="mt-5 grid grid-cols-3 gap-5">
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
            <div class="mt-5 grid grid-cols-3 gap-5">
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
            <div class="mt-5 grid grid-cols-3 gap-5">
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
            <div class="mt-5 grid grid-cols-3 gap-5">
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
