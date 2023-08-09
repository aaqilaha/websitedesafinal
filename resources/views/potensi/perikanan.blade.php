@extends('master')

@section('title')

@section('content')
<div
      class="container-fluid page-header py-5 mb-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <div class="container text-center py-5">
        <h1 class="display-4 text-white animated slideInDown mb-4">
          Perikanan
        </h1>
        <nav aria-label="breadcrumb animated slideInDown">
          <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item">
              <a class="text-white" href="/">Beranda</a>
            </li>
            <li class="breadcrumb-item">
              <a class="text-white" href="/potensi">Potensi Desa</a>
            </li>
            <li class="breadcrumb-item text-primary active" aria-current="page">
              Perikanan
            </li>
          </ol>
        </nav>
      </div>
    </div>
    <!-- Page Header End -->

    <!-- Contact Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="row g-5">
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="border-start border-5 border-primary ps-4 mb-5">
              <h6 class="text-body text-uppercase mb-2">Perikanan</h6>
              <h1 class="display-6 mb-0">
                Kondisi Bidang Perikanan di Desa Jajawar
              </h1>
            </div>
            <p style="text-align:justify">
            Desa Jajawar yang terletak di Kecamatan Banjar, Kota Banjar memiliki 
            letak unik, yakni dilintasi sungai Citanduy dimana airnya dapat 
            dimanfaatkan untuk sektor perikanan. Dusun yang potensial untuk 
            memanfaatkan sungai Citanduy adalah Karangpucung Kulon dan Karangpucung 
            Wetan dimana letak antara sungai Citanduy dan kedua dusun tersebut sejajar 
            sehingga airnya dapat dimanfaatkan untuk kebutuhan budidaya perikanan.
            </p>
            <p style="text-align:justify">
            Di Desa Jajawar, sektor perikanannya dapat dibagi menjadi dua macam berdasarkan 
            sistem yang digunakan, yaitu sistem konvensional yang menggunakan kolam tanah 
            atau semi beton dan  sistem teknologi bioflok. Komoditas yang dibudidaya antara 
            lain ikan nila dan ikan gurame. 
            </p>
            <p style="text-align:justify">
            Permasalahan perikanan di Desa Jajawar yaitu sumber air yang terbatas serta  
            produktivitasnya masih endah . Hal ini dikarenakan sistem konvensional yang masih 
            digunakan oleh sebagian besar masyarakat Desa Jajawar.
            </p>
            <p style="text-align:justify">
            <b>Sistem kolam konvensional</b> merupakan sistem yang mengandalkan kealamian kolam. 
            Biasanya, pada sistem kolam konvensional tidak perlu memberikan pakan untuk ikan 
            lagi karena pakan sudah didapatkan dari alam sehingga hanya perlu memeriksa kondisi 
            air saja. Salah satu jenis kolam yang dapat menggunakan sistem konvensional adalah kolam 
            tanah. 
            </p>
            <p style="text-align:justify">
            <b>Dari kolam tanah</b>, ikan akan mendapatkan pakan alami serta suplemen alami yang disediakan 
            tanah. Sistem kolam konvensional memang terlihat lebih murah dalam pelaksanaannya. 
            Namun, sistem konvensional juga memiliki kekurangan. Sistem kolam konvensional tidak akan 
            berjalan dengan lancar jika lingkungan alami tidak ideal untuk pertumbuhan ikan. Padat tebar 
            pada sistem konvensional rendah sehingga produktivitasnya masih cukup rendah. 
            </p>
            <p style="text-align:justify">
            Sektor perikanan di Desa Jajawar terdapat beberapa orang yang menggunakan sistem teknologi bioflok. 
            Komoditas yang dibudidaya antara lain ikan nila. Meskipun tidak terlalu banyak hal ini tentu saja 
            diharapkan menjadi role model dalam berbudidaya di Desa Jajawar. Hal ini dikarenakan sistem Bioflok 
            menjadi solusi untuk perikanan minim air.
            </p>
          </div>
          <div
            class="col-lg-6 wow fadeInUp"
            data-wow-delay="0.1s"
            style="min-height: 450px"
          >
            <div class="position-relative h-100">
                <img class="img-fluid" src="../assets/img/ikan-1.jpg" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection