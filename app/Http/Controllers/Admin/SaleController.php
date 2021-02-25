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
            'price'=>$request->price * $request->unit,
            'unit'=>$request->unit,
            'product_id'=>$request->product_id,
            'customer_name'=>$request->customer_name,
            'customer_email'=>$request->customer_email,
        ]);

        return redirect()->route('sale.show',$sale->id)->with('success','sale created!');
    }
    
    public function show(Sale $sale){
        return view('admin.sale.show',compact('sale'));
    }

    public function printInvoice($id){
        $sale = Sale::whereKey($id)->with('product')->first();
        return view('admin.sale.invoice',compact('sale'));
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
            'unit'=>'required|integer',
        ]);

        $sale->update([
            'title'=>$request->title,
            'description'=>$request->description,
            'price'=>$request->price * $request->unit,
            'product_id'=>$request->product_id,
            'unit'=>$request->unit,
            'customer_email'=>$request->customer_email,
            'customer_name'=>$request->customer_name,
        ]);
        
        return redirect(route('sale.show',$sale->id))->with('success','sale updated!');
    }
    
    public function destroy(Sale $sale){
        $sale->delete();
        return redirect()->route('sale.index')->with('success','Sale deleted');
    }
}
