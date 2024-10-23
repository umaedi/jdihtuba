<!DOCTYPE html>
<html lang="en">

<head>
  <title>{{ $title ?? 'Jaringan Dokumentasi dan Informasi Hukum Kabupaten Tulang Bawang' }}</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="author" content="">
  <meta name="keywords" content="">
  <meta name="description" content="">
</head>

<link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/x-icon" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

<link rel="stylesheet" type="text/css" href="{{ asset('icomoon/icomoon.css') }}">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="{{ asset('css') }}/vendor.css">
<link rel="stylesheet" type="text/css" href="{{ asset('css') }}/style.css">
<link rel="stylesheet" type="text/css" href="{{ asset('css') }}/custom.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
<style>
  .course-title {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
  }
  .text-truncate-3 {
      display: -webkit-box;
      -webkit-line-clamp: 3;
      -webkit-box-orient: vertical;
      overflow: hidden;
      text-overflow: ellipsis;
    }

    .lead p {
      font-size: 20px !important;
    }
    .main-menu {
      border-bottom: #0a2647 3px solid;
    }
</style>

</head>

<body>
  <nav class="main-menu d-flex navbar navbar-expand-lg p-2 py-3 p-lg-4 py-lg-4">
    <div class="container-fluid justify-content-center">
      <div class="main-logo d-lg-none">
        <a href="/">
          <img src="{{ asset('images/logo-jdih-tuba.png') }}" lazy="loading" alt="logo" class="img-fluid" width="100%">
        </a>
      </div>

      <button class="navbar-toggler shadow-none mt-2" type="button" data-bs-toggle="offcanvas"
        data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">

        <div class="offcanvas-header mt-3">
          <button type="button" class="btn-close shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <div class="offcanvas-body justify-content-between">
          <div class="main-logo">
            <a href="/">
              {{-- <h4>JDIH TUBA</h4> --}}
              <img src="{{ asset('images/logo-jdih-tuba.png') }}" lazy="loading" alt="logo" class="img-fluid" width="50%">
            </a>
          </div>

          <ul class="navbar-nav menu-list list-unstyled align-items-lg-center d-flex gap-md-3 mb-0">
            <li class="nav-item">
              <a href="/" class="nav-link mx-2 {{ Request::is('/') ? 'active' : '' }}">Beranda</a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link mx-2 dropdown-toggle align-items-center" role="button" id="pages"
                data-bs-toggle="dropdown" aria-expanded="false">Tentang</a>
              <ul class="dropdown-menu" aria-labelledby="pages">
                <li><a href="/sejarah" class="dropdown-item">Sekilas Sejarah</a></li>
                <li><a href="/dasar-hukum" class="dropdown-item">Dasar Hukum</a></li>
                <li><a href="/visi-misi" class="dropdown-item">Visi dan Misi</a></li>
                <li><a href="{{ asset('pdf/struktur_jdih_tuba.pdf') }}" class="dropdown-item">Struktur Oragnisasi</a></li>
                <li><a href="{{ asset('pdf/sop_jdih_tuba.pdf') }}" class="dropdown-item">SOP</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link mx-2 dropdown-toggle align-items-center" role="button" id="pages"
                data-bs-toggle="dropdown" aria-expanded="false">Jenis Dokumen</a>
              <ul class="dropdown-menu" aria-labelledby="pages">
                <li><a href="/cari?jenis=1" class="dropdown-item">Peraturan</a></li>
                <li><a href="/cari?jenis=2" class="dropdown-item">Monografi</a></li>
                <li><a href="/cari?jenis=3" class="dropdown-item">Artikel/Majalah Hukum</a></li>
                <li><a href="/cari?jenis=4" class="dropdown-item">Putusan</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="/berita" class="nav-link mx-2 {{ Request::is('berita*') ? 'active' : '' }}">Berita</a>
            </li>
            <li class="nav-item">
              <a href="/ikm" class="nav-link mx-2">IKM</a>
            </li>
            <li class="nav-item">
              <a href="https://api-jdih.tulangbawangkab.go.id/" target="_blank" class="nav-link mx-2">API</a>
            </li>
          </ul>

          <div class="d-none d-lg-flex align-items-center">
            <ul class="d-flex  align-items-center list-unstyled m-0 d-flex">
              @auth
              <div class="badge" style="background: #0a2647">
                <img src="{{ auth()->user()->avatar }}" alt="" class="rounded-circle" width="30px"> {{ auth()->user()->name }}
              </div>
              @else
              <li>
                <a href="/auth/google/redirect" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="17px" fill="#fff"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z"/></svg> Login</a>
              </li>
              @endauth
            </ul>
          </div>

        </div>
      </div>

    </div>
  </nav>
  {{-- <section id="main"> --}}
    @yield('content')
  {{-- </section> --}}
  <footer id="footerx">
    <div class="footer">
      <div class="row">
        <div class="col-12 col-md-6 col-lg-4 my-3">
          <div class="footer-menu text-center">
            <h5 class=" fw-bold mb-4 text-white">Pengunjung</h5>
            <a href="https://info.flagcounter.com/M8ux"><img src="https://s01.flagcounter.com/count2/M8ux/bg_FFFFFF/txt_000000/border_CCCCCC/columns_2/maxflags_10/viewers_3/labels_0/pageviews_0/flags_0/percent_0/" alt="Flag Counter" border="0"></a>
          </div>
        </div>
        <div class="col-6 col-md-6 col-lg-2 my-3">
          <div class="footer-menu">
            <h5 class=" fw-bold mb-4 text-white">Pintasan</h5>
            <ul class="menu-list list-unstyled">
              <li class="menu-item mb-2">
                <a href="https://jdihn.go.id/" class="footer-link text-white">JDIHN</a>
              </li>
              <li class="menu-item mb-2">
                <a href="https://jdih.lampungprov.go.id/" class="footer-link text-white">JDIH LAMPUNG</a>
              </li>
              <li class="menu-item mb-2">
                <a href="http://127.0.0.1:8000/" class="footer-link text-white">JDIH Tulang Bawang</a>
              </li>
              <li class="menu-item mb-2">
                <a href="https://dprd.tulangbawangkab.go.id/" class="footer-link text-white">JDIH DPRD Tulang Bawang</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-6 col-md-6 col-lg-2 my-3">
          <div class="footer-menu">
            <h5 class=" fw-bold mb-4 text-white">Tentang</h5>
            <ul class="menu-list list-unstyled">
              <li class="menu-item mb-2">
                <a href="/sejarah" class="footer-link text-white">Sekilas Sejarah</a>
              </li>
              <li class="menu-item mb-2">
                <a href="/dasar-hukum" class="footer-link text-white">Dasar Hukum</a>
              </li>
              <li class="menu-item mb-2">
                <a href="/visi-misi" class="footer-link text-white">Visi dan Misi</a>
              </li>
              <li class="menu-item mb-2">
                <a href="{{ asset('pdf/struktur_jdih_tuba.pdf') }}" class="footer-link text-white">Sturktur Organisasi</a>
                <a href="{{ asset('pdf/sop_jdih_tuba.pdf') }}" class="footer-link text-white">SOP</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-6 col-md-6 col-lg-2 my-3">
          <div class="footer-menu">
            <h5 class=" fw-bold mb-4 text-white">Jenis Dokumen</h5>
            <ul class="menu-list list-unstyled">
              <li class="menu-item mb-2">
                <a href="/cari?=1" class="footer-link text-white">Peraturan</a>
              </li>
              <li class="menu-item mb-2">
                <a href="/cari?=2" class="footer-link text-white">Monografi</a>
              </li>
              <li class="menu-item mb-2">
                <a href="/cari?=3" class="footer-link text-white">Artikel/Majalah Hukum</a>
              </li>
              <li class="menu-item mb-2">
                <a href="/cari?=4" class="footer-link text-white">Putusan</a>
              </li>

            </ul>
          </div>
        </div>
        <div class="col-6 col-md-6 col-lg-2 my-3">
          <div class="footer-menu">
            <h5 class=" fw-bold mb-4 text-white">Kontak Kami</h5>
            <ul class="menu-list list-unstyled">
              <li class="menu-item mb-2">
                <a href="#" class="footer-link text-white">hukumtuba@gmail.com</a>
              </li>
              <li class="menu-item mb-2">
                <a href="#" class="footer-link text-white">0726 7575156</a>
              </li>
              <li class="menu-item mb-2">
                <a href="#" class="footer-link text-white">JL.Cemara Komplek Perkantoran Pemda Tulang Bawang</a>
              </li>
              {{-- <li class="menu-item mb-2">
                <a href="https://info.flagcounter.com/ECzG"><img src="https://s11.flagcounter.com/count2/ECzG/bg_FFFFFF/txt_000000/border_CCCCCC/columns_2/maxflags_10/viewers_3/labels_0/pageviews_0/flags_0/percent_0/" alt="Flag Counter" border="0"></a>
              </li> --}}
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>

  {{-- <div id="footer-bottom">
    <hr class="text-black-50">
    <div class="container">
      <div class="row py-3">
        <div class="col-md-6 copyright">
          <p>© 2024 Tulang Bawang. All rights reserved.</p>
        </div>
        <div class="col-md-6 text-md-end">
          <p>Develop by: Umaedi KH</p>
        </div>
      </div>
    </div>
  </div> --}}


  {{-- <script src="js/jquery-1.11.0.min.js"></script> --}}
  {{-- <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script> --}}
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
  {{-- <script src="js/plugins.js"></script>
  <script src="js/script.js"></script> --}}
  <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
  @stack('js')
</body>

</html>