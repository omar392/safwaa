<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Galery;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class GaleryController extends Controller
{
    public function view(){
        $data['all_data'] = Galery::all();
        $all_data = Galery::all();
        return view('dashboard.galeries.view-galeries',$data);
    }
    public function add(){
        return view('dashboard.galeries.add-galeries');
    }
    public function store(Request $request){
        $data = new Galery();
         // $data->created_by = Auth::user()->id;
         if ($request->file('image')){
            $file = $request->file('image');
            $filename =date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/slider_images'),$filename);
            $data['image']=$filename;
        }
        $data->save();
        return redirect()->route('galeries.view');
    }
    public function edit($id){

        $edit_data = Galery::find($id);
        return view('dashboard.galeries.edit-galeries',compact('edit_data'));
    }
    public function update(Request $request,$id){
        $data =Galery::find($id);
           // $data->updated_by = Auth::user()->id;
           if ($request->file('image')){
            $file = $request->file('image');
            @unlink(public_path('upload/slider_images/'.$data->image));
            $filename =date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/slider_images'),$filename);
            $data['image']=$filename;
        }
        $data->save();
        return redirect()->route('galeries.view');
    }
    public function delete($id){
        $data = Galery::find($id);
        $data->delete();
        return redirect()->route('galeries.view');
    }
}
