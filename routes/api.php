<?php

use App\Models\Sale;
use App\Models\Income;
use App\Models\Expense;
use App\Models\Purchase;
use App\Models\StockAlert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/sales',function(){
    $day = date('d');
    $month = date('m');
    $year = date('Y');

    $totalSales = Sale::whereDay('created_at',$day)->whereYear('created_at',$year)->sum('total_amount');
    $totalExpense = Expense::whereDay('created_at',$day)->whereYear('created_at',$year)->sum('price');
    $revenue = Sale::whereDay('created_at',$day)->whereYear('created_at',$year)->sum('paid_amount');
    $income = Income::whereDay('created_at',$day)->whereYear('created_at',$year)->sum('price');
    $purchase = Purchase::whereDay('created_at',$day)->whereYear('created_at',$year)->sum('cost_price');
    
    $totalIncome = $revenue + $income;
    $totalProfit = $totalIncome - $totalExpense - $purchase;

    $lowStocks = StockAlert::with('product')->get();

    return $lowStocks; 
});