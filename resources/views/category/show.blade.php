@extends('template.layout')

@section('content')
    <div class="container py-4">
        <h2 class="fw-bold text-primary mb-4">
            {{ $category->name }}
            <span class="text-muted fs-6">({{ $category->product->count() }} produk)</span>
        </h2>

        <div class="row row-cols-1 row-cols-md-3 g-4">
            @forelse ($category->product as $product)
                <div class="col">
                    <div class="card h-100 shadow-sm border-0 rounded-4">
                        <img src="{{ asset('assets/img/food-placeholder.jpg') }}" class="card-img-top"
                            style="height:200px; object-fit:cover;">
                        <div class="card-body text-center">
                            <h5 class="fw-bold">{{ $product->name }}</h5>
                            <p class="text-muted small">{{ $product->description }}</p>
                            <h6 class="text-success fw-bold mb-3">Rp {{ number_format($product->price, 0, ',', '.') }}</h6>
                            <button class="btn btn-primary btn-sm px-4">Add</button>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-muted text-center">Tidak ada produk di kategori ini.</p>
            @endforelse
        </div>
    </div>
@endsection
