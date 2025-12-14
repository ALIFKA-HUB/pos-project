<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class OrderController extends Controller
{
    public function index()
    {
        $data['categories'] = Category::with('product')->get();
        return view('order.index')->with($data);
    }

    // Simpan order ke session
    public function save(Request $request)
    {
        $cart = $request->cart;

        // Buat transaksi baru di session
        $transactions = session('transactions', []);
        $newId = count($transactions) + 1;
        $transactions[] = [
            'id' => $newId,
            'date' => now()->format('Y-m-d H:i:s'),
            'items' => $cart
        ];
        session(['transactions' => $transactions]);

        return response()->json(['message' => 'Transaksi berhasil disimpan', 'id' => $newId]);
    }

    // Lihat semua transaksi
    public function orderList()
    {
        $transactions = session('transactions', []);
        return view('order_detail.index', compact('transactions'));
    }

    // Lihat detail transaksi
    public function detail($id)
    {
        $transactions = session('transactions', []);
        $transaction = collect($transactions)->firstWhere('id', $id);

        return view('order_detail.detail', compact('transaction'));
    }

    // Cetak faktur
    public function faktur($id)
    {
        $transactions = session('transactions', []);
        $transaction = collect($transactions)->firstWhere('id', $id);

        return view('order_detail.faktur', compact('transaction'));
    }

    // Hapus semua transaksi (reset)
    public function clear()
    {
        session()->forget('transactions');
        return redirect()->route('order.index')->with('success', 'Semua transaksi dihapus');
    }
}
