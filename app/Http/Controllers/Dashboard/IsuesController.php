<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Isue;
use Illuminate\Http\Request;

class IsuesController extends Controller
{
    public function view(){
        $data['all_data'] = Isue::all();
        return view('dashboard.isues.view-isues',$data);
    }
    
    public function add(){

        return view('dashboard.isues.add-isues');
    }
    public function store(Request $request){
        $data = new Isue();
        $data->solved = $request->solved;
        $data->waited = $request->waited;
        $data->studied = $request->studied;
        $data->losed = $request->losed;

        $data->save();
        return redirect()->route('isues.view');
    }
    public function edit($id){

        $edit_data = Isue::find($id);
        return view('dashboard.isues.edit-isues',compact('edit_data'));
    }
    public function update(Request $request,$id){
        $data =Isue::find($id);
        $data->solved = $request->solved;
        $data->waited = $request->waited;
        $data->studied = $request->studied;
        $data->losed = $request->losed;
        $data->save();
        return redirect()->route('isues.view');
    }
    public function delete($id){
        $data = Isue::find($id);
        $data->delete();
        return redirect()->route('isues.view');
    }
}
