<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\Models\Member;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class MembersController extends Controller
{
    public function view(){
        $data['all_data'] = Member::all();
        return view('dashboard.members.view-members',$data);
    }
    
    public function add(){

        return view('dashboard.members.add-members');
    }
    public function store(Request $request){
        $data = new Member();
        // $data->created_by = Auth::user()->id;
        if ($request->file('image')){
            $file = $request->file('image');
            $filename =date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/slider_images'),$filename);
            $data['image']=$filename;
        }
        $data->name_ar = $request->name_ar;
        $data->name_en = $request->name_en;
        $data->degree_ar = $request->degree_ar;
        $data->degree_en = $request->degree_en;

        $data->save();
        return redirect()->route('members.view');
    }
    public function edit($id){

        $edit_data = Member::find($id);
        return view('dashboard.members.edit-members',compact('edit_data'));
    }
    public function update(Request $request,$id){
        $data =Member::find($id);
        // $data->updated_by = Auth::user()->id;
        if ($request->file('image')){
            $file = $request->file('image');
            @unlink(public_path('upload/slider_images/'.$data->image));
            $filename =date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/slider_images'),$filename);
            $data['image']=$filename;
        }
        $data->name_ar = $request->name_ar;
        $data->name_en = $request->name_en;
        $data->degree_ar = $request->degree_ar;
        $data->degree_en = $request->degree_en;
        $data->save();
        return redirect()->route('members.view');
    }
    public function delete($id){
        $data = Member::find($id);
        $data->delete();
        return redirect()->route('members.view');
    }
}
