@extends('template.layout')

@section('content')
    <div class="container mt-4">
        <h3>Detail Transaksi #{{ $transaction['id'] }}</h3>
        <hr>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Produk</th>
                    <th>Qty</th>
                    <th>Harga</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                @php $grand = 0; @endphp
                @foreach ($transaction['items'] as $item)
                    @php
                        $total = $item['qty'] * $item['price'];
                        $grand += $total;
                    @endphp
                    <tr>
                        <td>{{ $item['name'] }}</td>
                        <td>{{ $item['qty'] }}</td>
                        <td>{{ number_format($item['price']) }}</td>
                        <td>{{ number_format($total) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <h4>Total Bayar: Rp {{ number_format($grand) }}</h4>
        <a href="{{ route('order_detail.index') }}" class="btn btn-secondary">Kembali</a>
    @endsection
