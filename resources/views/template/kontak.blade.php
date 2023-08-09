@extends('master')

@section('title')

@section('content')
<!-- Page Header Start -->
<div
      class="container-fluid page-header py-5 mb-5 wow fadeIn"
      data-wow-delay="0.1s"
      style="background: linear-gradient(rgba(0, 0, 0, .65), rgba(0, 0, 0, .65)), 
      url(../assets/img/service-1.jpg) cover center no-repeat;"
    >
      <div class="container text-center py-5">
        <h1 class="display-4 text-white animated slideInDown mb-4">
          Kontak & Layanan
        </h1>
        <nav aria-label="breadcrumb animated slideInDown">
          <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item">
              <a class="text-white" href="/">Beranda</a>
            </li>
            <li class="breadcrumb-item text-primary active" aria-current="page">
              Kontak & Layanan
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
          <div
            class="col-lg-6 wow fadeInUp"
            data-wow-delay="0.1s"
            style="min-height: 450px"
          >
            <div class="position-relative h-100">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15827.848782270205!2d108.4896125!3d-7.358134549999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f61bade1c670b%3A0xbaa7692773688c79!2sJajawar%2C%20Banjar%2C%20Banjar%20City%2C%20West%20Java!5e0!3m2!1sen!2sid!4v1690999760795!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="border-start border-5 border-primary ps-4 mb-5">
              <h6 class="text-body text-uppercase mb-2">Kontak & Layanan</h6>
              <h1 class="display-6 mb-0">
                Hubungi kami melalui :
              </h1>
            </div>
            <p><i class="fa fa-phone-alt me-3"></i>082115330454</p>
            <p><i class="fa fa-envelope me-3"></i>jajawardesa@gmail.com</p>
            <p><i class="fab fa-instagram me-3"></i>@desajajawar_</p>
          </div>
        </div>
      </div>
    </div>
    <!-- Contact End -->
@endsection