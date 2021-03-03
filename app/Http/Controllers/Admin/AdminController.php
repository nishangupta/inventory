<?php

namespace App\Http\Controllers\Admin;

use App\Models\Sale;
use App\Models\User;
use App\Models\Income;
use App\Models\Expense;
use App\Models\Product;
use App\Models\Customer;
use App\Models\Supplier;
use App\Models\StockAlert;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index(Request $request){
        $productCount = Product::count();
        $adminCount = User::role('admin')->count();
        $customerCount = Customer::count();
        $supplierCount = Supplier::count();

        $day = date('d');
        $month = date('m');
        $year = date('Y');

        if($request->q=='yearly'){
            $totalSales = Sale::whereYear('updated_at',$year)->sum('total_amount');
            $totalExpense = Expense::whereYear('updated_at',$year)->sum('price');
            $revenue = Sale::whereYear('updated_at',$year)->sum('paid_amount');
            $income = Income::whereYear('updated_at',$year)->sum('price');   

        }else if($request->q == 'monthly'){   
            $totalSales = Sale::whereMonth('updated_at',$month)->whereYear('updated_at',$year)->sum('total_amount');
            $totalExpense = Expense::whereMonth('updated_at',$month)->whereYear('updated_at',$year)->sum('price');
            $revenue = Sale::whereMonth('updated_at',$month)->whereYear('updated_at',$year)->sum('paid_amount');
            $income = Income::whereMonth('updated_at',$month)->whereYear('updated_at',$year)->sum('price');

        }else{
            $totalSales = Sale::whereDay('updated_at',$day)->whereYear('updated_at',$year)->sum('total_amount');
            $totalExpense = Expense::whereDay('updated_at',$day)->whereYear('updated_at',$year)->sum('price');
            $revenue = Sale::whereDay('updated_at',$day)->whereYear('updated_at',$year)->sum('paid_amount');
            $income = Income::whereDay('updated_at',$day)->whereYear('updated_at',$year)->sum('price');
        }
        
        $totalIncome = $revenue + $income;
        $totalProfit = $totalIncome - $totalExpense;

        $lowStocks = StockAlert::with('product')->get();
        
        return view('admin.dashboard',compact('productCount','customerCount','adminCount','supplierCount',
            'totalIncome','totalExpense','totalProfit','totalSales','lowStocks',
        ));
    }

    // public function filter(Request $request){
    //     if($request->q == 'monthly'){
            
    //     }
    // }
}
