<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Awareness;
use Illuminate\Http\Request;

class NewsGoalsController extends Controller
{
    public function view(){
        $data['all_data'] = Awareness::all();
        return view('dashboard.news.view-news',$data);
    }
    
    public function add(){

        return view('dashboard.news.add-news');
    }
    public function store(Request $request){
        $data = new Awareness();
        $data->new_title_ar = $request->new_title_ar;
        $data->new_title_en = $request->new_title_en;
        $data->new_description_ar = $request->new_description_ar;
        $data->new_description_en = $request->new_description_en;

        $data->save();
        return redirect()->route('news.view')->with('success','تمت الاضافة بنجاح ');
    }
    public function edit($id){

        $edit_data = Awareness::find($id);
        return view('dashboard.news.edit-news',compact('edit_data'));
    }
    public function update(Request $request,$id){
        $data =Awareness::find($id);
        $data->new_title_ar = $request->new_title_ar;
        $data->new_title_en = $request->new_title_en;
        $data->new_description_ar = $request->new_description_ar;
        $data->new_description_en = $request->new_description_en;
        $data->save();
        return redirect()->route('news.view')->with('success','تم التعديل بنجاح ');
    }
    public function delete($id){
        $data = Awareness::find($id);
        $data->delete();
        return redirect()->route('news.view')->with('error','تم الحذف بنجاح ');
    }
}
