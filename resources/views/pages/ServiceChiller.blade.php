<link rel="stylesheet" href={{ asset('css/service.css') }}>
@extends('layouts.default')
@section('title', 'Service Water Chiller & Cooling Tower')

@section('content')

    {{-- HEADER HALAMAN --}}
    <div class="header relative h-56 overflow-hidden md:h-96 shadow-lg"
        style="background-image: url('{{ asset('images/BannerBeranda.png') }}')">
        <div class="absolute inset-x-[15%] bottom-5 hidden py-5 text-center text-white md:block">
            <center>
                <b class="Headertitle text-xl md:text-2xl xl:text-2xl">PROFESIONALISME DALAM PERAWATAN DAN SERVICE WATER CHILLER DAN COOLING TOWER</b>
                <p class="headerDesc hidden md:block xl:block">
                    Spesialis jasa Service WATER CHILLER DAN COOLING TOWER bergaransi dan terpercaya, melayani Cleaning unit /maintenance preventive,
                    Bongkar pasang unit, Overhoul compressor, Pengecekkan troubleshooting, Pembuatan / perakitan unit baru.
                </p>
            </center>
        </div>
    </div>

    {{-- CONTAINER MACAM MACAM SERVICE --}}
    <div class="containerService drop-shadow-xl z-10">
        <div class="subtitle pb-20">
            <b class="text-2xl md:text-3xl xl:text-3xl justify-items-start">MACAM MACAM PELAYANAN WATER CHILLER DAN COOLING TOWER, ICE CRYSTAL</b>
        </div>
        <div class="containerCard card flex flex-col md:grid xl:grid gap-5 md:gap-20 xl:gap-20 grid-cols-1 md:grid-cols-2 xl:grid-cols-3">
            <div class="card">
                <div class="iconService" style="background-image: url('{{ asset('images/iconDesign.svg') }}')"></div>
                <div class="cardText text-white mt-5">Pembuatan / perakitan unit baru</div>
                <p class="deskripsiService mt-5">
                    Perakitan CDU ( Condensing unit),
                    Perakitan ruangan/panel sandwich,
                    Perakitan unit baru mesin ice crystal</p>
            </div>
            <div class="card">
                <div class="iconService" style="background-image: url('{{ asset('images/iconCleaning.svg') }}')"></div>
                <div class="cardText text-white mt-5">Cleaning unit /maintenance preventive</div>
                <p class="deskripsiService mt-5">
                    Cleaning unit indoor & outdoor
                    Pengecekkan kelistrikkan / panel control,
                    Pengecekkan tekanan freon</p>
            </div>
            <div class="card">
                <div class="iconService" style="background-image: url('{{ asset('images/iconBuild.svg') }}')"></div>
                <div class="cardText text-white mt-5">Bongkar pasang unit</div>
                <p class="deskripsiService mt-5">
                    Bongkar pasang ruangan/panel sandwich, Bongkar pasang unit CDU ( condensing Unit)</p>
            </div>
            <div class="card">
                <div class="iconService" style="background-image: url('{{ asset('images/iconSearch.svg') }}')"></div>
                <div class="cardText text-white mt-5">Overhoul compressor</div>
                <p class="deskripsiService mt-5">
                    Overhoul compressor semi hermetic, hermetic, screw, scroll</p>
            </div>
            <div class="card">
                <div class="iconService" style="background-image: url('{{ asset('images/iconSearchTrouble.svg') }}')"></div>
                <div class="cardText text-white mt-5">Pengecekkan troubleshooting</div>
                <p class="deskripsiService mt-5">
                    Pengecekkan kelistrikkan /panel control, penggecekkan pipa sistem,
                    pengecekkan tekanan refrigerant</p>
            </div>
            <div class="card-contact w-full">
                <b class="text-white text-lg">PELAYANAN KAMI 24 JAM</b>
                <div class="cardText-contact text-white mb-5">Tertarik dengan pelayanan kami hubungi kami di whatsapp untuk
                    informasi lebih lanjut!</div>
                <a href="">
                    <div class="logo" style="background-image: url('{{ asset('images/iconWhatsapp.svg') }}')"></div>
                    <p>Hubungi Kami</p>
                </a>
            </div>
        </div>
    </div>

    {{-- CONTAINER MANFAAT MAINTENANCE --}}
    <div class="containerManfaat shadow-xl">
        <div class="text-3xl justify-items-start title mb-5">
            <b>MANFAAT MAINTENANCE PREVENTIVE</b>
        </div>
        <div class="main grid gap-10 md:grid-cols-2 xl:grid-cols-3">
            <div class="deskripsi md:col-span-1 xl:col-span-2">
                <b class="text-lg mb-2">Meningkatkan kinerja unit</b>
                <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                    deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                    cupidatat </p>
            </div>
            <div class="image"></div>
            <div class="image"></div>
            <div class="deskripsi md:col-span-1 xl:col-span-2 md:text-end xl:text-end">
                <b class="text-lg mb-2">Memperpanjang usia pakai unit</b>
                <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                    deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                    cupidatat </p>
            </div>
            <div class="deskripsi md:col-span-1 xl:col-span-2">
                <b class="text-lg mb-2">Pendeteksian dini masalah</b>
                <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                    deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                    cupidatat </p>
            </div>
            <div class="image"></div>
            <div class="image"></div>
            <div class="deskripsi md:col-span-1 xl:col-span-2 md:text-end xl:text-end">
                <b class="text-lg mb-2">Mencegah kerukasakan pada unit</b>
                <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                    deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                    cupidatat </p>
            </div>
            <div class="deskripsi md:col-span-1 xl:col-span-2">
                <b class="text-lg mb-2">Menjaga kualitas udara</b>
                <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                    deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                    cupidatat </p>
            </div>
            <div class="image"></div>
        </div>
    </div>
    {{-- CONTAINER GALERY --}}
    <div class="containerGaleri shadow-xl">
        <center>
            <div class="title">
                <b class="text-3xl justify-items-start title">GALERI PELAYANAN</b>
            </div>
        </center>
        <div class="cleaning mt-10 md:mt-10 xl:mt-20">
            <p class="title mb-5">Cleaning unit /maintenance preventive</p>
            <div class="grid gap-5 sm:grid-cols-1 xl:grid-cols-2">
                <div class="image"></div>
                <div class="image"></div>
                <div class="image"></div>
                <div class="image"></div>
            </div>
        </div>
        <div class="cleaning mt-10">
            <p class="title mb-5">Bongkar pasang unit</p>
            <div class="grid gap-5 sm:grid-cols-1 xl:grid-cols-2">
                <div class="image"></div>
                <div class="image"></div>
                <div class="image"></div>
                <div class="image"></div>
            </div>
        </div>
        <div class="cleaning mt-10">
            <p class="title mb-5">Overhoul unit</p>
            <div class="grid gap-5 sm:grid-cols-1 xl:grid-cols-2">
                <div class="image"></div>
                <div class="image"></div>
                <div class="image"></div>
                <div class="image"></div>
            </div>
        </div>
        <div class="cleaning mt-10">
            <p class="title mb-5">Pengecekkan troubleshooting</p>
            <div class="grid gap-5 sm:grid-cols-1 xl:grid-cols-2">
                <div class="image"></div>
                <div class="image"></div>
                <div class="image"></div>
                <div class="image"></div>
            </div>
        </div>
        <div class="cleaning mt-10">
            <p class="title mb-5">Pembuatan / perakitan unit baru</p>
            <div class="grid gap-5 sm:grid-cols-1 xl:grid-cols-2">
                <div class="image"></div>
                <div class="image"></div>
                <div class="image"></div>
                <div class="image"></div>
            </div>
        </div>
    </div>
@endsection
