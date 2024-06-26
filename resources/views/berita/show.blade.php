@extends('layouts.app')
@section('content')
    <section id="posts">
        <div class="app-container my-4">
            <div class="row">
                <div class="col-md-8">
                    <h3>{{ $berita->judul }}</h3>
                    <hr>
                    <div  class="lead">
                        <p>{!! $berita->isi !!}</p>
                    </div>
                </div>
                <div class="col-md-4">
                    @foreach ($postsShow as $new)
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-4 col-md-4 p-2">
                              <img src="{{ asset('images/logo-kabupaten-tulang-bawang.png') }}" class="img-fluid rounded-start" alt="thumbnail" width="70%">
                            </div>
                            <div class="col-8 col-md-8">
                            <a href="/berita/detail/{{ $new->id }}">
                              <div class="card-body">
                                <p class="text-truncate-3">
                                    {{ $new->judul }}
                                </p>
                               </div>
                            </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <hr>
            </div>
          </div>
    </section>
@endsection