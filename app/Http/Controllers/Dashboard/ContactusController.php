<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactusController extends Controller
{
    public function view(){

        $data['all_data'] = Contact::all();
        return view('dashboard.contactus.view-contactus',$data);
    }
    public function delete($id){

        $data = Contact::find($id);
        $data->delete();
        return redirect()->route('contactus.view')->with('success','تم الحذف بنجاح ');
    }
}
