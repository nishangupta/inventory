<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{
    public function index(){
        $users = User::role('user')->latest()->get();
        return view('admin.customer.index',compact('users'));
    }

    // public function create(){
    //     return view('admin.customer.create');
    // }

    // public function store(Request $request){
    //     $request->validate([
    //         'name' => 'required|min:3',
    //         'email' => [
    //             'required',
    //             'string',
    //             'email',
    //             'max:255',
    //             'unique:users'
    //         ],
    //     ]);    
        
    //     DB::transaction(function () use ($request) {
    //         $user = User::create([
    //             'name'=>$request->name,
    //             'email'=>$request->email,
    //             'password'=>Hash::make($request->password),
    //             'phone'=>$request->phone,
    //             'address'=>$request->address,
    //         ]);

    //         $user->assignRole('user');

    //     }, 5);

    //     return redirect(route('customer.index'))->with('success','Customer Created');
    // }

    // public function edit($id){
    //     $user = User::whereKey($id)->first(); 
    //     return view('admin.customer.edit',compact('user'));
    // }

    // public function update(Request $request,$id){
    //     $user = User::find($id);
        
    //     $request->validate([
    //         'name' => 'required|min:3',
    //         'email' => ['required','string','email','max:255','unique:users,email,'.$id
    //         ],
    //     ]);    
        
    //     DB::transaction(function () use ($request,$user) {
    //         $user->update([
    //             'name'=>$request->name,
    //             'email'=>$request->email,
    //             'password'=>Hash::make($request->password),
    //             'phone'=>$request->phone,
    //             'address'=>$request->address,
    //         ]);
    //     }, 5);

    //     return redirect(route('customer.index'))->with('success','Customer updated');
    // }


    public function destroy($id){
        $user = User::whereKey($id)->first(); 
        $user->delete();
        return redirect()->route('customer.index')->with('success','Customer Deleted');
    }
}
