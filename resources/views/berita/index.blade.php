@extends('layouts.app')
@section('content')
    <section id="posts">
        <div class="app-container my-4">
            <div class="mb-5">
              <h4 class="fw-semibold">List Berita</h4>
            </div>
            <hr>
            <div class="row">
              @foreach ($posts as $b)
              <div class="col-sm-6 col-lg-4 col-xl-3 mb-5">
                <div class="card rounded-4 border-1 p-3 position-relative">
                  <a href="/berita/detail/{{ $b->id }}"><img src="{{ asset('images/thumb_post.png') }}" class="img-fluid rounded-3" alt="image"></a>
                  <div class="card-body p-3">
                    <a href="/berita/detail/{{ $b->id }}">
                      <h6 class="course-title mt-2 m-0">{{ $b->judul }}</h6>
                    </a>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
            <hr>
          </div>
    </section>
@endsection