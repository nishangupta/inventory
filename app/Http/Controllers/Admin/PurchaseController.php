<?php

namespace App\Http\Controllers\Admin;

use App\Models\Purchase;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PurchaseController extends Controller
{
    public function index(){
        $purchases = Purchase::all();
        return view('admin.purchase.index',compact('purchases'));
    }

    public function create(){
        return view('admin.purchase.create');
    }

    public function store(Request $request){
        $request->validate([
            'title'=>'required|min:3',
            'description'=>'nullable',
            'price'=>'required',
        ]);

        $purchase = Purchase::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'price'=>$request->price,
            'customer_id'=>1,
        ]);

        return redirect()->route('purchase.index')->with('success','Purchase created!');
    }
    
    public function show(Purchase $purchase){
        return view('admin.purchase.show',compact('purchase'));
    }

    public function edit(Purchase $purchase){
        return view('admin.purchase.edit',compact('purchase'));
    }

    public function update(Request $request,Purchase $purchase){
        $request->validate([
            'title'=>'required|min:3',
            'description'=>'nullable',
            'price'=>'required',
            'customer_id'=>1,
        ]);

        $product->update([
            'title'=>$request->title,
            'description'=>$request->description,
            'price'=>$request->price,
            'customer_id'=>1,
        ]);
        
        return redirect(route('purchase.index'))->with('success','Purchase updated!');
    }
    
    public function destroy(Purchase $purchase){
        $purchase->delete();
        return redirect()->route('purchase.index')->with('success','Purchase deleted');

    }
}
