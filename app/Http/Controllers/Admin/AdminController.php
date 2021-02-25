<?php

namespace App\Http\Controllers\Admin;

use App\Models\Sale;
use App\Models\User;
use App\Models\Expense;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index(){
        $productCount = Product::count();
        $customerCount = User::role('user')->count();
        $adminCount = User::role('admin')->count();
        
        $totalIncome = Sale::sum('price');
        $totalExpense = Expense::sum('price');
        $totalProfit = $totalIncome - $totalExpense;
        

        return view('admin.dashboard',compact('productCount','customerCount','adminCount',
            'totalIncome','totalExpense','totalProfit'));
    }
}
