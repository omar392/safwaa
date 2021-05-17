<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Aboutus;
use Illuminate\Http\Request;

class AgentsController extends Controller
{
    public function view(){
        $data['all_data'] = Aboutus::all();
        return view('dashboard.aboutus.view-aboutus',$data);
    }
    
    public function add(){

        return view('dashboard.aboutus.add-aboutus');
    }
    public function store(Request $request){
        $data = new Aboutus();
        $data->name_ar = $request->name_ar;
        $data->name_en = $request->name_en;
        $data->title_ar = $request->title_ar;
        $data->title_en = $request->title_en;

        $data->save();
        return redirect()->route('aboutus.view');
    }
    public function edit($id){

        $edit_data = Aboutus::find($id);
        return view('dashboard.aboutus.edit-aboutus',compact('edit_data'));
    }
    public function update(Request $request,$id){
        $data =Aboutus::find($id);
        $data->name_ar = $request->name_ar;
        $data->name_en = $request->name_en;
        $data->title_ar = $request->title_ar;
        $data->title_en = $request->title_en;
        $data->save();
        return redirect()->route('aboutus.view');
    }
    public function delete($id){
        $data = Aboutus::find($id);
        $data->delete();
        return redirect()->route('aboutus.view');
    }
}
