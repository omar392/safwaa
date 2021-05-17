<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class CustomersConrtoller extends Controller
{
    public function view(){
        $data['all_data'] = Customer::all();
        return view('dashboard.customers.view-customers',$data);
    }
    
    public function add(){

        return view('dashboard.customers.add-customers');
    }
    public function store(Request $request){
        $data = new Customer ();
        $data->name_ar = $request->name_ar;
        $data->name_en = $request->name_en;

        $data->created_by = Auth::user()->id;
        if ($request->file('customer_logo')){
            $file = $request->file('customer_logo');
            $filename =date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/customer_logo'),$filename);
            $data['customer_logo']=$filename;
        }

        $data->save();
        return redirect()->route('customers.view')->with('success','Item created successfully!');
    }
    public function edit($id){

        $edit_data = Customer::find($id);
        return view('dashboard.customers.edit-customers',compact('edit_data'));
    }
    public function update(Request $request,$id){
        $data = Customer::find($id);
        $data->name_ar = $request->name_ar;
        $data->name_en = $request->name_en;
        $data->updated_by = Auth::user()->id;
        if ($request->file('customer_logo')){
            $file = $request->file('customer_logo');
            @unlink(public_path('upload/customer_logo/'.$data->image));
            $filename =date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/customer_logo'),$filename);
            $data['customer_logo']=$filename;
        }
        $data->save();
        return redirect()->route('customers.view');
    }
    public function delete($id){
        $data = Customer ::find($id);
        $data->delete();
        return redirect()->route('customers.view');
    }
}
