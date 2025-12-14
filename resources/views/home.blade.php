@extends('template.layout')

@section('content')
    {{-- 🔥 HERO SECTION --}}
    <section class="text-center py-5 bg-gradient"
        style="background: linear-gradient(135deg, #ff8c00, #ff2e63); color: rgb(69, 69, 69);">
        <div class="container py-4">
            <h1 class="fw-bold display-4 mb-3">🍔 Selamat Datang di <span class="text-warning">POS Restoku</span></h1>
            <p class="lead mb-4">Pesan makanan favoritmu dengan cepat dan mudah, cukup dengan beberapa klik!</p><br>
            <a href="{{ route('order.index') }}" class="btn btn-light btn-lg shadow-sm rounded-pill px-5 fw-semibold">Mulai
                Order</a>
        </div>
    </section>
    {{-- 🍜 KATEGORI POPULER --}}
    <section class="py-5">
        <div class="container">
            <h2 class="text-center fw-bold mb-5 text-success">🍱 Kategori Terpopuler</h2>
            <div class="row row-cols-2 row-cols-md-4 g-4">
                @php
                    $categories = [
                        ['name' => 'Makanan Berat', 'icon' => '🍛'],
                        ['name' => 'Minuman', 'icon' => '🥤'],
                        ['name' => 'Snack', 'icon' => '🍟'],
                        ['name' => 'Dessert', 'icon' => '🍰'],
                        ['name' => 'Kopi', 'icon' => '☕'],
                        ['name' => 'Non-Kopi', 'icon' => '🧃'],
                        ['name' => 'Spesial Hari Ini', 'icon' => '🔥'],
                        ['name' => 'Paket Hemat', 'icon' => '💸'],
                    ];
                @endphp
                @foreach ($categories as $cat)
                    <div class="col">
                        <div class="card text-center shadow-sm border-0 rounded-4 p-4 card-hover h-100">
                            <div class="fs-1 mb-3">{{ $cat['icon'] }}</div>
                            <h5 class="fw-bold text-dark">{{ $cat['name'] }}</h5>
                            <p class="text-muted small">Lihat berbagai menu menarik di kategori ini.</p>
                            <a href="{{ route('order.index') }}"
                                class="btn btn-outline-success btn-sm rounded-pill px-3">Lihat Menu</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ⭐ TESTIMONI --}}
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center fw-bold mb-5 text-primary">💬 Apa Kata Pelanggan Kami</h2>
            <div class="row g-4">
                @foreach ([['img' => 'profile.jpg', 'name' => 'Rina Putri', 'text' => 'Makanannya enak banget dan pelayanan cepat!'], ['img' => 'profile.jpg', 'name' => 'Dedi Saputra', 'text' => 'Tempat favorit saya setiap makan siang.'], ['img' => 'profile.jpg', 'name' => 'Nina Kartika', 'text' => 'Harga bersahabat, rasa luar biasa!']] as $review)
                    <div class="col-md-4">
                        <div class="card border-0 shadow rounded-4 h-100 text-center p-4">
                            <img src="{{ asset('assets/img/' . $review['img']) }}" class="rounded-circle mx-auto mb-3"
                                width="90" height="90" style="object-fit: cover;">
                            <h6 class="fw-bold">{{ $review['name'] }}</h6>
                            <p class="text-muted small fst-italic">"{{ $review['text'] }}"</p>
                            <div class="text-warning fs-5">★★★★★</div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- 🧭 CTA SECTION --}}
    <section class="text-center py-5" style="background-color: #ff8c00; color: white; border-radius: 20px;">
        <div class="container">
            <h2 class="fw-bold mb-3" style="font-weight: bold">Siap untuk Makan Enak Hari Ini?</h2>
            <p class="mb-4">Pesan sekarang dan nikmati hidangan favoritmu tanpa antre!</p>
            <a href="{{ route('order.index') }}" class="btn btn-light btn-lg rounded-pill px-5 fw-semibold">Pesan
                Sekarang</a>
        </div>
    </section>
@endsection

@push('style')
    <style>
        .card-hover {
            transition: all 0.3s ease;
        }

        .card-hover:hover {
            transform: translateY(-6px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }

        .bg-gradient {
            background: linear-gradient(135deg, #ff8c00, #ff2e63);
        }
    </style>
@endpush

@push('script')
@endpush
