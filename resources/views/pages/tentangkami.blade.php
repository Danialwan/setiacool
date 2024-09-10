<link rel="stylesheet" href={{ asset('css/tentangkami.css') }}>
@extends('layouts.default')
@section('title', 'Tentang Kami')

@section('content')

    {{-- HEADER HALAMAN --}}
    <div class="header relative h-56 overflow-hidden md:h-96 shadow-lg"
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

    {{-- CONTAINER DESKRIPSI PERUSAHAAN --}}
    <div class="containerDeskripsi">
        <div class="logo" style="background-image: url('{{ asset('images/Logo Setia Cool nobg.png') }}')"></div>
        <div class="deskripsi">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
            aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
            fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
            anim id est laborum.</div>
    </div>

    {{-- CONTAINER VISI PERUSAHAAN --}}
    <div class="containerVisi shadow-lg">
        <b class="title text-3xl">VISI PERUSAHAAN</b>
        <p class="main mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
            labore et dolore magna aliqua. Ut enim ad minim </p>
    </div>

    {{-- CONTAINER MISI PERUSAHAAN --}}
    <div class="containerMisi">
        <b class="title text-3xl">MISI PERUSAHAAN</b>
        <div class="main mt-8">
            <table class="border-separate border-spacing-5">
                {{-- <thead>
                    <tr>
                      <th class="border border-slate-300 ...">State</th>
                      <th class="border border-slate-300 ...">City</th>
                    </tr>
                  </thead> --}}
                <tr>
                    <td class="nomor">1</td>
                    <td class="misi">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et
                        dolore magna aliqua. Ut enim ad minim</td>
                </tr>
                <tr>
                    <td class="nomor">2</td>
                    <td class="misi">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et
                        dolore magna aliqua. Ut enim ad minim</td>
                </tr>
                <tr>
                    <td class="nomor">3</td>
                    <td class="misi">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et
                        dolore magna aliqua. Ut enim ad minim</td>
                </tr>
            </table>
            {{-- <ul class="nomor">
                <li>1</li>
                <li>2</li>
                <li>3</li>
            </ul>
            <ul class="misi">
                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim </li>
                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim </li>
                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim </li>
            </ul> --}}
        </div>
    </div>

    {{-- CONTAINER TIM PERUSAHAAN --}}
    <div class="containerTim shadow-lg">
        <b class="title text-3xl">TIM PERUSAHAAN</b>
        <p class="main text-center mt-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut
            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
            aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
            fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
            anim id est laborum. </p>
    </div>
    <div class="containerFotoTim shadow-lg">
        <div>
            <center>
                <div class="foto" style="background-image: url('{{ asset('images/profile.jpg') }}')"></div>
                <div class="main">
                    <b class="nama">Lorem ipsum dolor sit amet</b>
                    <p class="profesi">MANAGER PROJECT</p>
                </div>
            </center>
        </div>
        <div>
            <center>
                <div class="foto" style="background-image: url('{{ asset('images/profile.jpg') }}')"></div>
                <div class="main">
                    <b class="nama">Lorem ipsum dolor sit amet</b>
                    <p class="profesi">MANAGER PROJECT</p>
                </div>
            </center>
        </div>
        <div>
            <center>
                <div class="foto" style="background-image: url('{{ asset('images/profile.jpg') }}')"></div>
                <div class="main">
                    <b class="nama">Lorem ipsum dolor sit amet</b>
                    <p class="profesi">MANAGER PROJECT</p>
                </div>
            </center>
        </div>
    </div>
@endsection
