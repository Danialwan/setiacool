<link rel="stylesheet" href={{ asset('css/tentangkami.css') }}>
@extends('layouts.default')
@section('title', 'Tentang Kami')

@section('content')

    {{-- HEADER HALAMAN --}}
    <div class="header relative h-56 overflow-hidden md:h-96 shadow-lg"
        style="background-image: url('{{ asset('images/BannerBeranda.png') }}')">
        <div class="absolute inset-x-[15%] bottom-5 hidden py-5 text-center text-white md:block">
            <center>
                <b class="text-xl md:text-2xl xl:text-2xl">CEPAT, TEPAT, BERSAHABAT, DAN BERSERTIFIKAT</b>
                <p class="headerDesc hidden md:block xl:block">
                    Menangani dengan cepat, menganalisa dengan tepat, dengan harga yang bersahabat dan ditunjang
                    dengan teknisi yang bersertifikat
                </p>
            </center>
        </div>
    </div>

    {{-- CONTAINER DESKRIPSI PERUSAHAAN --}}
    <div class="containerDeskripsi">
        <div class="logo" style="background-image: url('{{ asset('images/Logo Setia Cool nobg.png') }}')"></div>
        <div class="deskripsi">CV. SETIA COOL merupakan Perusahaan yang bergerak dalam bidang pengadaan jasa service. CV.
            SETIA COOL juga melayani segala kebutuhan terkait AC, COOL STORAGE, WATER CHILLER, dan COOLING TOWER. Kami juga
            Melayani jual beli baru/bekas, bongkar pasang, service, isi Freon serta reparasi segala jenis Pendingin dan lain
            lain di seluruh indonesia. Didalam bidang Usaha HVAC ini Kami telah berpengalaman selama 6 tahun lebih. Seiring
            dengan bertambahnya pengalaman, CV. SETIA COOL selalu mencoba untuk mengikuti jalur era globalisasi baik ilmu
            pengetahuan maupun teknologi, dari perusahaan biasa menjadi Perusahan yang Luar Biasa Dalam menjalankan
            aktifitasnya. CV. SETIA COOL selalu memberikan layanan yang dapat diandalkan untuk memenuhi kebutuhan pelanggan
            dengan didukung tenaga kerja yang professional dan memiliki pengalaman kerja yang luas serta peralatan dan
            perlengkapan yang memadai baik dari segi teknologi maupun jumlah keberadaannya, sehingga dapat memberikan
            pelayanan yang sangat memuaskan baik dari segi mutu maupun kecepatan kerja.</div>
    </div>

    {{-- CONTAINER VISI PERUSAHAAN --}}
    <div class="containerVisi shadow-lg">
        <b class="title text-3xl">VISI PERUSAHAAN</b>
        <p class="main mt-2">Menjadi perusahaan yang berkualitas dan professional melayani konsumen</p>
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
                    <td class="misi">Menegakkan budaya disiplin, jujur dan tanggung jawab ke seluruh karyawan</td>
                </tr>
                <tr>
                    <td class="nomor">2</td>
                    <td class="misi">Menanamkan kreatifitas kepada seluruh karyawan untuk melayani konsumen.</td>
                </tr>
                <tr>
                    <td class="nomor">3</td>
                    <td class="misi">Fleksibel mengupdate perilaku manajemen untuk menyesuaikan situasi pasar.</td>
                </tr>
                <tr>
                    <td class="nomor">4</td>
                    <td class="misi">Menciptakan lapangan pekerjaan</td>
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
        <p class="main text-center mt-5">Kami selalu mengutamakan kepuasan untuk seluruh pelanggan yang menggunakan
            pelayanan kami Dengan teknisi yang berpengalaman, anda dapat mempercayakan permasalahan pendingin anda kepada
            kami. Selain Commercial kami juga menyediakan layanan jasa sewa unit pendingin, baik itu untuk sewa harian,
            mingguan maupun bulanan. Kami memiliki TEKNISI yang BERPENGALAMAN, BERSERTIFIKAT dengan harga MURAH dan TERPERCAYA.
            kami melayani semua merk AC, Water chiller, Cooling Tower, Cold Storage, dan mesin Ice Cube. Dengan
            pengalaman dan keahlian dalam bidangnya, maka kami yakin dapat memberikan pelayanan terbaik untuk Anda.
        </p>
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
