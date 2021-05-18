<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Email;
use Illuminate\Http\Request;

class SocialmediaController extends Controller
{
    public function view(){
        // $data['count_about'] = Email::count();
        $data['all_data'] = Email::all();
        return view('dashboard.social.view-social',$data);
    }

    public function add(){

        return view('dashboard.social.add-social');
    }
    public function store(Request $request){
        $data = new Email();
        $data->facebook = $request->facebook;
        $data->whats_app_num = $request->whats_app_num;
        $data->gmail = $request->gmail;
        $data->twitter = $request->twitter;
        $data->inestgram = $request->inestgram;
        $data->youtube = $request->youtube;

        $data->save();
        return redirect()->route('social.view')->with('success','تمت الاضافة بنجاح ');
    }
    public function edit($id){

        $edit_data = Email::find($id);
        return view('dashboard.social.edit-social',compact('edit_data'));
    }
    public function update(Request $request,$id){
        $data =Email::find($id);
        $data->facebook = $request->facebook;
        $data->whats_app_num = $request->whats_app_num;
        $data->gmail = $request->gmail;
        $data->twitter = $request->twitter;
        $data->inestgram = $request->inestgram;
        $data->youtube = $request->youtube;
        $data->save();
        return redirect()->route('social.view')->with('success','تم التعديل بنجاح ');
    }

    public function delete($id){
        $data = Email::find($id);
        $data->delete();
        return redirect()->route('social.view')->with('error','تم الحذف بنجاح ');
    }
}
