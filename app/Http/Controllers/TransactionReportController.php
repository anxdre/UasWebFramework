<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransactionReportController extends Controller
{
    //
    public function index()
    {
        // Mengambil 3 produk terlaris berdasarkan jumlah penjualan
        $topProducts = DB::table('products')
            ->join('transaction_details', 'products.id', '=', 'transaction_details.product_id')
            ->select('products.id', 'products.name', DB::raw('SUM(transaction_details.quantity) as total_sales'))
            ->groupBy('products.id', 'products.name')
            ->orderByDesc('total_sales')
            ->limit(3)
            ->get();

        return view('admin.reports.transactionreport', compact('topProducts'));
    }

}
