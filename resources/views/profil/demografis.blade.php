@extends('master')
@section('title')
@section('content')
<div
      class="container-fluid page-header py-5 mb-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <div class="container text-center py-5">
        <h1 class="display-4 text-white animated slideInDown mb-4">
          Kondisi Demografis
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
              Demografis
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
                Jumlah Penduduk
              </h3>
            </div>
            <h6>
            a. Jenis Kelamin
            </h6>
            <table class="table">
            <tbody>
                <tr>
                <td>Laki-laki</td>
                <td>1.213 Orang</td>
                </tr>
                <tr>
                <td>Perempuan</td>
                <td>1.227 Orang</td>
                </tr>
                <tr>
                <th class="table-active" scope="col">Jumlah</th>
                <th class="table-active" scope="col">2.440 Orang</th>
                </b>
                </tr>
            </tbody>
            </table>
            <h6>
            b. Kepala Keluarga
            </h6>
            <table class="table">
            <tbody>
                <tr>
                <td>Laki-laki</td>
                <td>643 Orang</td>
                </tr>
                <tr>
                <td>Perempuan</td>
                <td>177 Orang</td>
                </tr>
                <tr>
                <th class="table-active" scope="col">Jumlah</th>
                <th class="table-active" scope="col">820 Orang</th>
                </b>
                </tr>
            </tbody>
            </table>
            <h6>
            c. Kewarganegaraan
            </h6>
            <h6>WNI</h6>
            <table class="table">
            <tbody>
                <tr>
                <td>Laki-laki</td>
                <td>643 Orang</td>
                </tr>
                <tr>
                <td>Perempuan</td>
                <td>177 Orang</td>
                </tr>
                <tr>
                <th class="table-active" scope="col">Jumlah</th>
                <th class="table-active" scope="col">820 Orang</th>
                </tr>
            </tbody>
            </table>
            <br>
            <h6>WNA</h6>
            <table class="table">
              <tbody>
                <tr>
                <td>Laki-laki</td>
                <td>0</td>
                </tr>
                <tr>
                <td>Perempuan</td>
                <td>0</td>
                </tr>
                <tr>
                <th class="table-active" scope="col">Jumlah</th>
                <th class="table-active" scope="col">0 Orang</th>
                </b>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
@endsection