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
        <div class="row g-5">
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="border-start border-5 border-primary ps-4 mb-5">
              <h6 class="text-body text-uppercase mb-2">Kajian</h6>
              <h1 class="display-6 mb-0">
                Kajian Potensi
              </h1>
              <br>
              <h6 class="text-body text mb-2">Oleh Muh. Rohman Fadila| Tim KKN-PPM UGM Banjar Bestari</h6>
            </div>
            <iframe src="../assets/img/kajianpotensi.pdf" style="center" type="application/pdf" width=100% height=800></iframe>
          </div>
        </div>
      </div>
    </div>
    <!-- Service End -->

@endsection
