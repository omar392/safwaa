<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Aboutus;
use App\Models\Blog;
use App\Models\Email;
use App\Models\Galery;
use App\Models\Member;
use App\Models\Question;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Social;
use Illuminate\Http\Request;

class FrontsController extends Controller
{
    public function index(){
        $data['emails'] = Email::first();
        $data['sliders'] = Slider::first();
        return view('frontend.layouts.home',$data);
    }
    public function aboutus(){
        $data['emails'] = Email::first();
        $data['aboutus'] = Aboutus::all();
        return view('frontend.singlepages.aboutus',$data);
    }
    public function services(){
        $data['emails'] = Email::first();
        $data['services'] = Service::all();
        return view('frontend.singlepages.services',$data);
    }
    public function blog(){
        $data['emails'] = Email::first();
        $data['blogs'] = Blog::all();
        return view('frontend.singlepages.blog',$data);
    }
    public function contactus(){
        $data['emails'] = Email::first();
        return view('frontend.singlepages.contactus',$data);
    }
    public function gallery(){
        $data['emails'] = Email::first();
        $data['galeries'] = Galery::all();
        return view('frontend.singlepages.gallery',$data);
    }
    public function questions(){
        $data['emails'] = Email::first();
        $data['questions'] = Question::all();
        return view('frontend.singlepages.questions',$data);
    }
    public function team(){
        $data['emails'] = Email::first();
        $data['members'] = Member::all();
        return view('frontend.singlepages.team',$data);
    }

}
