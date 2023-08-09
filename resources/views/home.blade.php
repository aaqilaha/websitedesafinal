@extends('master')
@section('title')
@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
      <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="w-100" src="../assets/img/carousel1.jpg" alt="Image" />
            <div class="carousel-caption">
              <div class="container">
                <div class="row justify-content-center">
                  <div class="col-12 col-lg-10">
                    <h5
                      class="text-light text-uppercase mb-3 animated slideInDown"
                    >
                      Selamat Datang Di Website 
                    </h5>
                    <h1 class="display-2 text-light mb-3 animated slideInDown">
                      Desa Jajawar
                    </h1>
                    <a href="/sejarah" class="btn btn-primary py-3 px-5"
                      >More Details</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="w-100" src="../assets/img/carousel2.png" alt="Image" />
            <div class="carousel-caption">
              <div class="container">
                <div class="row justify-content-center">
                  <div class="col-12 col-lg-10">
                    <h5
                      class="text-light text-uppercase mb-3 animated slideInDown"
                    >
                      Selamat Datang Di Website 
                    </h5>
                    <h1 class="display-2 text-light mb-3 animated slideInDown">
                      Desa Jajawar
                    </h1>
                    <a href="/sejarah" class="btn btn-primary py-3 px-5"
                      >More Details</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#header-carousel"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#header-carousel"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="row g-5">
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
            <div
              class="position-relative overflow-hidden ps-5 pt-5 h-100"
              style="min-height: 400px"
            >
              <img
                class="position-absolute w-100 h-100"
                src="../assets/img/aboutt.jpg"
                alt=""
                style="object-fit: cover"
              />
              <div
                class="position-absolute top-0 start-0 bg-white pe-3 pb-3"
                style="width: 200px; height: 200px"
              >
                <div
                  class="d-flex flex-column justify-content-center text-center bg-primary h-100 p-3"
                >
                  <h4 class="text-white mb-0">Sejak Tahun</h4>
                  <h1 class="text-white">2006</h1>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="h-100">
              <div class="border-start border-5 border-primary ps-4 mb-5">
                <h6 class="text-body text-uppercase mb-2">Tentang</h6>
                <h1 class="display-6 mb-0">
                  Desa Jajawar
                </h1>
              </div>
              <p style="text-align : justify">
                Desa Jajawar adalah salah satu desa yang terletak di Kecamatan Banjar, 
                Kota Banjar, Jawa Barat. Penamaan Desa Jajawar sendiri tentu saja memiliki 
                arti yang melekat dengan kejadian atau keadaan desa ini. Jajawar memiliki 
                arti jawara, pendekar, jagoan, atau juara. Berkaitan dengan hal tersebut, 
                terdapat kepercayaan bahwa orang-orang yang berasal dari Desa Jajawar ini 
                memiliki kharisma dan juga kekuatan untuk menjadi seorang pemimpin. 
                Desa ini memiliki potensi di bidang pertanian, perikanan, dan pariwisata.
              </p>
              <div class="border-top mt-4 pt-4">
              <a class="small" href="/sejarah"
                  >READ MORE<i class="fa fa-arrow-right ms-3"></i
                ></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- About End -->

    <div class="container-xxl py-5">
      <div class="container">
        <div class="row g-5 align-items-end mb-5">
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="border-start border-5 border-primary ps-4">
              <h6 class="text-body text-uppercase mb-2">Potensi Desa Jajawar</h6>
              <h1 class="display-6 mb-0">
                Kondisi Umum Alam di Desa Jajawar
              </h1>
            </div>
          </div>
        </div>
        <div class="row g-4 justify-content-center">
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="service-item bg-light overflow-hidden h-100">
              <img class="img-fluid" src="../assets/img/service-1.jpg" alt="" />
              <div class="service-text position-relative text-center h-100 p-4">
                <h5 class="mb-3">Pertanian</h5>
                <p>
                Desa Jajawar yang terletak di kecamatan Banjar, Kota Banjar 
                memiliki potensi alam yang sangat baik untuk proses...
                </p>
                <a class="small" href="/pertanian"
                  >READ MORE<i class="fa fa-arrow-right ms-3"></i
                ></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="service-item bg-light overflow-hidden h-100">
              <img class="img-fluid" src="../assets/img/service-2.jpg" alt="" />
              <div class="service-text position-relative text-center h-100 p-4">
                <h5 class="mb-3">Perikanan</h5>
                <p>
                Sektor perikanan di Desa Jajawar dapat dibagi menjadi dua 
                macam berdasarkan sistem yang digunakan, yaitu...
                </p>
                <a class="small" href="/perikanan"
                  >READ MORE<i class="fa fa-arrow-right ms-3"></i
                ></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="service-item bg-light overflow-hidden h-100">
              <img class="img-fluid" src="../assets/img/service-3.jpg" alt="" />
              <div class="service-text position-relative text-center h-100 p-4">
                <h5 class="mb-3">Pariwisata</h5>
                <p>
                Destinasi wisata bernama “Wahana Ulin Kabapa” menawarkan pemandangan yang alami dan 
                menenangkan serta pengalaman wahana yang tak terlupakan...
                </p>
                <a class="small" href="/wisata"
                  >READ MORE<i class="fa fa-arrow-right ms-3"></i
                ></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection