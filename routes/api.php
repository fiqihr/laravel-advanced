<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/orders', function () {
    $keyCache = 'order_summary';

    // ini kode yang agak panjang
    // $orders = Cache::get($keyCache);
    // if ($orders) {
    //     return $orders;
    // };

    // $orders = DB::table('orders')->select([
    //     'product_code',
    //     DB::raw('SUM(qty) as total_qty'),
    //     DB::raw('SUM(price) as total_price'),
    // ])
    //     ->groupBy('product_code')
    //     ->get();

    // Cache::put($keyCache, $orders, 60);

    // ini kode yang disingkat
    $orders = Cache::remember($keyCache, 60, function () {
        return DB::table('orders')->select([
            'product_code',
            DB::raw('SUM(qty) as total_qty'),
            DB::raw('SUM(price) as total_price'),
        ])
            ->groupBy('product_code')
            ->get();
    });
    return $orders;
});