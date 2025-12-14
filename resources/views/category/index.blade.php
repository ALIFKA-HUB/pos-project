@extends('template.layout')

@section('content')
<div class="container py-4">
    <h2 class="fw-bold mb-4 text-primary text-center">📦 Daftar Kategori Produk</h2>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($categories as $category)
            <div class="col">
                <div class="card h-100 shadow-sm border-0 rounded-4 card-hover">
                    <div class="card-body text-center">
                        <div class="fs-1 mb-2">🍽️</div>
                        <h5 class="card-title fw-bold">{{ $category->name }}</h5>
                        <p class="text-muted small">{{ $category->description ?? 'Tidak ada deskripsi' }}</p>
                        <p class="mb-3">
                            <span class="badge bg-success">{{ $category->product_count }} produk</span>
                        </p>
                        <a href="{{ route('category.show', $category->id) }}" class="btn btn-outline-primary rounded-pill px-4">
                            Lihat Produk
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection

@push('style')
<style>
    .card-hover {
        transition: all 0.3s ease;
    }
    .card-hover:hover {
        transform: translateY(-6px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    }
</style>
@endpush
