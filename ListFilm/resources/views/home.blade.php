@extends('app')

@section('title', 'Home - Film Collection')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="text-center py-5">
                <div class="mb-4">
                    <i class="fas fa-film text-primary" style="font-size: 5rem;"></i>
                </div>
                <h1 class="display-4 text-primary mb-3">Film Collection App</h1>
                <p class="lead text-muted mb-4">
                    Kelola koleksi film favorit kamu dengan mudah dan terorganisir
                </p>
                
                <div class="d-flex gap-3 justify-content-center flex-wrap">
                    <a href="{{ route('film') }}" class="btn btn-primary btn-lg">
                        <i class="fas fa-video me-2"></i>Lihat Koleksi Film
                    </a>
                    <a href="{{ route('film.tambah') }}" class="btn btn-success btn-lg">
                        <i class="fas fa-plus me-2"></i>Tambah Film Baru
                    </a>
                </div>
            </div>
        </div>
    </div>


@endsection