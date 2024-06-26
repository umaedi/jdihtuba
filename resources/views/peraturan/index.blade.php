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
      {{ $peraturan_terbaru->links() }}
      <hr>
    </div>
  </section>
@endsection