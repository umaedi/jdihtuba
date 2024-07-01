@extends('layouts.app')
@section('content')
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('images/banner_jdih_tuba.jpg') }}" class="d-block w-100" alt="banner">
      </div>
    </div>
    {{-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button> --}}
  </div>
  <section id="search" class="app-container position-relative">
    <div class="mb-3">
        {{-- <div class="col-md-12"> --}}
          <form id="form" action="/cari" method="GET" class="d-flex align-items-center position-relative search-input">
            <input type="text" name="judul" placeholder="Cari produk hukum..." autofocus class="form-control bg-white border-0 rounded-4 shadow-none px-4  w-100">
            <button type="submit" class="btn btn-primary rounded-4 px-3 py-2 position-absolute align-items-center m-1 end-0">
              <svg fill="#fff" xmlns="http://www.w3.org/2000/svg" width="20px" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg>
          </button>
          </form>
        {{-- </div> --}}
    </div>
  </section>

  <section id="features" class="app-container sesction1 position-relative">
    <div class="container">
      <div class="row g-md-3">
        <div class="col-md-4">
          <a href="/peraturan">
            <div class="primary informasi rounded-3 p-4 my-3">
              <div class="d-flex align-items-center">
                <svg class="icon" fill="#4CC082" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="60px" height="60px"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M318.6 9.4c-12.5-12.5-32.8-12.5-45.3 0l-120 120c-12.5 12.5-12.5 32.8 0 45.3l16 16c12.5 12.5 32.8 12.5 45.3 0l4-4L325.4 293.4l-4 4c-12.5 12.5-12.5 32.8 0 45.3l16 16c12.5 12.5 32.8 12.5 45.3 0l120-120c12.5-12.5 12.5-32.8 0-45.3l-16-16c-12.5-12.5-32.8-12.5-45.3 0l-4 4L330.6 74.6l4-4c12.5-12.5 12.5-32.8 0-45.3l-16-16zm-152 288c-12.5-12.5-32.8-12.5-45.3 0l-112 112c-12.5 12.5-12.5 32.8 0 45.3l48 48c12.5 12.5 32.8 12.5 45.3 0l112-112c12.5-12.5 12.5-32.8 0-45.3l-1.4-1.4L272 285.3 226.7 240 168 298.7l-1.4-1.4z"/></svg>
                <div class="ps-4">
                  <p class="category-paragraph fw-bold text-uppercase mb-1">Peraturan</p>
                  <p class="category-paragraph m-0">{{ $peraturan }}</p>
                </div>
              </div>
            </div>
          </a>
          <div class="tertiary informasi rounded-3 p-4 my-3">
            <div class="d-flex align-items-center">
              <svg class="icon" fill="#f8be60" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="60px" height="60px"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M96 0C43 0 0 43 0 96V416c0 53 43 96 96 96H384h32c17.7 0 32-14.3 32-32s-14.3-32-32-32V384c17.7 0 32-14.3 32-32V32c0-17.7-14.3-32-32-32H384 96zm0 384H352v64H96c-17.7 0-32-14.3-32-32s14.3-32 32-32zm32-240c0-8.8 7.2-16 16-16H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16zm16 48H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16s7.2-16 16-16z"/></svg>
              <div class="ps-4">
                <p class="category-paragraph fw-bold text-uppercase mb-1">Yurisprudensi</p>
                <p class="category-paragraph m-0">0</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="gray informasi rounded-3 p-4 my-3">
            <div class="d-flex align-items-center">
              <svg class="icon" fill="#31333a" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="60px" height="60px"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M240.1 4.2c9.8-5.6 21.9-5.6 31.8 0l171.8 98.1L448 104l0 .9 47.9 27.4c12.6 7.2 18.8 22 15.1 36s-16.4 23.8-30.9 23.8H32c-14.5 0-27.2-9.8-30.9-23.8s2.5-28.8 15.1-36L64 104.9V104l4.4-1.6L240.1 4.2zM64 224h64V416h40V224h64V416h48V224h64V416h40V224h64V420.3c.6 .3 1.2 .7 1.8 1.1l48 32c11.7 7.8 17 22.4 12.9 35.9S494.1 512 480 512H32c-14.1 0-26.5-9.2-30.6-22.7s1.1-28.1 12.9-35.9l48-32c.6-.4 1.2-.7 1.8-1.1V224z"/></svg>
              <div class="ps-4">
                <p class="category-paragraph fw-bold text-uppercase mb-1">Monografi Hukum</p>
                <p class="category-paragraph m-0">0</p>
              </div>
            </div>
          </div>
          <div class="secondary informasi rounded-3 p-4 my-3">
            <a href="/berita">
              <div class="d-flex align-items-center">
                <svg class="icon" fill="#EC6C5A" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="60px" height="60px"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M168 80c-13.3 0-24 10.7-24 24V408c0 8.4-1.4 16.5-4.1 24H440c13.3 0 24-10.7 24-24V104c0-13.3-10.7-24-24-24H168zM72 480c-39.8 0-72-32.2-72-72V112C0 98.7 10.7 88 24 88s24 10.7 24 24V408c0 13.3 10.7 24 24 24s24-10.7 24-24V104c0-39.8 32.2-72 72-72H440c39.8 0 72 32.2 72 72V408c0 39.8-32.2 72-72 72H72zM176 136c0-13.3 10.7-24 24-24h96c13.3 0 24 10.7 24 24v80c0 13.3-10.7 24-24 24H200c-13.3 0-24-10.7-24-24V136zm200-24h32c13.3 0 24 10.7 24 24s-10.7 24-24 24H376c-13.3 0-24-10.7-24-24s10.7-24 24-24zm0 80h32c13.3 0 24 10.7 24 24s-10.7 24-24 24H376c-13.3 0-24-10.7-24-24s10.7-24 24-24zM200 272H408c13.3 0 24 10.7 24 24s-10.7 24-24 24H200c-13.3 0-24-10.7-24-24s10.7-24 24-24zm0 80H408c13.3 0 24 10.7 24 24s-10.7 24-24 24H200c-13.3 0-24-10.7-24-24s10.7-24 24-24z"/></svg>
                <div class="ps-4">
                  <p class="category-paragraph fw-bold text-uppercase mb-1">Berita</p>
                  <p class="category-paragraph m-0">{{ $berita }}</p>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="tertiary informasi rounded-3 p-4 my-3">
            <div class="d-flex align-items-center">
              <svg class="icon" fill="#f8be60" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" width="60px" height="60px"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M88.7 223.8L0 375.8V96C0 60.7 28.7 32 64 32H181.5c17 0 33.3 6.7 45.3 18.7l26.5 26.5c12 12 28.3 18.7 45.3 18.7H416c35.3 0 64 28.7 64 64v32H144c-22.8 0-43.8 12.1-55.3 31.8zm27.6 16.1C122.1 230 132.6 224 144 224H544c11.5 0 22 6.1 27.7 16.1s5.7 22.2-.1 32.1l-112 192C453.9 474 443.4 480 432 480H32c-11.5 0-22-6.1-27.7-16.1s-5.7-22.2 .1-32.1l112-192z"/></svg>
              <div class="ps-4">
                <p class="category-paragraph fw-bold text-uppercase mb-1">Artikel Hukum</p>
                <p class="category-paragraph m-0">0</p>
              </div>
            </div>
          </div>
          <div class="primary informasi rounded-3 p-4 my-3">
            <div class="d-flex align-items-center">
              <svg class="icon" fill="#4CC082" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="60px" height="60px"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M123.6 391.3c12.9-9.4 29.6-11.8 44.6-6.4c26.5 9.6 56.2 15.1 87.8 15.1c124.7 0 208-80.5 208-160s-83.3-160-208-160S48 160.5 48 240c0 32 12.4 62.8 35.7 89.2c8.6 9.7 12.8 22.5 11.8 35.5c-1.4 18.1-5.7 34.7-11.3 49.4c17-7.9 31.1-16.7 39.4-22.7zM21.2 431.9c1.8-2.7 3.5-5.4 5.1-8.1c10-16.6 19.5-38.4 21.4-62.9C17.7 326.8 0 285.1 0 240C0 125.1 114.6 32 256 32s256 93.1 256 208s-114.6 208-256 208c-37.1 0-72.3-6.4-104.1-17.9c-11.9 8.7-31.3 20.6-54.3 30.6c-15.1 6.6-32.3 12.6-50.1 16.1c-.8 .2-1.6 .3-2.4 .5c-4.4 .8-8.7 1.5-13.2 1.9c-.2 0-.5 .1-.7 .1c-5.1 .5-10.2 .8-15.3 .8c-6.5 0-12.3-3.9-14.8-9.9c-2.5-6-1.1-12.8 3.4-17.4c4.1-4.2 7.8-8.7 11.3-13.5c1.7-2.3 3.3-4.6 4.8-6.9c.1-.2 .2-.3 .3-.5z"/></svg>
              <div class="ps-4">
                <p class="category-paragraph fw-bold text-uppercase mb-1">IKM</p>
                <p class="category-paragraph m-0">0</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="courses" class="app-container section2 position-relative">
    <div class="container">
      <div class="text-center mb-5">
        <h3 class="fw-semibold">Produk Hukum Terbaru</h3>
      </div>
      <div class="row">
        @foreach ($peraturan_terbaru as $ptb)
        <div class="col-sm-6 col-lg-6 col-xl-6">
            <a href="/peraturan/detail/{{ $ptb->id }}">
            <div class="card mb-3">
              <div class="row g-0">
                <div class="col-3 col-md-2">
                  <img src="{{ asset('images/thum_jdih.png') }}" class="img-fluid rounded-start" alt="thumb">
                </div>
                <div class="col-9 col-md-10">
                  <div class="card-body">
                    <h5 class="card-title fs-6 fs-md-5">{{ $ptb->judul }}</h5>
                    <p class="card-text"><small class="text-muted">Status: {{ $ptb->status }} | Dilihat: {{ $ptb->hit_see ?? '50' }} | Didownload: {{ $ptb->hit_see ?? '10' }}</small></p>
                  </div>
                </div>
              </div>
            </div>
          </a>
          </div>
        @endforeach
      </div>
    </div>
  </section>
  <section id="courses" class="app-container section3 position-relative mt-5">
    <div class="container">
      <div class="text-center mb-5">
        <h3 class="fw-semibold">Produk Hukum Terpopuler</h3>
      </div>
      <div class="row">
        @foreach ($peraturan_populer as $item)
        <div class="col-sm-6 col-lg-6 col-xl-6">
          <a href="/peraturan/detail/{{ $ptb->id }}">
          <div class="card mb-3">
            <div class="row g-0">
              <div class="col-3 col-md-2">
                <img src="{{ asset('images/thum_jdih.png') }}" class="img-fluid rounded-start" alt="thumb">
              </div>
              <div class="col-9 col-md-10">
                <div class="card-body">
                  <h5 class="card-title fs-6 fs-md-5">{{ $ptb->judul }}</h5>
                  <p class="card-text"><small class="text-muted">Status: {{ $ptb->status }} | Dilihat: {{ $ptb->hit_see ?? '50' }} | Didownload: {{ $ptb->hit_see ?? '10' }}</small></p>
                </div>
              </div>
            </div>
          </div>
          </a>
        </div>
        @endforeach
      </div>
    </div>
  </section>

  <section id="courses" class="app-container section4 position-relative mt-5">
    <div class="container mt-4">
      <div class="text-center mb-5">
        <h3 class="fw-semibold">Berita</h3>
      </div>

      <div class="row">
        @foreach ($news as $b)
        <div class="col-sm-6 col-lg-4 col-xl-3 mb-5">
          <div class="card rounded-4 border-1 p-3 position-relative">
            <a href="/berita/detail/{{ $b->id }}"><img src="{{ asset('images/thumb_post.png') }}" class="img-fluid rounded-3" alt="image"></a>
            <div class="card-body p-3">
              <a href="/berita/detail/{{ $b->id }}">
                <h6 class="course-title mt-2 m-0 fs-6 fs-md-5">{{ $b->judul }}</h6>
              </a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>

  <section id="grafik" class="app-container section4 position-relative mt-5">
    <div class="container mt-4">
      <div class="text-center mb-5">
        <h3 class="fw-semibold">Grafik Produk Hukum</h3>
      </div>
      <div class="row" id="chart">

      </div>
    </div>
  </section>

  <section id="backlink" class="app-container position-relative mt-5">
    <div class="container">
      <div class="row text-center">
        <h3 class="fw-semibold mb-3">Link Terkait</h3>
        <div class="col-md-3 col-6 mb-5 mb-md-0">
          <div class="feature-item py-5  rounded-4">
            <a href="https://jdihn.go.id/">
              <div class="feature-detail text-center">
                <img src="{{ asset('images/logo-awal-jdihn-small.png') }}" alt="logo" width="50%">
                <h6 class="feature-info text-uppercase">JDIHN</h6>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-3 col-6 mb-5 mb-md-0">
          <div class="feature-item py-5  rounded-4">
            <a href="https://jdih.lampungprov.go.id/">
              <div class="feature-detail text-center">
                <img src="{{ asset('images/logo-kabupaten-tulang-bawang.png') }}" alt="logo" width="38%">
                <h6 class="feature-info text-uppercase">JDIH LAMPUNG</h6>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-3 col-6 mb-5 mb-md-0">
          <div class="feature-item py-5  rounded-4">
            <a href="/">
              <div class="feature-detail text-center">
                <img src="{{ asset('images/logo-kabupaten-tulang-bawang.png') }}" alt="logo" width="38%">
                <h6 class="feature-info text-uppercase">JDIH TULANG BAWANG</h6>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-3 col-6 mb-5 mb-md-0">
          <div class="feature-item py-5  rounded-4">
            <a href="https://dprd.tulangbawangkab.go.id/">
            <div class="feature-detail text-center">
              <img src="{{ asset('images/logo-kabupaten-tulang-bawang.png') }}" alt="logo" width="38%">
              <h6 class="feature-info text-uppercase">JDIH DPRD TULANG BAWANG</h6>
            </div>
          </a>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
@push('js')
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
  options = {
  chart: {
    type: 'bar',
    height: 400,
  },
  plotOptions: {
    bar: {
      horizontal: false
    }
  },
  series: [{
      name: 'Produk hukum',
      data: @json($chartData),
      color: "#0a2647"
  }]

}

var chart = new ApexCharts(document.querySelector("#chart"), options);
chart.render();
</script>
@endpush