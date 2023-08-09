@extends('master')

@section('title')

@section('content')

<div
      class="container-fluid page-header py-5 mb-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <div class="container text-center py-5">
        <h1 class="display-4 text-white animated slideInDown mb-4">
          Artikel dan Kajian Terkait Desa Jajawar
        </h1>
        <nav aria-label="breadcrumb animated slideInDown">
          <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item">
              <a class="text-white" href="/">Beranda</a>
            </li>
            <li class="breadcrumb-item text-primary active" aria-current="page">
                Artikel dan Kajian Terkait Desa Jajawar
            </li>
          </ol>
        </nav>
      </div>
    </div>
    <!-- Page Header End -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="row g-5 align-items-end mb-5">
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
          </div>
        </div>
        <div class="row g-4 justify-content-center">
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="service-item bg-light overflow-hidden h-100">
              <img class="img-fluid" src="../assets/img/situs-1.jpg" alt="" />
              <div class="service-text position-relative text-center h-100 p-4">
                <h5 class="mb-3">"Menggali Kekayaan Budaya Desa Jajawar: 
              Mitos dan Tradisi di Situs Margayuda"</h5>
                <p>
                Desa Jajawar adalah salah satu desa yang terletak di Kecamatan Banjar, 
                Kota Banjar, Jawa Barat. Penamaan Desa Jajawar sendiri tentu saja...
                </p>
                <a class="small" href="/sejarah"
                  >READ MORE<i class="fa fa-arrow-right ms-3"></i
                ></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="service-item bg-light overflow-hidden h-100">
              <img class="img-fluid" src="../assets/img/wisata-1.jpg" alt="" />
              <div class="service-text position-relative text-center h-100 p-4">
                <h5 class="mb-3">Wisata Ulin Ka Bapa</h5>
                <p>
                Destinasi wisata bernama “Wahana Ulin Kabapa” menawarkan pemandangan 
                yang alami dan menenangkan serta pengalaman wahana yang tak...
                </p>
                <a class="small" href="/wisata"
                  >READ MORE<i class="fa fa-arrow-right ms-3"></i
                ></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="service-item bg-light overflow-hidden h-100">
              <img class="img-fluid" src="../assets/img/kajian.png" alt="" />
              <div class="service-text position-relative text-center h-100 p-4">
                <h5 class="mb-3">Kajian Potensi</h5>
                <p>
                Kajian ini dimulai dari sejarah dan kebudayaan Desa, kondisi umum alam 
                desa Jajawar dan arah pengembangan dan inovasi produk Desa...
                </p>
                <a class="small" href="/detail"
                  >READ MORE<i class="fa fa-arrow-right ms-3"></i
                ></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Service End -->

    
@endsection
