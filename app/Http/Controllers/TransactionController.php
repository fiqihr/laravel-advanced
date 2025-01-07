<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::all();
        return view('transaction.index', compact('transactions'));
    }

    public function create()
    {
        $products = Product::all();
        return view('transaction.create', compact('products'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'amount' => 'required',
            'id_product' => 'required',
            'count' => 'required',
        ]);

        $product = Product::find($data['id_product']);

        if ($product->quantity < $data['count']) {
            return redirect()->back()->withErrors(['count' => 'Not enough quantity']);
        }

        Transaction::create($data);
        return redirect()->route('transaction.index');
    }

    public function edit(string $id)
    {
        $products = Product::all();
        $transaction = Transaction::find($id);
        return view('transaction.edit', compact('transaction', 'products'));
    }

    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'amount' => 'required',
            'id_product' => 'required',
            'count' => 'required | min:1',
        ]);

        $transaction = Transaction::find($id);
        $product = Product::find($data['id_product']);

        // hitung perubahan count
        $difference = $data['count'] - $transaction->count;

        // jika produk berubah
        if ($transaction->id_product != $data['id_product']) {
            // kembalikan stok lama
            $oldProduct = Product::findOrFail($transaction->id_product);
            $oldProduct->quantity += $transaction->count;
            $oldProduct->save();
    
            // kurangi stok produk baru
            if ($product->quantity < $data['count']) {
                return redirect()->back()->withErrors(['count' => 'Not enough quantity for the selected product']);
            }
            $product->quantity -= $data['count'];
            $product->save();
        } else {
            // update quantity produk sama
            if ($difference > 0 && $product->quantity < $difference) {
                return redirect()->back()->withErrors(['count' => 'Not enough quantity']);
            }
            $product->quantity -= $difference;
            $product->save();
        }

        $transaction->update($data);
        return redirect()->route('transaction.index');
    }
}