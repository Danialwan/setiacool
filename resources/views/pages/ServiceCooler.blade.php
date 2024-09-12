<link rel="stylesheet" href={{ asset('css/service.css') }}>
@extends('layouts.default')
@section('title', 'Service Cooler')

@section('content')

    {{-- HEADER HALAMAN --}}
    <div class="header relative h-56 overflow-hidden md:h-96 shadow-lg"
        style="background-image: url('{{ asset('images/BannerBeranda.png') }}')">
        <div class="absolute inset-x-[15%] bottom-5 hidden py-5 text-center text-white md:block">
            <center>
                <b class="text-xl md:text-2xl xl:text-2xl">PROFESIONALISME DALAM PERAWATAN DAN SERVICE AC</b>
                <p class="headerDesc hidden md:block xl:block">
                    Spesialis jasa Service AC bergaransi dan terpercaya, melayani Cleaning unit /maintenance preventive,
                    Bongkar pasang unit, Overhoul unit, Pengecekkan troubleshooting.
                </p>
            </center>
        </div>
    </div>

    {{-- CONTAINER MACAM MACAM SERVICE --}}
    <div class="containerService drop-shadow-xl z-10">
        <div class="subtitle pb-10 xl:pb-20 md:pb-20">
            <b class="text-2xl md:text-3xl xl:text-3xl justify-items-start">MACAM MACAM PELAYANAN PENDINGIN RUANGAN</b>
        </div>
        <div
            class="containerCard card flex flex-col md:grid xl:grid gap-5 md:gap-20 xl:gap-20 grid-cols-1 md:grid-cols-2 xl:grid-cols-3">
            <div class="card">
                <div class="iconService" style="background-image: url('{{ asset('images/iconCleaning.svg') }}')"></div>
                <div class="cardText text-white mt-5">Cleaning unit /maintenance preventive</div>
                <p class="deskripsiService mt-5">
                    Cleaning unit indoor & outdoor
                    Pengecekkan kelistrikkan
                    Pengecekkan tekanan freon</p>
            </div>
            <div class="card">
                <div class="iconService" style="background-image: url('{{ asset('images/iconBuild.svg') }}')"></div>
                <div class="cardText text-white mt-5">Bongkar pasang unit</div>
                <p class="deskripsiService mt-5">
                    Melakukan pemasangan unit indor maupun outdoor dengan profesional</p>
            </div>
            <div class="card">
                <div class="iconService" style="background-image: url('{{ asset('images/iconSearch.svg') }}')"></div>
                <div class="cardText text-white mt-5">Overhoul unit</div>
                <p class="deskripsiService mt-5">
                    Overhoul compressor
                    Overhoul coil unit</p>
            </div>
            <div class="card">
                <div class="iconService" style="background-image: url('{{ asset('images/iconSearchTrouble.svg') }}')"></div>
                <div class="cardText text-white mt-5">Pengecekkan troubleshooting</div>
                <p class="deskripsiService mt-5">
                    Pengecekkan kelistrikkan
                    Pengecekkan tekanan
                    Pengecekkan pipa sistem</p>
            </div>
            <div class="card-contact col-span-2">
                <b class="text-white text-lg">PELAYANAN KAMI 24 JAM</b>
                <div class="cardText-contact text-white mb-5 md:w-100 xl:w-80">Tertarik dengan pelayanan kami hubungi kami
                    di whatsapp untuk
                    informasi lebih lanjut!</div>
                <a href="">
                    <div class="logo " style="background-image: url('{{ asset('images/iconWhatsapp.svg') }}')"></div>
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
        <div class="main grid gap-10 grid-cols-1 md:grid-cols-2 xl:grid-cols-3">
            <div class="deskripsi md:col-span-1 xl:col-span-2">
                <b class="text-lg mb-2">Meningkatkan kinerja unit</b>
                <p class="text-justify">Melakukan perawatan preventif secara rutin sangat penting untuk menjaga kinerja
                    optimal unit AC Anda. Seiring berjalannya waktu, debu, kotoran, dan partikel polutan lainnya akan
                    terakumulasi di dalam komponen seperti filter, evaporator, dan kondensor. Penumpukan ini dapat
                    menghambat aliran udara yang efisien, memaksa unit AC untuk bekerja lebih keras dalam mendinginkan
                    ruangan. Akibatnya, tidak hanya daya listrik yang meningkat, tetapi juga waktu yang dibutuhkan untuk
                    mencapai suhu yang diinginkan. Dengan rutin melakukan pembersihan dan pengecekan terhadap unit indoor
                    dan outdoor, teknisi akan memastikan bahwa unit AC Anda beroperasi pada kondisi puncaknya, menghindari
                    penggunaan energi yang berlebihan. Ini juga berkontribusi pada pengurangan tagihan listrik dan
                    peningkatan kenyamanan lingkungan. Sebuah unit AC yang dirawat dengan baik mampu memberikan aliran udara
                    yang lebih sejuk dan konsisten, sehingga membuat ruangan terasa lebih nyaman dalam waktu yang lebih
                    singkat.</p>
            </div>
            <div class="image"></div>
            <div class="image"></div>
            <div class="deskripsi md:col-span-1 xl:col-span-2 md:text-end xl:text-end">
                <b class="text-lg mb-2">Memperpanjang usia pakai unit</b>
                <p class="text-justify">Salah satu keuntungan terbesar dari perawatan preventif adalah memperpanjang usia
                    pakai unit AC. Sama seperti peralatan lainnya, jika AC tidak dirawat dengan baik, performa komponen
                    dalam unit tersebut akan menurun dan akhirnya rusak sebelum waktunya. Kompresor, yang merupakan salah
                    satu komponen paling vital dan paling mahal dalam unit AC, sangat rentan terhadap kerusakan jika unit
                    tidak dibersihkan secara berkala. Melalui pembersihan rutin, pengecekan tekanan freon, serta pengecekan
                    sistem kelistrikan, Anda dapat mengurangi beban kerja pada kompresor dan memastikan bahwa seluruh
                    komponen unit AC beroperasi secara efisien. Hal ini akan mencegah ausnya komponen-komponen penting,
                    sehingga Anda tidak harus sering mengganti bagian-bagian yang mahal atau bahkan membeli unit baru.
                    Sebagai hasilnya, Anda dapat memperpanjang masa penggunaan AC selama bertahun-tahun, membuat investasi
                    awal Anda lebih bernilai dan menghemat biaya di masa depan.</p>
            </div>
            <div class="deskripsi md:col-span-1 xl:col-span-2">
                <b class="text-lg mb-2">Pendeteksian dini masalah</b>
                <p class="text-justify">Melakukan perawatan preventif tidak hanya menjaga kebersihan dan kinerja unit,
                    tetapi juga memungkinkan Anda untuk mendeteksi masalah sejak dini sebelum berkembang menjadi kerusakan
                    serius. Banyak kerusakan besar yang terjadi pada unit AC sebenarnya diawali dengan masalah kecil yang
                    bisa saja terlewat jika tidak dilakukan pengecekan secara rutin. Teknisi yang berpengalaman dapat
                    mengidentifikasi gejala-gejala awal seperti kebocoran freon, komponen kelistrikan yang mulai aus, atau
                    sistem pipa yang tidak berfungsi dengan baik. Ketika masalah-masalah ini ditemukan pada tahap awal,
                    perbaikan yang dibutuhkan sering kali lebih sederhana dan lebih murah. Namun, jika dibiarkan tanpa
                    penanganan, masalah kecil ini dapat memburuk dan menyebabkan kerusakan parah yang membutuhkan biaya
                    perbaikan lebih besar dan bahkan bisa menyebabkan unit AC berhenti berfungsi sepenuhnya. Oleh karena
                    itu, dengan melakukan perawatan preventif secara berkala, Anda tidak hanya menjaga unit Anda tetap
                    berfungsi, tetapi juga mencegah pengeluaran besar di masa mendatang. </p>
            </div>
            <div class="image"></div>
            <div class="image"></div>
            <div class="deskripsi md:col-span-1 xl:col-span-2 md:text-end xl:text-end">
                <b class="text-lg mb-2">Mencegah kerukasakan pada unit</b>
                <p class="text-justify">Salah satu tujuan utama dari maintenance preventive adalah mencegah kerusakan besar
                    yang dapat mengakibatkan unit AC Anda tidak berfungsi sama sekali. Perawatan rutin yang meliputi
                    pengecekan sistem kelistrikan, pipa freon, dan komponen utama lainnya sangat penting untuk mencegah
                    kegagalan total unit. Sebagai contoh, jika ada kebocoran freon yang tidak terdeteksi, unit AC mungkin
                    terus bekerja lebih keras untuk mencapai suhu yang diinginkan, yang akhirnya menyebabkan overheat dan
                    kerusakan pada kompresor. Demikian juga, masalah kelistrikan seperti konsleting atau komponen yang rusak
                    dapat menyebabkan kerusakan yang lebih besar jika tidak segera diperbaiki. Dengan melakukan pengecekan
                    rutin, teknisi dapat mengidentifikasi potensi masalah ini dan melakukan perbaikan sebelum menyebabkan
                    kerusakan parah. Hal ini membantu menjaga unit AC Anda tetap berfungsi dengan baik, mencegah downtime
                    yang tidak terduga, dan memastikan bahwa Anda tidak harus menghadapi penggantian unit yang mahal. </p>
            </div>
            <div class="deskripsi md:col-span-1 xl:col-span-2">
                <b class="text-lg mb-2">Menjaga kualitas udara</b>
                <p class="text-justify">Selain menjaga kinerja unit AC, perawatan preventif juga berperan penting dalam
                    menjaga kualitas udara di dalam ruangan. Filter AC dan bagian-bagian lain dari sistem pendingin
                    bertindak sebagai penghalang terhadap debu, polutan, jamur, dan bakteri yang dapat beredar di udara.
                    Jika komponen-komponen ini tidak dibersihkan secara rutin, kontaminan dapat menumpuk di dalam unit dan
                    akhirnya tersebar kembali ke udara dalam ruangan. Hal ini dapat berdampak buruk pada kualitas udara yang
                    Anda hirup, terutama jika Anda atau anggota keluarga memiliki alergi atau masalah pernapasan. Melakukan
                    pembersihan filter dan pengecekan aliran udara secara teratur akan memastikan bahwa AC Anda terus
                    menyaring udara dengan efektif, menjaga ruangan tetap segar dan sehat. Kualitas udara yang baik sangat
                    penting untuk menciptakan lingkungan yang nyaman dan aman, terutama dalam jangka panjang. Preventive
                    maintenance membantu Anda mencegah penyebaran polutan yang tak terlihat, memastikan sirkulasi udara yang
                    bersih dan sehat di seluruh rumah atau tempat kerja Anda.</p>
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
            <div class="grid gap-5 sm:grid-cols-1 xl:grid-cols-2">
                <div class="image"></div>
                <div class="image"></div>
                <div class="image"></div>
                <div class="image"></div>
                <div class="image"></div>
                <div class="image"></div>
            </div>
        </div>

    </div>
@endsection
