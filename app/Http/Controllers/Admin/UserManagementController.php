<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserManagementController extends Controller
{
    public function index(){
        $users = User::role('admin')->paginate(25);
        return view('admin.usermanagement.index',compact('users'));
    }

    public function create(){
        return view('admin.usermanagement.create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|min:3',
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                'unique:users'
            ],
        ]);    
        
        DB::transaction(function () use ($request) {
            $user = User::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>Hash::make($request->password),
                'phone'=>$request->phone,
                'address'=>$request->address,
            ]);

            $user->assignRole('admin');

        }, 5);

        return redirect(route('usermanagement.index'))->with('success','User/Admin Created');
    }

    public function edit($id){
        $user = User::whereKey($id)->role('admin')->first(); 
        return view('admin.usermanagement.edit',compact('user'));
    }

    public function update(Request $request,$id){
        $user = User::find($id);
        
        $request->validate([
            'name' => 'required|min:3',
            'email' => ['required','string','email','max:255','unique:users,email,'.$id
            ],
        ]);    
        
        DB::transaction(function () use ($request,$user) {
            $user->update([
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>Hash::make($request->password),
                'phone'=>$request->phone,
                'address'=>$request->address,
            ]);
        }, 5);

        return redirect(route('usermanagement.index'))->with('success','User/Admin updated');
    }


    public function destroy($id){
        $user = User::whereKey($id)->role('admin')->first(); 
        $user->delete();
        return redirect()->route('usermanagement.index')->with('success','User/Admin Deleted');
    }
}
