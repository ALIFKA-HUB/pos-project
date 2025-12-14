@extends('template.layout')

@section('content')
    <div class="container mt-4">
        <h3>Daftar Transaksi</h3>
        <hr>
        @if (empty($transactions))
            <p class="text-muted">Belum ada transaksi tersimpan.</p>
        @else
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID Transaksi</th>
                        <th>Tanggal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transactions as $trx)
                        <tr>
                            <td>{{ $trx['id'] }}</td>
                            <td>{{ $trx['date'] }}</td>
                            <td>
                                <a href="{{ route('order.detail', $trx['id']) }}"
                                    class="btn btn-info btn-sm">Detail</a>
                                <a href="{{ route('order_detail.faktur', $trx['id']) }}"
                                    class="btn btn-success btn-sm">Faktur</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
