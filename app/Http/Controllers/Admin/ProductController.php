<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index(){
        $products = Product::with('productCategory')->get();
        return view('admin.product.index',compact('products'));
    }

    public function create(){
        $categories = ProductCategory::all();
        return view('admin.product.create',compact('categories'));
    }

    public function store(Request $request){
        $request->validate([
            'title'=>'required|min:3',
            'description'=>'nullable',
            'price'=>'required',
            'product_category_id'=>'required',
            'qty'=>'required',
        ]);

        $product = Product::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'price'=>$request->price,
            'product_category_id'=>$request->product_category_id,
            'qty'=>$request->qty
        ]);

        return redirect()->route('product.index')->with('success','Product created!');
    }
    
    public function show(Product $product){
        return view('admin.product.show',compact('product'));
    }

    //searching for product
    public function search(Request $request){
        $products = Product::where($request->type,'LIKE','%'.$request->term.'%')->get();
        return $products;
    }

    public function edit(Product $product){
        $categories = ProductCategory::all();
        return view('admin.product.edit',compact('product','categories'));
    }

    public function update(Request $request,Product $product){
        $request->validate([
            'title'=>'required|min:3',
            'description'=>'nullable',
            'price'=>'required',
            'product_category_id'=>'required',
            'qty'=>'required'
        ]);

        $product->update([
            'title'=>$request->title,
            'description'=>$request->description,
            'price'=>$request->price,
            'product_category_id'=>$request->product_category_id,
            'qty'=>$request->qty
        ]);
        
        return redirect(route('product.index'))->with('success','Product updated!');
    }
    
    public function destroy(Product $product){
        $product->delete();
        return redirect()->route('product.index')->with('success','Product deleted');
    }
}
