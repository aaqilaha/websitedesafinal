@extends('master')
@section('title')
@section('content')
<div
      class="container-fluid page-header py-5 mb-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <div class="container text-center py-5">
        <h1 class="display-4 text-white animated slideInDown mb-4">
          Profil Desa Jajawar
        </h1>
        <nav aria-label="breadcrumb animated slideInDown">
          <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item">
              <a class="text-white" href="#">Home</a>
            </li>
            <li class="breadcrumb-item">
              <a class="text-white" href="#">Pages</a>
            </li>
            <li class="breadcrumb-item text-primary active" aria-current="page">
              Profil Desa Jajawar
            </li>
          </ol>
        </nav>
      </div>
    </div>
    <!-- Page Header End -->

    <!-- Contact Start -->
    <div class="container-xxl py-8">
      <div class="container">
          <div class="col-lg-10 wow fadeInUp" data-wow-delay="0.5s">
            <div class="border-start border-5 border-primary ps-4 mb-5">
              <h6 class="text-body text-uppercase mb-2">Profil Desa Jajawar</h6>
              <h1 class="display-6 mb-0">
                Kondisi Geografis
              </h1>
            </div>
            <h6>A. Luas Wilayah</h6>
            <p class="mb-4">
            Desa Jajawar memiliki Luas Wilayah 274,114 Hektar, yang meliputi 5 Dusun, yaitu sebagaimana tabel dibawah ini :
            </p>
            <table class="table">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Dusun</th>
                <th scope="col">Luas Wilayah (Ha)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Jajawar Kulon</td>
                <td>73,074</td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>Jajawar Wetan</td>
                <td>74,100</td>
                </tr>
                <tr>
                <th scope="row">3</th>
                <td>Karangpucung Wetan</td>
                <td>43,341</td>
                </tr>
                <tr>
                <th scope="row">4</th>
                <td>Karangpucung Kulon</td>
                <td>44,730</td>
                </tr>
                <tr>
                <th scope="row">5</th>
                <td>Balokang Fatrol</td>
                <td>38,869</td>
                </tr>
                <tr><b>
                <td colspan="1"></td>
                <th class="table-active" scope="col">Jumlah</th>
                <th class="table-active" scope="col">274,114 Ha</th>
                </b>
                </tr>
            </tbody>
            </table>
            <h6>B. Batas Wilayah</h6>
            <p class="mb-4">
            Desa Jajawar dengan batas-batas sebagai berikut :
            </p>
            <p class="mb-4">
            1. Sebelah Utara            : Desa Karangkamulyan dan Desa Mekarmukti Kabupaten Ciamis
            </p>
            <p class="mb-4">
            2. Sebelah Timur            : Desa Balokang Kecamatan Banjar Kota Banjar
            </p>
            <p class="mb-4">
            3. Sebelah Selatan          : Desa Cibeureum Kecamatan Banjar Kota Banjar
            </p>
            <p class="mb-4">
            4. Sebelah Barat            : Desa Cibeureum Kecamatan Banjar Kota Banjar dan Desa Karangkamulyan Kabupaten Ciamis
            </p>
          </div>
        </div>
      </div>
    </div>
@endsection