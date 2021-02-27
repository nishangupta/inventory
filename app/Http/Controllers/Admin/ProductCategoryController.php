<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Http\Controllers\Controller;

class ProductCategoryController extends Controller
{
    public function index(){
        $categories = ProductCategory::all();
        return view('admin.product-category.index',compact('categories'));
    }

    public function create(){
        return view('admin.product-category.create');
    }

    public function store(Request $request){
        $request->validate([
            'title'=>'required|min:3',
        ]);

        $category = ProductCategory::create([
            'title'=>$request->title,
        ]);

        return redirect()->route('product-category.index')->with('success','Category created!');
    }
    
    public function edit(ProductCategory $category){
        return view('admin.product-category.edit',compact('category'));
    }

    public function update(Request $request,ProductCategory $category){
        $request->validate([
            'title'=>'required|min:3',
        ]);

        $category->update([
            'title'=>$request->title,
        ]);
        
        return redirect(route('product-category.index'))->with('success','category updated!');
    }
    
    public function destroy(ProductCategory $category){
        $category->delete();
        return redirect()->route('product-category.index')->with('success','category deleted');

    }
}
