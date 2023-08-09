<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Selamat Datang di website Desa Jajawar</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="../assets/img/banjar.png" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Poppins:wght@600;700&display=swap"
      rel="stylesheet"
    />

    <!-- Icon Font Stylesheet -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />

    <!-- Libraries Stylesheet -->
    <link href="../assets/lib/animate/animate.min.css" rel="stylesheet" />
    <link href="../assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="../assets/css/style.css" rel="stylesheet" />
  </head>

  <body>
    <!-- Spinner Start -->
    <div
      id="spinner"
      class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
    >
      <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    

    <!-- Navbar Start -->
    <nav
      class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0"
    >
      <a href="/" class="navbar-brand d-flex align-items-center">
        <img class="w-1" src="../assets/img/banjar.png" alt="Image" width="40" height="50"/>
        <h2 class="m-0">JAJAWAR</h2>
      </a>
      <button
        type="button"
        class="navbar-toggler"
        data-bs-toggle="collapse"
        data-bs-target="#navbarCollapse"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-3 py-lg-0">
          <a href="/" class="nav-item nav-link active">Beranda</a>
          <div class="nav-item dropdown">
            <a
              href="#"
              class="nav-link dropdown-toggle"
              data-bs-toggle="dropdown"
              >Storymaps</a
            >
            <div class="dropdown-menu bg-light m-0">
              <a href="https://storymaps.arcgis.com/stories/d442d55527f24905b7690a2b0029d1f6" class="dropdown-item">Storymaps Komoditas Pertanian</a>
              <a href="https://storymaps.arcgis.com/stories/75ad6f0f43ea4b54bcd81b2a5d7c1468" class="dropdown-item">Storymaps Pariwisata</a>
            </div>
          </div>
          <div class="nav-item dropdown">
            <a
              href="#"
              class="nav-link dropdown-toggle"
              data-bs-toggle="dropdown"
              >Profil Desa</a
            >
            <div class="dropdown-menu bg-light m-0">
              <a href="/geografis" class="dropdown-item">Kondisi Geografis</a>
              <a href="/demografis" class="dropdown-item">Kondisi Demografis</a>
            </div>
          </div>
          <a href="/potensi" class="nav-item nav-link">Potensi Desa</a>
          <div class="nav-item dropdown">
            <a
              href="#"
              class="nav-link dropdown-toggle"
              data-bs-toggle="dropdown"
              >Pembangunan</a
            >
            <div class="dropdown-menu bg-light m-0">
              <a href="/masterplan" class="dropdown-item">Masterplan</a>
              <a href="/kajian" class="dropdown-item">Artikel dan Kajian Terkait Desa</a>
            </div>
          </div>
          <a href="/kontak" class="nav-item nav-link">Kontak & Layanan</a>
        </div>
      </div>
    </nav>
    <!-- Navbar End -->

    @yield('title')

    @yield('content')


    <!-- Footer Start -->
    <div
      class="container-fluid bg-dark footer mt-5 pt-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <div class="container py-5">
        <div class="row g-5">
          <div class="col-lg-3 col-md-6">
            <img class="w-1" src="../assets/img/banjar.png" alt="Image" width="70" height="100"/>
            <img class="w-1" src="../assets/img/logo.png" alt="Image" width="100" height="100"/>
            <h2 class="m-0">JAJAWAR</h2>
            <p>
              Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat
              ipsum et lorem et sit, sed stet lorem sit clita
            </p>
            <div class="d-flex pt-2">
              <a class="btn btn-square btn-outline-primary me-1" href="https://www.instagram.com/desajajawar_/"
                ><i class="fab fa-instagram"></i
              ></a>
              <a class="btn btn-square btn-outline-primary me-1" href="https://web.facebook.com/pemdes.jajawar/?_rdc=1&_rdr "
                ><i class="fab fa-facebook-f"></i
              ></a>
              <a class="btn btn-square btn-outline-primary me-1" href="https://www.youtube.com/@desajajawar4872"
                ><i class="fab fa-youtube"></i
              ></a>
              <a class="btn btn-square btn-outline-primary me-0" href="https://www.linkedin.com/in/desa-jajawar-488bb913a/?originalSubdomain=id"
                ><i class="fab fa-linkedin-in"></i
              ></a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <h4 class="text-light mb-4">Address</h4>
            <p>
              <i class="fa fa-map-marker-alt me-3"></i>Desa Jajawar, Kecamatan Banjar, Kabupaten Banjar, Provinsi Jawa Barat
            </p>
            <p><i class="fa fa-phone-alt me-3"></i>082115330454</p>
            <p><i class="fa fa-envelope me-3"></i>jajawardesa@gmail.com</p>
          </div>
          <div class="col-lg-3 col-md-6">
            <h4 class="text-light mb-4">Quick Links</h4>
            <a class="btn btn-link" href="">Beranda</a>
            <a class="btn btn-link" href="">Storymaps</a>
            <a class="btn btn-link" href="">Potensi Desa</a>
            <a class="btn btn-link" href="">Pembangunan</a>
            <a class="btn btn-link" href="">Kontak & Layanan</a>
          </div>
          <div class="col-lg-3 col-md-6">
            <h4 class="text-light mb-4"></h4>
            <p></p>
            <div class="position-relative mx-auto" style="max-width: 400px">
              
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid copyright">
        <div class="container">
          <div class="row">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
              &copy; <a href="#">Website Desa Jajawar</a>, All Right Reserved.
            </div>
            <div class="col-md-6 text-center text-md-end">
              <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
              Designed By <a href="https://htmlcodex.com">HTML Codex</a>
              Redesigned By <a href="https://htmlcodex.com">Aaqilah Hanna Q | Tim KKN-PPM UGM Banjar Bestari</a>
              <br />Distributed By:
              <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"
      ><i class="bi bi-arrow-up"></i
    ></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/lib/wow/wow.min.js"></script>
    <script src="../assets/lib/easing/easing.min.js"></script>
    <script src="../assets/lib/waypoints/waypoints.min.js"></script>
    <script src="../assets/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="../assets/js/main.js"></script>
  </body>
</html>
