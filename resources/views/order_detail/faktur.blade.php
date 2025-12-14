<!DOCTYPE html>
<html>

<head>
    <title>Faktur #{{ $transaction['id'] }}</title>
</head>

<body>
    <h2>Faktur Transaksi</h2>
    <p>Tanggal: {{ $transaction['date'] }}</p>
    <hr>

    <table border="1" width="100%" cellspacing="0" cellpadding="5">
        <tr>
            <th>Produk</th>
            <th>Qty</th>
            <th>Harga</th>
            <th>Total</th>
        </tr> 
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
    </table>

    <h3>Total: Rp {{ number_format($grand) }}</h3>
</body>

</html>
