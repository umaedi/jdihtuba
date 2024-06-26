@extends('layouts.app')
@section('content')
<section>
  <div class="bg-gd-bpk-2 mb-8">
    <div class="container p-4">
        <div class="py-lg-16 py-8">
            <h5 class="text-white">
                Jaringan Dokumentasi dan Informasi Hukum Kabupaten Tulang Bawang
            </h5>
        </div>
    </div>
</div>
    <div class="container mt-4">
        <div class="row gy-4 gx-4 gx-xl-5">
          <div class="col-12 col-lg-8 col-xl-8 border rounded gap-2 p-2 bg-white">
            <div class="mb-4 mb-xl-5">
              <div class="text-135 fs-4 fw-bold  text-uppercase oswald m-0 p-0 lh-1 mb-3 mb-lg-4">Detail Peraturan</div>
              <div class="row py-2 gx-3 gy-1 hover-bgeee lh-1 transisi align-items-center">
                <div class="col-12 col-sm-4 text-sm-end">Tipe Dokumen</div>
                <div class="col-12 col-sm-8 fs-5 fw-500">Peraturan Perundang-undangan</div>
              </div>
              <div class="row py-2 gx-3 gy-1 hover-bgeee lh-1 transisi align-items-center">
                <div class="col-12 col-sm-4 text-sm-end">Judul</div>
                <div class="col-12 col-sm-8 fs-5 fw-500 lh-sm">{{ $peraturan->judul }}</div>
              </div>
              <div class="row py-2 gx-3 gy-1 hover-bgeee lh-1 transisi align-items-center">
                <div class="col-12 col-sm-4 text-sm-end">T.E.U. Badan / Pengarang</div>
                <div class="col-12 col-sm-8 fs-5 fw-500">{{ $peraturan->teu }}</div>
              </div>
              <div class="row py-2 gx-3 gy-1 hover-bgeee lh-1 transisi align-items-center">
                <div class="col-12 col-sm-4 text-sm-end">Nomor Peraturan</div>
                <div class="col-12 col-sm-8 fs-5 fw-500">{{ $peraturan->nomor_peraturan }}</div>
              </div>
              <div class="row py-2 gx-3 gy-1 hover-bgeee lh-1 transisi align-items-center">
                <div class="col-12 col-sm-4 text-sm-end">Jenis / Bentuk Peraturan</div>
                <div class="col-12 col-sm-8 fs-5 fw-500">{{ $peraturan->jenis_peraturan }}</div>
              </div>
              <div class="row py-2 gx-3 gy-1 hover-bgeee lh-1 transisi align-items-center">
                <div class="col-12 col-sm-4 text-sm-end">Singkatan Jenis / Bentuk Peraturan</div>
                <div class="col-12 col-sm-8 fs-5 fw-500">{{ $peraturan->singkatan_jenis }}</div>
              </div>
              <div class="row py-2 gx-3 gy-1 hover-bgeee lh-1 transisi align-items-center">
                <div class="col-12 col-sm-4 text-sm-end">Tempat Penetapan</div>
                <div class="col-12 col-sm-8 fs-5 fw-500">{{ $peraturan->tempat_terbit }}</div>
              </div>
              <div class="row py-2 gx-3 gy-1 hover-bgeee lh-1 transisi align-items-center">
                <div class="col-12 col-sm-4 text-sm-end">Tanggal Penetapan</div>
                <div class="col-12 col-sm-8 fs-5 fw-500">{{ $peraturan->tanggal_penetapan }}</div>
              </div>
              <div class="row py-2 gx-3 gy-1 hover-bgeee lh-1 transisi align-items-center">
                <div class="col-12 col-sm-4 text-sm-end">Tanggal Pengundangan</div>
                <div class="col-12 col-sm-8 fs-5 fw-500">{{ $peraturan->tanggal_pengundangan }}</div>
              </div>
              <div class="row py-2 gx-3 gy-1 hover-bgeee lh-1 transisi align-items-center">
                <div class="col-12 col-sm-4 text-sm-end">Sumber</div>
                <div class="col-12 col-sm-8 fs-5 fw-500">{{ $peraturan->sumber }}</div>
              </div>
              <div class="row py-2 gx-3 gy-1 hover-bgeee lh-1 transisi align-items-center">
                <div class="col-12 col-sm-4 text-sm-end">Subjek</div>
                <div class="col-12 col-sm-8 fs-5 fw-500">
                  <div class="d-flex flex-wrap gap-1">
                    <a class="btn btn-outline-dark lh-1 small" href="#">{{ $peraturan->subyek }}</a>
                  </div>
                </div>
              </div>
              <div class="row py-2 gx-3 gy-1 hover-bgeee lh-1 transisi align-items-center">
                <div class="col-12 col-sm-4 text-sm-end">Status</div>
                <div class="col-12 col-sm-8 fs-5 fw-500">{{ $peraturan->status }}</div>
              </div>
              <div class="row py-2 gx-3 gy-1 hover-bgeee lh-1 transisi align-items-center">
                <div class="col-12 col-sm-4 text-sm-end">Bahasa</div>
                <div class="col-12 col-sm-8 fs-5 fw-500">{{ $peraturan->bahasa }}</div>
              </div>
              <div class="row py-2 gx-3 gy-1 hover-bgeee lh-1 transisi align-items-center">
                <div class="col-12 col-sm-4 text-sm-end">Lokasi</div>
                <div class="col-12 col-sm-8 fs-5 fw-500">Pemerintah Kota Bandung</div>
              </div>
              <div class="row py-2 gx-3 gy-1 hover-bgeee lh-1 transisi align-items-center">
                <div class="col-12 col-sm-4 text-sm-end">Bidang Hukum</div>
                <div class="col-12 col-sm-8 fs-5 fw-500">{{ $peraturan->bidang_hukum }}</div>
              </div>
              <div class="row py-2 gx-3 gy-1 hover-bgeee lh-1 transisi align-items-center">
                <div class="col-12 col-sm-4 text-sm-end">Lampiran</div>
                <div class="col-12 col-sm-8 fs-5 fw-500">
                  <button data-bs-toggle="modal" data-bs-target="#previewleModal" class="btn btn-primary">Preview</button>
                  <a href="https://jdih.tulangbawangkab.go.id/common/dokumen/{{ $peraturan->dokumen_lampiran }}" class="btn btn-primary">Download</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-4 col-xl-3">
            <div class="row gy-4">
              <div class="col-12 col-sm-6 col-lg-12">
                <div id="mod_tahun">
                  <div class="text-135 border rounded bg-white p-2 fs-6 fw-bold text-uppercase oswald mb-2 mb-md-3">Tahun Produk Hukum</div>
                  <div class="d-flex flex-column gap-1">
                    @foreach ($doktahun as $dokth)
                    <a class="kat_mod lh-1 d-flex border rounded gap-2 p-2 bg-white align-items-center text-dark" href="/cari?tahun={{ $dokth->tahun_terbit }}">
                        <span class="flex-shrink-1"><span class="bi bi-folder"></span></span>
                        <span class="flex-grow-1 text-start">{{ $dokth->tahun_terbit }}</span>
                        <span class="flex-shrink-1">{{ $dokth->document_count }}</span>
                    </a>
                    @endforeach
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    <hr>
</section>
<!-- Modal -->
<div class="modal fade" id="previewleModal" tabindex="-1" aria-labelledby="previewleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="previewleModalLabel">Preview Dokumen</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <embed type="application/pdf" src="https://jdih.tulangbawangkab.go.id/common/dokumen/{{ $peraturan->dokumen_lampiran }}" width="100%" height="400"></embed>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@endsection