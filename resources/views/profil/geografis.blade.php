@extends('master')
@section('title')
@section('content')
<div
      class="container-fluid page-header py-5 mb-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <div class="container text-center py-5">
        <h1 class="display-4 text-white animated slideInDown mb-4">
          Kondisi Geografis
        </h1>
        <nav aria-label="breadcrumb animated slideInDown">
          <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item">
              <a class="text-white" href="/">Beranda</a>
            </li>
            <li class="breadcrumb-item">
              <a class="text-white" href="/profil">Profil Desa</a>
            </li>
            <li class="breadcrumb-item text-primary active" aria-current="page">
              Kondisi Geografis
            </li>
          </ol>
        </nav>
      </div>
    </div>
    <!-- Page Header End -->
    <br>
    <br>
    <!-- Contact Start -->
    <div class="container-xxl py-8">
      <div class="container">
          <div class="col-lg-10 wow fadeInUp" data-wow-delay="0.5s">
            <div class="border-start border-5 border-primary ps-4 mb-5">
              <h3 class="display-6 mb-0">
                A. Luas Wilayah
              </h3>
            </div>
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
          </div>
        </div>
      </div>
    </div>
    <br>
    <br>
    <div class="container-xxl py-8">
      <div class="container">
          <div class="col-lg-10 wow fadeInUp" data-wow-delay="0.5s">
            <div class="border-start border-5 border-primary ps-4 mb-5">
              <h3 class="display-6 mb-0">
                B. Batas Wilayah
              </h3>
            </div>
            <p class="mb-4">
            Desa Jajawar dengan batas-batas sebagai berikut :
            </p>
            <table class="table">
                <th>
                <tr>
                <td>1</td>
                <td>Sebelah Utara</td>
                <td>Desa Karangkamulyan dan Desa Mekarmukti Kabupaten Ciamis</td>
                </tr>
                <tr>
                <td>2</td>
                <td>Sebelah Timur</td>
                <td>Desa Balokang Kecamatan Banjar Kota Banjar</td>
                </tr>
                <tr>
                <td>3</td>
                <td>Sebelah Selatan</td>
                <td>Desa Cibeureum Kecamatan Banjar Kota Banjar</td>
                </tr>
                <tr>
                <td>4</td>
                <td>Sebelah Barat</td>
                <td>Desa Cibeureum Kecamatan Banjar Kota Banjar dan Desa Karangkamulyan Kabupaten Ciamis</td>
                </tr>
                <tr>
                </th>
            </table>
          </div>
      </div>
    </div>
    <br>
    <br>
    <div class="container-xxl py-8">
      <div class="container">
          <div class="col-lg-10 wow fadeInUp" data-wow-delay="0.5s">
            <div class="border-start border-5 border-primary ps-4 mb-5">
              <h3 class="display-6 mb-0">
                C. Kondisi Geografis
              </h3>
            </div>
            <table class="table">
                <th>
                <tr>
                <td>1</td>
                <td>Ketinggian Tanah (dpl)</td>
                <td>± 45 meter</td>
                </tr>
                <tr>
                <td>2</td>
                <td>Curah Hujan</td>
                <td>2.565 mm/tahun</td>
                </tr>
                <tr>
                <td>3</td>
                <td>Fotografi</td>
                <td>Dataran rendah</td>
                </tr>
                <tr>
                <td>4</td>
                <td>Suhu rata-rata</td>
                <td>30 derajat celcius</td>
                </tr>
                <tr>
                </th>
            </table>
          </div>
      </div>
    </div>
    <br>
    <br>
    <div class="container-xxl py-8">
        <div class="container">
          <div class="col-lg-10 wow fadeInUp" data-wow-delay="0.5s">
            <div class="border-start border-5 border-primary ps-4 mb-5">
              <h3 class="display-6 mb-0">
                D. Orbitasi
              </h3>
            </div>
            <table class="table">
                <th>
                <tr>
                <td>1</td>
                <td>Jarak dari pusat kecamatan</td>
                <td>2 Km</td>
                </tr>
                <tr>
                <td>2</td>
                <td>Jarak dari pusat kota</td>
                <td>10 Km</td>
                </tr>
                <tr>
                <td>3</td>
                <td>Jarak dari ibukota provinsi</td>
                <td>145 Km</td>
                </tr>
                <tr>
                <td>4</td>
                <td>Jarak dari ibukota negara</td>
                <td>369 Km</td>
                </tr>
                <tr>
                </th>
            </table>
          </div>
       </div>
    </div>
    <br>
    <br>
    <div class="container-xxl py-8">
      <div class="container">
          <div class="col-lg-10 wow fadeInUp" data-wow-delay="0.5s">
            <div class="border-start border-5 border-primary ps-4 mb-5">
              <h3 class="display-6 mb-0">
                E. Kondisi Topografi
              </h3>
            </div>
            <p class="mb-4">
            Desa Jajawar berada di ketinggian 45 M diatas permukaan air laut dengan rincian Luas lahan dibawah ini :
            </p>
            <table class="table">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Jenis Lahan</th>
                <th scope="col">Jumlah (Ha)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Pemukiman</td>
                <td>3,575</td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>Pesawahan</td>
                <td>50,937</td>
                </tr>
                <tr>
                <th scope="row">3</th>
                <td>Perkebunan</td>
                <td>193,497</td>
                </tr>
                <tr>
                <th scope="row">4</th>
                <td>Kuburan</td>
                <td>2,184</td>
                </tr>
                <tr>
                <th scope="row">5</th>
                <td>Pekarangan</td>
                <td>7,500</td>
                </tr>
                <th scope="row">6</th>
                <td>Perkantoran</td>
                <td>0,580</td>
                </tr>
                <th scope="row">7</th>
                <td>Prasarana Umum Lainnya</td>
                <td>15,796</td>
                </tr>
                <tr><b>
                <td colspan="1"></td>
                <th class="table-active" scope="col">Jumlah</th>
                <th class="table-active" scope="col">274, 114 Ha</th>
                </b>
                </tr>
            </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
@endsection