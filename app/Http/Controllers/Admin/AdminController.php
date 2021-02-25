<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('role:admin');
    }
    
    public function index(){
        $productCount = 10;
        $expenseCount = 10;
        $incomeCount = 10;
        $customerCount = 10;
        $adminCount = 10;
        $saleCount = 500;
        $notiCount = 2;

        return view('admin.dashboard',compact('productCount','expenseCount','incomeCount','customerCount','adminCount',
        'notiCount','saleCount'));
    }
}
