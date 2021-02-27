<?php

namespace App\Http\Controllers\Admin;

use App\Models\Sale;
use App\Models\Product;
use App\Models\Customer;
use App\Models\SaleProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class SaleController extends Controller
{
    public function index(){
        $sales = Sale::with('customer')->get();
        return view('admin.sale.index',compact('sales'));
    }

    public function create(){
        $customers= Customer::all();
        return view('admin.sale.create',compact('customers'));
    }

    public function store(Request $request){
        // dd($request->all());
        
        $request->validate([
            'customer_id'=>'required',
            'details'=>'nullable',
            'paid_amount'=>'required',
            'discount_amount'=>'max:191',
        ]);

        if($request->paid_amount>0){
            $status = 1;
        }else{
            $status = 0;
        }

        $data = [
            'customer_id'=>$request->customer_id,
            'details'=>$request->details,
            'sub_total'=>$request->sub_total,
            'tax_amount'=>$request->tax_amount,
            'discount_amount'=>$request->discount_amount,
            'total_amount'=>$request->total_amount,
            'paid_amount'=>$request->paid_amount,
            'due_amount'=>$request->due_amount,
            'status'=>$status,
        ];

        $sale = Sale::firstOrCreate($data);

        if (!empty($request->title)) {
            foreach ($request->title as $key => $item) {
                if ($item != "" && 
                    $request->title[$key] != "" &&
                    $request->qty[$key] != "" &&
                    $request->price[$key] != "" &&
                    $request->total[$key] != ""
                ) {
                    $saleproduct = SaleProduct::create([
                        'sale_id' => $sale->id,
                        'title'=> $request->title[$key],
                        'qty' => $request->qty[$key],
                        'price' => $request->price[$key],
                        'total' => $request->total[$key],
                    ]);

                    DB::table('products')->where('title', $request->title[$key])->decrement('qty', $request->qty[$key]);
                }
            }
        }

        return redirect()->route('sale.show',$sale->id)->with('success','Sale created!');
    }
    
    public function show($sale){
        $sale = Sale::whereKey($sale)->with('customer','saleProducts')->first();
        return view('admin.sale.show',compact('sale'));
    }

    public function printInvoice($id){
        $sale = Sale::whereKey($id)->with('customer','saleProducts')->first();
        return view('admin.sale.invoice',compact('sale'));
    }

    public function edit($sale){
        $sale = Sale::whereKey($sale)->with('customer','saleProducts')->first();         
        $customers = Customer::all();
        return view('admin.sale.edit',compact('sale','customers'));
    }

    public function update(Request $request,$sale){
        $request->validate([
            'qty.*'=>'required|gt:0',
            'details'=>'nullable',
            'customer_id'=>'required',
            'paid_amount'=>'required',
            'discount_amount'=>'max:191',
        ]);
        
        if($request->paid_amount>0){
            $status = 1;
        }else{
            $status = 0;
        }

        $data = [
            'customer_id'=>$request->customer_id,
            'details'=>$request->details,
            'sub_total'=>$request->sub_total,
            'tax_amount'=>$request->tax_amount,
            'discount_amount'=>$request->discount_amount,
            'total_amount'=>$request->total_amount,
            'paid_amount'=>$request->paid_amount,
            'due_amount'=>$request->due_amount,
            'status'=>$status,
        ];

        $sale = Sale::whereKey($sale)->with('saleProducts')->first();   

        foreach($sale->saleProducts as $p){
            DB::table('products')->where('title', $p->title)->increment('qty', $p->qty);

            $p->delete(); //deleting old relationship
        }

        $sale->update($data);

        if (!empty($request->title)) {
            foreach ($request->title as $key => $item) {
                if ($item != "" && 
                    $request->title[$key] != "" &&
                    $request->qty[$key] != "" &&
                    $request->price[$key] != "" &&
                    $request->total[$key] != ""
                ) {
                    $saleproduct = SaleProduct::create([
                        'sale_id' => $sale->id,
                        'title'=> $request->title[$key],
                        'qty' => $request->qty[$key],
                        'price' => $request->price[$key],
                        'total' => $request->total[$key],
                    ]);

                    DB::table('products')->where('title', $request->title[$key])->decrement('qty', $request->qty[$key]);
                }
            }
        }
        
        return redirect(route('sale.show',$sale->id))->with('success','Sale updated!');
    }
    
    public function destroy(Sale $sale){
        $sale->delete();
        return redirect()->route('sale.index')->with('success','Sale deleted');
    }

    public function test(Request $request)
    {
        $request->validate([
            'customer_id' =>'required',
            'sale_date' =>'required',
            'payment_type' =>'required',
            'details' =>'required',
            'addmore.*.sale_id' => '',
            'addmore.*.medicine_name' => 'required',
            'addmore.*.expire_date' => 'required',
            'addmore.*.qty' => 'required',
            'addmore.*.selling_price' => 'required',
            'addmore.*.total' => 'required',
            'sub_total' =>'required',
            'tax'=>'',
            'tax_amount'=>'',
            'discount' =>'max:191',
            'total_amount' =>'',
            'paid_amount' =>'',
            'due_amount' =>'',
            'status' =>'',

        ]);
         $data = [
            'customer_id'=>$request->customer_id,
            'sale_date'=>$request->sale_date,
            'payment_type'=>$request->payment_type,
            'sub_total'=>$request->sub_total,
            'tax'=>$request->tax,
            'discount'=>$request->discount,
            'total_amount'=>$request->total_amount,
            'paid_amount'=>$request->paid_amount,
            'due_amount'=>$request->due_amount,
            'details'=>$request->details,
            'status'=>$request->status,

        ];
        $sale = Sale::firstOrCreate($data);
        if (!empty($request->medicine_name)) {
            foreach ($request->medicine_name as $key => $item) {
                if ($item != "" && $request->medicine_name[$key] != "" &&
                    $request->expire_date[$key] != "" && $request->qty[$key] != "" &&
                    $request->selling_price[$key] != "" &&
                    $request->total[$key] != ""
                ) {
                    $saleproduct = new SaleProduct();
                    $saleproduct->medicine_name = $request->medicine_name[$key];
                    $saleproduct->expire_date = date("H:i:s", strtotime($request->expire_date[$key]));
                    $saleproduct->sale_id = $sale->id;
                    $saleproduct->qty = $request->qty[$key];
                    $saleproduct->selling_price = $request->selling_price[$key];
                    $saleproduct->total = $request->total[$key];
                    $saleproduct->save();
                        DB::table('medicines')->where('medicine_name', $request->medicine_name[$key])->decrement('qty', $request->qty[$key]);
                    // DB::table('products')->decrement('quantity', $saleorderProduct->quantity);
                        
                }
            }
        }
        $incomecategory = IncomeCategory::where('category_name','Test')->first();
        if ($sale->paid_amount) {
        DB::insert('insert into incomes (incomecategory_id, income_date,particular,amount,head_name,remark)
            values (?, ?,?,?,?,?)',
            [$incomecategory->id,Carbon::now() ,'Test',$sale->paid_amount,Auth::user()->name,$sale->details]);
            }    
       
        return  redirect()->route('sale.index')->with('toast_success', ' Sale   Created Successfully!');
    }
    
}
