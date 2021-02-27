<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductSearchController extends Controller
{
    public function index(Request $request){
        $products = Product::where('title','LIKE','%'.$requet->q.'%')->get();
        return $products;
    }
}
