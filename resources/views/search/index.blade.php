@extends('layouts.app')
@section('content')
<section id="courses" class="my-4">
  <div class="app-container mb-3">
    <form action="/cari" method="GET">
      <div class="row">
        <h5 class="fw-semibold">Pencarian Lanjutan</h5>
        <div class="col-md-4">
          <div class="form-group mb-3">
            <input type="text" name="judul" class="form-control" placeholder="Judul">
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group mb-3">
            <select name="tipe_dokumen" class="form-control" id="">
              <option value="">--type pengelolaan--</option>
              <option value="1">Peraturan</option>
              <option value="2">Monografi</option>
              <option value="3">Artikel/Majalah Hukum</option>
              <option value="4">Putusan</option>
            </select>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group mb-3">
            <select name="jenis_dokumen" class="form-control" id="">
              <option value="">--jenis dokumen--</option>
              @foreach ($tipe_dokumen as $doctype)
              <option value="{{  $doctype->id }}">{{ $doctype->name }}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group mb-3">
           <input type="text" name="nomor_peraturan" class="form-control" placeholder="Nomor Peraturan">
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group mb-3">
           <input type="text" name="tahun_terbit" class="form-control" placeholder="Tahun terbit">
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group mb-3">
            <select name="status" class="form-control" id="">
              <option value="">--status--</option>
              <option value="dicabut">dicabut</option>
              <option value="mencabut">mencabut</option>
              <option value="diubah">diubah</option>
              <option value="mengubah">mengubah</option>
              <option value="tidak memiliki daya guna">tidak memiliki daya guna</option>
            </select>
          </div>
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Cari</button>
      </form>
  </div>
    <div class="app-container">
      <div class="mb-5">
        <h5 class="fw-semibold">Produk Hukum</h5>
      </div>
      <div class="row">
        @forelse ($documents as $doc)
        <div class="col-sm-6 col-lg-6 col-xl-6">
            <a href="/peraturan/detail/{{ $doc->id }}">
            <div class="card mb-3">
                <div class="row g-0">
                <div class="col-3 col-md-2">
                    <img src="{{ asset('images/thum_jdih.png') }}" class="img-fluid rounded-start" alt="thumb">
                </div>
                <div class="col-9 col-md-10">
                    <div class="card-body">
                    <h5 class="card-title fs-6 fs-md-5">{{ $doc->judul }}</h5>
                    <p class="card-text"><small class="text-muted">Status: {{ $doc->status }} | Dilihat: {{ $doc->hit_see ?? '50' }} | Didownload: {{ $doc->hit_see ?? '10' }}</small></p>
                    </div>
                </div>
                </div>
            </div>
            </a>
        </div>
        @empty
        <div class="empty text-center">
            <div class="empty-img">
                <svg  style="width: 96px; height: 96px" xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-database-off" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M12.983 8.978c3.955 -.182 7.017 -1.446 7.017 -2.978c0 -1.657 -3.582 -3 -8 -3c-1.661 0 -3.204 .19 -4.483 .515m-2.783 1.228c-.471 .382 -.734 .808 -.734 1.257c0 1.22 1.944 2.271 4.734 2.74"></path>
                    <path d="M4 6v6c0 1.657 3.582 3 8 3c.986 0 1.93 -.067 2.802 -.19m3.187 -.82c1.251 -.53 2.011 -1.228 2.011 -1.99v-6"></path>
                    <path d="M4 12v6c0 1.657 3.582 3 8 3c3.217 0 5.991 -.712 7.261 -1.74m.739 -3.26v-4"></path>
                    <line x1="3" y1="3" x2="21" y2="21"></line>
                </svg>
            </div>
            <p class="empty-title">Tidak ada data yang tersedia</p>
        </div>
        @endforelse
      </div>
      {{ $documents->links() }}
      <hr>
    </div>
  </section>
@endsection