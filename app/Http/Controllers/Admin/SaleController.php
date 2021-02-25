<?php

namespace App\Http\Controllers\Admin;

use App\Models\Sale;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SaleController extends Controller
{
    public function index(){
        $sales = Sale::with('product')->get();
        return view('admin.sale.index',compact('sales'));
    }

    public function create(){
        $products = Product::latest()->get();
        return view('admin.sale.create',compact('products'));
    }

    public function store(Request $request){
        $request->validate([
            'title'=>'required|min:3',
            'description'=>'nullable',
            'price'=>'required',
            'product_id'=>'required',
            'unit'=>'required',
        ]);

        $sale = Sale::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'price'=>$request->price,
            'unit'=>$request->unit,
            'product_id'=>$request->product_id,
        ]);

        return redirect()->route('sale.index')->with('success','sale created!');
    }
    
    public function show(Sale $sale){
        return view('admin.sale.show',compact('sale'));
    }

    public function edit(Sale $sale){
        $products = Product::latest()->get();
        return view('admin.sale.edit',compact('sale','products'));
    }

    public function update(Request $request,Sale $sale){
        $request->validate([
            'title'=>'required|min:3',
            'description'=>'nullable',
            'price'=>'required',
            'product_id'=>'required',
            'unit'=>'required',
        ]);

        $sale->update([
            'title'=>$request->title,
            'description'=>$request->description,
            'price'=>$request->price,
            'product_id'=>$request->product_id,
            'unit'=>$request->unit
        ]);
        
        return redirect(route('sale.index'))->with('success','sale updated!');
    }
    
    public function destroy(Sale $sale){
        $sale->delete();
        return redirect()->route('sale.index')->with('success','Sale deleted');
    }
}
