<link rel="stylesheet" href={{ asset('css/service.css') }}>
@extends('layouts.default')
@section('title', 'Service Cold Storage')

@section('content')

    {{-- HEADER HALAMAN --}}
    <div class="header relative h-56 overflow-hidden md:h-96 shadow-lg"
        style="background-image: url('{{ asset('images/BannerBeranda.png') }}')">
        <div class="absolute inset-x-[15%] bottom-5 hidden py-5 text-center text-white md:block">
            <center>
                <b class="text-xl md:text-2xl xl:text-2xl">PROFESIONALISME DALAM PERAWATAN DAN SERVICE COLD STORAGE</b>
                <p class="headerDesc hidden md:block xl:block">
                    Spesialis jasa Service COLD STORAGE bergaransi dan terpercaya, melayani Cleaning unit /maintenance
                    preventive,
                    Bongkar pasang unit, Overhoul compressor, Pengecekkan troubleshooting, Pembuatan / perakitan unit baru.
                </p>
            </center>
        </div>
    </div>

    {{-- CONTAINER MACAM MACAM SERVICE --}}
    <div class="containerService drop-shadow-xl z-10">
        <div class="subtitle pb-20">
            <b class="text-2xl md:text-3xl xl:text-3xl justify-items-start">MACAM MACAM PELAYANAN COLD STORAGE, ICE
                CRYSTAL</b>
        </div>
        <div
            class="containerCard card flex flex-col md:grid xl:grid gap-5 md:gap-20 xl:gap-20 grid-cols-1 md:grid-cols-2 xl:grid-cols-3">
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
                <a class="w-100" href="">
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
                <p class="text-justify">Maintenance preventive secara berkala sangat penting untuk menjaga kinerja optimal
                    dari sistem cold storage dan mesin ice crystal. Dengan melakukan pembersihan rutin pada
                    komponen-komponen seperti kondensor, evaporator, dan filter, sistem pendingin dapat bekerja lebih
                    efisien dalam mempertahankan suhu yang stabil. Pembersihan ini memastikan aliran udara tetap lancar,
                    menghindari penumpukan debu dan kotoran yang dapat menyebabkan penurunan performa. Hasilnya, unit dapat
                    bekerja dengan lebih baik, mendinginkan ruangan atau menghasilkan es kristal dalam waktu yang lebih
                    singkat tanpa harus mengeluarkan energi yang berlebihan.</p>
            </div>
            <div class="image"></div>
            <div class="image"></div>
            <div class="deskripsi md:col-span-1 xl:col-span-2 md:text-end xl:text-end">
                <b class="text-lg mb-2">Memperpanjang usia pakai unit</b>
                <p class="text-justify">Dengan melakukan perawatan preventive, usia pakai unit cold storage dan mesin ice
                    crystal Anda dapat diperpanjang secara signifikan. Komponen penting seperti kompresor, kipas, dan pipa
                    sistem sering kali mengalami keausan seiring berjalannya waktu. Namun, melalui pembersihan dan perawatan
                    yang konsisten, Anda dapat mengurangi beban kerja yang tidak perlu pada komponen tersebut. Hal ini
                    mencegah terjadinya kerusakan dini, sehingga unit dapat beroperasi lebih lama tanpa harus sering
                    mengalami perbaikan besar atau penggantian komponen. Dengan demikian, investasi Anda dalam unit
                    pendingin akan lebih bernilai karena unit mampu bertahan lebih lama. </p>
            </div>
            <div class="deskripsi md:col-span-1 xl:col-span-2">
                <b class="text-lg mb-2">Pendeteksian dini masalah</b>
                <p class="text-justify">Salah satu manfaat utama dari maintenance preventive adalah kemampuan untuk
                    mendeteksi masalah pada tahap awal sebelum menjadi lebih serius. Teknisi yang melakukan pengecekan rutin
                    dapat menemukan tanda-tanda awal kerusakan, seperti kebocoran refrigerant, penurunan performa pada
                    kompresor, atau masalah kelistrikan. Deteksi dini ini memungkinkan Anda untuk mengambil tindakan
                    korektif segera, sehingga mencegah kerusakan yang lebih parah dan biaya perbaikan yang lebih tinggi di
                    masa depan. Dengan demikian, unit Anda tetap berfungsi dengan baik dan menghindari downtime yang tidak
                    diinginkan.</p>
            </div>
            <div class="image"></div>
            <div class="image"></div>
            <div class="deskripsi md:col-span-1 xl:col-span-2 md:text-end xl:text-end">
                <b class="text-lg mb-2">Mencegah kerukasakan pada unit</b>
                <p class="text-justify">Melalui perawatan preventif, Anda dapat mencegah kerusakan besar yang dapat
                    menyebabkan unit cold storage atau mesin ice crystal berhenti beroperasi secara tiba-tiba. Pengecekan
                    berkala terhadap kelistrikan, sistem pendingin, dan tekanan refrigerant membantu mengidentifikasi
                    masalah yang dapat menyebabkan kegagalan sistem. Misalnya, kebocoran kecil pada sistem pipa refrigerant
                    yang tidak terdeteksi dapat menyebabkan penurunan performa yang serius, tetapi melalui pengecekan yang
                    teliti, masalah ini bisa segera diatasi. Dengan demikian, perawatan preventif berperan penting dalam
                    menjaga kelangsungan operasi unit dan mencegah kerugian bisnis yang disebabkan oleh downtime. </p>
            </div>
            <div class="deskripsi md:col-span-1 xl:col-span-2">
                <b class="text-lg mb-2">Menjaga kualitas udara</b>
                <p class="text-justify">Untuk cold storage dan mesin ice crystal yang beroperasi di lingkungan tertutup,
                    menjaga kualitas udara di sekitar unit juga sangat penting. Debu dan kotoran yang menumpuk di komponen
                    seperti filter atau evaporator dapat mengganggu sirkulasi udara dan menurunkan kualitas udara yang
                    bersirkulasi di sekitar unit. Dalam cold storage, hal ini dapat mempengaruhi kualitas produk yang
                    disimpan. Melalui pembersihan rutin pada komponen unit, Anda dapat memastikan bahwa udara yang mengalir
                    tetap bersih, segar, dan bebas dari polutan. Hal ini sangat penting untuk menjaga kualitas produk dan
                    memastikan lingkungan tetap aman serta higienis. </p>
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
