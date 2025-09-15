@extends('app')

@section('title', 'Koleksi Film')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1 class="display-4 text-primary">
                    <i class="fas fa-film me-3"></i>Koleksi Film Saya
                </h1>
                <a href="{{route('film.tambah')}}" class="btn btn-success btn-lg">
                    <i class="fas fa-plus me-2"></i>Tambah Film
                </a>
            </div>

            @if($film->count() > 0)
                <div class="card shadow">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead class="table-primary">
                                    <tr>
                                        <th scope="col"><i class="fas fa-film me-2"></i>Judul</th>
                                        <th scope="col"><i class="fas fa-user me-2"></i>Sutradara</th>
                                        <th scope="col"><i class="fas fa-tags me-2"></i>Genre</th>
                                        <th scope="col"><i class="fas fa-calendar me-2"></i>Tahun</th>
                                        <th scope="col"><i class="fas fa-star me-2"></i>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($film as $item)
                                        <tr>
                                            <td class="fw-bold">{{ $item->judul }}</td>
                                            <td>{{ $item->sutradara }}</td>
                                            <td>{{ $item->genre }}</td>
                                            <td>{{ $item->tahun_rilis }}</td>
                                            <td>
                                                @if($item->status == 'watched')
                                                    <span class="badge bg-success">
                                                        <i class="fas fa-check me-1"></i>Watched
                                                    </span>
                                                @elseif($item->status == 'watching')
                                                    <span class="badge bg-warning">
                                                        <i class="fas fa-play me-1"></i>Watching
                                                    </span>
                                                @else
                                                    <span class="badge bg-info">
                                                        <i class="fas fa-clock me-1"></i>Planning
                                                    </span>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            @else
                <div class="text-center py-5">
                    <div class="mb-4">
                        <i class="fas fa-film text-muted" style="font-size: 5rem;"></i>
                    </div>
                    <h3 class="text-muted">Belum ada film dalam koleksi</h3>
                    <p class="lead text-muted mb-4">Mulai tambahkan film favorit kamu!</p>
                    <a href="{{route('film.tambah')}}" class="btn btn-primary btn-lg">
                        <i class="fas fa-plus me-2"></i>Tambah Film Pertama
                    </a>
                </div>
            @endif
        </div>
    </div>
@endsection