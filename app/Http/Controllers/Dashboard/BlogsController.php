<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function view(){
        $data['all_data'] = Blog::all();
        return view('dashboard.blogs.view-blogs',$data);
    }
    
    public function add(){

        return view('dashboard.blogs.add-blogs');
    }

    public function store(Request $request){
        $data = new Blog();
        // $data->created_by = Auth::user()->id;
        if ($request->file('image')){
            $file = $request->file('image');
            $filename =date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/slider_images'),$filename);
            $data['image']=$filename;
        }
        $data->title_ar = $request->title_ar;
        $data->title_en = $request->title_en;
        $data->subject_ar = $request->subject_ar;
        $data->subject_en = $request->subject_en;

        $data->save();
        return redirect()->route('blogs.view');
    }
    public function edit($id){

        $edit_data = Blog::find($id);
        return view('dashboard.blogs.edit-blogs',compact('edit_data'));
    }
    public function update(Request $request,$id){
        $data =Blog::find($id);
        //  $data->updated_by = Auth::user()->id;
         if ($request->file('image')){
            $file = $request->file('image');
            @unlink(public_path('upload/slider_images/'.$data->image));
            $filename =date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/slider_images'),$filename);
            $data['image']=$filename;
        }
        $data->title_ar = $request->title_ar;
        $data->title_en = $request->title_en;
        $data->subject_ar = $request->subject_ar;
        $data->subject_en = $request->subject_en;
        $data->save();
        return redirect()->route('blogs.view');
    }
    public function delete($id){
        $data = Blog::find($id);
        $data->delete();
        return redirect()->route('blogs.view');
    }
}
