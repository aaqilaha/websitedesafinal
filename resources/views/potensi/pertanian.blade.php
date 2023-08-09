@extends('master')

@section('title')

@section('content')
<div
      class="container-fluid page-header py-5 mb-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <div class="container text-center py-5">
        <h1 class="display-4 text-white animated slideInDown mb-4">
          Pertanian
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
              Pertanian
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
              <h6 class="text-body text-uppercase mb-2">Pertanian</h6>
              <h1 class="display-6 mb-0">
                Kondisi Bidang Pertanian di Desa Jajawar
              </h1>
            </div>
            <p style="text-align:justify">
            Kota Banjar merupakan salah satu kota di Provinsi Jawa Barat 
            yang masih memiliki suasana seperti perdesaan. Sektor pertanian 
            menjadi suatu hal yang penting bagi perekonomian Kota Banjar. 
            Beberapa komoditi pertanian yang diproduksinya adalah sayuran, 
            buah-buahan, dan tanaman biofarmaka. 
            </p>
            <p style="text-align:justify">
            Desa Jajawar yang terletak di kecamatan Banjar, Kota Banjar 
            memiliki potensi alam yang sangat baik untuk proses pertanian, 
            khususnya jenis tanaman padi. Akan tetapi, dalam pelaksanaan bercocok 
            tanam dan dari hasil tanam yang diperoleh terdapat banyak kendala. 
            Salah satu kendala yang mempengaruhi hasil tanam di daerah tersebut 
            adalah suplai air yang tidak memadai dikarenakan air sungai yang tidak 
            mampu menjangkau areal persawahan yang lebih tinggi.
            </p>
            <p style="text-align:justify">
            Oleh karena itu, sistem pengairan di Desa Jajawar hanya dapat bergantung 
            terhadap hujan (sistem tadah hujan) dan Situ Leutik. Namun, terdapat kendala
            pada kedua keadaan tersebut. Sistem tadah hujan merupakan sistem lahan pertanian 
            yang tidak bisa mendapatkan suplai air secara irigasi, sehingga kebutuhan air 
            tanaman hanya dipenuhi dari curah hujan. Keadaan ini menyebabkan sering terjadinya 
            kegagalan panen atau hasil panen tidak maksimal karena terjadi kekurangan air. 
            Situ Leutik yang berupa situ dan diharapkan oleh warga menjadi salah satu sumber air 
            untuk pertanian warga ketika musim kemarau pun masih belum maksimal pemanfaatannya 
            dan pengelolaannya sehingga dampaknya pun belum terasa.
            </p>
            <p style="text-align:justify">
            Tanah persawahan pada Desa Jajawar memiliki karakteristik berupa tanah lempung 
            dan liat yang memiliki pH sedikit basa. Selain itu, tanah tersebut memiliki 
            kandungan organik dan nitrogen yang rendah serta kandungan fosfor dan pottasium
            yang sedang. 
            </p>
            <p style="text-align:justify">
            Komoditas pertanian desa Jajawar pada umumnya adalah padi, pepaya dan pisang. 
            Umumnya padi digunakan untuk kebutuhan pribadi. Hal ini dikarenakan produktivitas 
            pertanian yang masih rendah sehingga akan rugi apabila dikomersialkan. Untuk komoditas 
            lain seperti pepaya dan pisang umumnya langsung dijual kepada tengkulak.
            </p>
          </div>
          <div
            class="col-lg-6 wow fadeInUp"
            data-wow-delay="0.1s"
            style="min-height: 450px"
          >
            <div class="position-relative h-100">
                <img class="img-fluid" src="../assets/img/sawah.jpg" alt="" />
            </div>
          </div>
        </div>
        <br>
        <br>
        <div class="row g-5 align-items-end mb-5">
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="border-start border-5 border-primary ps-4">
              <h6 class="text-body text-uppercase mb-2">Peta</h6>
              <h1 class="display-6 mb-0">
                Storymaps Komoditas Pertanian Desa Jajawar
              </h1>
            </div>
          </div>
          <div class="col-lg-6 text-lg-end wow fadeInUp" data-wow-delay="0.3s">
            <a class="btn btn-primary py-3 px-5" href="https://storymaps.arcgis.com/stories/d442d55527f24905b7690a2b0029d1f6">See More</a>
          </div>
        </div>
      </div>
    </div>
@endsection