<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Tell;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class TellsController extends Controller
{
    public function view(){
        $data['all_data'] = Tell::all();
        return view('dashboard.tells.view-tells',$data);
    }
    
    public function add(){

        return view('dashboard.tells.add-tells');
    }
    public function store(Request $request){
        $data = new Tell ();
        //   $data->created_by = Auth::user()->id;
        if ($request->file('image')){
            $file = $request->file('image');
            $filename =date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/customer_logo'),$filename);
            $data['image']=$filename;
        }

        $data->name_ar = $request->name_ar;
        $data->name_en = $request->name_en;
        $data->work_ar = $request->work_ar;
        $data->work_en = $request->work_en;
        $data->description_ar = $request->description_ar;
        $data->description_en = $request->description_en;

      

        $data->save();
        return redirect()->route('tells.view')->with('success','تمت الاضافة بنجاح ');
    }
    public function edit($id){

        $edit_data = Tell::find($id);
        return view('dashboard.tells.edit-tells',compact('edit_data'));
    }
    public function update(Request $request,$id){
        $data = Tell::find($id);
        // $data->updated_by = Auth::user()->id;
        if ($request->file('image')){
            $file = $request->file('image');
            @unlink(public_path('upload/customer_logo/'.$data->image));
            $filename =date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/customer_logo'),$filename);
            $data['image']=$filename;
        }
        $data->name_ar = $request->name_ar;
        $data->name_en = $request->name_en;
        $data->work_ar = $request->work_ar;
        $data->work_en = $request->work_en;
        $data->description_ar = $request->description_ar;
        $data->description_en = $request->description_en;
        $data->save();
        return redirect()->route('tells.view')->with('success','تم التعديل بنجاح ');
    }
    public function delete($id){
        $data = Tell ::find($id);
        $data->delete();
        return redirect()->route('tells.view')->with('error','تم الحذف بنجاح ');
    }
}
