<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function view(){
        $data['all_data'] = Service::all();
        return view('dashboard.services.view-services',$data);
    }
    
    public function add(){

        return view('dashboard.services.add-services');
    }
    public function store(Request $request){
        $data = new Service();
        $data->name_ar = $request->name_ar;
        $data->name_en = $request->name_en;
        $data->description_ar = $request->description_ar;
        $data->description_en = $request->description_en;

        $data->save();
        return redirect()->route('services.view');
    }
    public function edit($id){

        $edit_data = Service::find($id);
        return view('dashboard.services.edit-services',compact('edit_data'));
    }
    public function update(Request $request,$id){
        $data =Service::find($id);
        $data->name_ar = $request->name_ar;
        $data->name_en = $request->name_en;
        $data->description_ar = $request->description_ar;
        $data->description_en = $request->description_en;
        $data->save();
        return redirect()->route('services.view');
    }
    public function delete($id){
        $data = Service::find($id);
        $data->delete();
        return redirect()->route('services.view');
    }
}
