<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('admin.product.index',compact('products'));
    }

    public function create(){
        return view('admin.product.create');
    }

    public function store(Request $request){
        $request->validate([
            'title'=>'required|min:3',
            'description'=>'nullable',
            'price'=>'required',
            'discount'=>'nullable'
        ]);

        $product = Product::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'price'=>$request->price,
            'discount'=>$request->discount
        ]);

        return redirect()->route('product.index')->with('success','Product created!');
    }
    
    public function show(Product $product){
        return view('admin.product.show',compact('product'));
    }

    public function edit(Product $product){
        return view('admin.product.edit',compact('product'));
    }

    public function update(Request $request,Product $product){
        $request->validate([
            'title'=>'required|min:3',
            'description'=>'nullable',
            'price'=>'required',
            'discount'=>'nullable'
        ]);

        $product->update([
            'title'=>$request->title,
            'description'=>$request->description,
            'price'=>$request->price,
            'discount'=>$request->discount
        ]);
        
        return redirect(route('product.index'))->with('success','Product updated!');
    }
    
    public function destroy(Product $product){
        $product->delete();
        return redirect()->route('product.index')->with('success','Product deleted');

    }
}
