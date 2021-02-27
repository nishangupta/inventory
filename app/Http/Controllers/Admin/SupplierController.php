<?php

namespace App\Http\Controllers\Admin;

use App\Models\Supplier;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SupplierController extends Controller
{
    public function index(){
        $suppliers = Supplier::latest()->get();
        return view('admin.supplier.index',compact('suppliers'));
    }

    public function create(){
        return view('admin.supplier.create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|min:3',
        ]);    
        
        $supplier = Supplier::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'address'=>$request->address,
        ]);

        return redirect(route('supplier.index'))->with('success','Supplier Created');
    }

    public function edit($id){
        $supplier = Supplier::whereKey($id)->first(); 
        return view('admin.supplier.edit',compact('supplier'));
    }

    public function update(Request $request,Supploer $supplier){
        $request->validate([
            'name' => 'required|min:3',
        ]);    
        
        $supplier->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'address'=>$request->address,
        ]);

        return redirect(route('supplier.index'))->with('success','Supplier updated');
    }


    public function destroy(Supplier $supplier){
        $supplier->delete();
        return redirect()->route('supplier.index')->with('success','Supplier Deleted');
    }
}