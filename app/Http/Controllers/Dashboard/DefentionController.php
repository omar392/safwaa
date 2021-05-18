<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Goal;
use Illuminate\Http\Request;

class DefentionController extends Controller
{
    public function view(){
        $data['all_data'] = Goal::all();
        return view('dashboard.goals.view-goals',$data);
    }
    
    public function add(){

        return view('dashboard.goals.add-goals');
    }
    public function store(Request $request){
        $data = new Goal();
        $data->goal_ar = $request->goal_ar;
        $data->goal_en = $request->goal_en;
        $data->message_ar = $request->message_ar;
        $data->message_en = $request->message_en;

        $data->save();
        return redirect()->route('goals.view')->with('success','تمت الاضافة بنجاح ');
    }
    public function edit($id){

        $edit_data = Goal::find($id);
        return view('dashboard.goals.edit-goals',compact('edit_data'));
    }
    public function update(Request $request,$id){
        $data =Goal::find($id);
        $data->goal_ar = $request->goal_ar;
        $data->goal_en = $request->goal_en;
        $data->message_ar = $request->message_ar;
        $data->message_en = $request->message_en;
        $data->save();
        return redirect()->route('goals.view')->with('success','تم التعديل بنجاح ');
    }
    public function delete($id){
        $data = Goal::find($id);
        $data->delete();
        return redirect()->route('goals.view')->with('error','تم الحذف بنجاح ');
    }
}
