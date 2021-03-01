<?php

namespace App\Http\Controllers\Admin;

use App\Models\Sale;
use App\Models\User;
use App\Models\Expense;
use App\Models\Product;
use App\Models\Customer;
use App\Models\Supplier;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index(){
        $productCount = Product::count();
        $adminCount = User::role('admin')->count();
        $customerCount = Customer::count();
        $supplierCount = Supplier::count();
        
        $totalSales = Sale::sum('total_amount');
        $totalIncome = Sale::sum('paid_amount');
        $totalExpense = Expense::sum('price');
        $totalProfit = $totalIncome - $totalExpense;
        

        return view('admin.dashboard',compact('productCount','customerCount','adminCount','supplierCount',
            'totalIncome','totalExpense','totalProfit','totalSales',
        ));
    }
}
