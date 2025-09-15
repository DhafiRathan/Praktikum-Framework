@extends('app')

@section('title', 'Tambah Film Baru')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h3 class="card-title mb-0">
                        <i class="fas fa-plus-circle me-2"></i>Tambah Film Baru
                    </h3>
                </div>
                <div class="card-body">
                    <form action="{{route('film.simpan')}}" method="post">
                        @csrf
                        
                        <div class="mb-3">
                            <label for="judul" class="form-label">
                                <i class="fas fa-film me-2 text-primary"></i>Judul Film
                            </label>
                            <input type="text" 
                                class="form-control @error('judul') is-invalid @enderror" 
                                id="judul" 
                                name="judul" 
                                value="{{ old('judul') }}"
                                placeholder="Contoh: The Dark Knight">
                            @error('judul')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="sutradara" class="form-label">
                                <i class="fas fa-user me-2 text-primary"></i>Sutradara
                            </label>
                            <input type="text" 
                                class="form-control @error('sutradara') is-invalid @enderror" 
                                id="sutradara" 
                                name="sutradara" 
                                value="{{ old('sutradara') }}"
                                placeholder="Contoh: Christopher Nolan">
                            @error('sutradara')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="genre" class="form-label">
                                <i class="fas fa-tags me-2 text-primary"></i>Genre
                            </label>
                            <input type="text" 
                                class="form-control @error('genre') is-invalid @enderror" 
                                id="genre" 
                                name="genre" 
                                value="{{ old('genre') }}"
                                placeholder="Contoh: Action, Drama, Comedy">
                            @error('genre')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="tahun_rilis" class="form-label">
                                <i class="fas fa-calendar me-2 text-primary"></i>Tahun Rilis
                            </label>
                            <input type="number" 
                                class="form-control @error('tahun_rilis') is-invalid @enderror" 
                                id="tahun_rilis" 
                                name="tahun_rilis" 
                                value="{{ old('tahun_rilis') }}"
                                min="1900" 
                                max="2030" 
                                placeholder="2023">
                            @error('tahun_rilis')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="mb-4">
                            <label for="status" class="form-label">
                                <i class="fas fa-star me-2 text-primary"></i>Status Menonton
                            </label>
                            <select class="form-select @error('status') is-invalid @enderror" 
                                    id="status" 
                                    name="status">
                                <option value="">Pilih Status</option>
                                <option value="planning" {{ old('status') == 'planning' ? 'selected' : '' }}>
                                    <i class="fas fa-clock me-1"></i>Planning to Watch
                                </option>
                                <option value="watching" {{ old('status') == 'watching' ? 'selected' : '' }}>
                                    <i class="fas fa-play me-1"></i>Currently Watching
                                </option>
                                <option value="watched" {{ old('status') == 'watched' ? 'selected' : '' }}>
                                    <i class="fas fa-check me-1"></i>Watched
                                </option>
                            </select>
                            @error('status')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="{{ route('film') }}" class="btn btn-secondary me-md-2">
                                <i class="fas fa-arrow-left me-2"></i>Kembali
                            </a>
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save me-2"></i>Simpan Film
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection