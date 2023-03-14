<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\Signup;

class FrontController extends Controller
{
    public function index () {
        return view('frontend.index');
    }

    public function about () {
        $team = Team::all();
        return view('frontend.about',compact('team'));
    }

    public function service () {
        return view('frontend.service');
    }

    public function contact () {
        return view('frontend.contact');
    }

    public function signup () {
        return view('frontend.signup');
    }

    public function store(Request $request) {
        
        $signup = new Signup;

        $signup->fname=$request->get('fname');
        $signup->lname=$request->get('lname');
        $signup->birthday=$request->get('birthday');
        $signup->number=$request->get('number');
        $signup->state=$request->get('state');
        $signup->gender=$request->get('gender');

        
        if ($request->hasfile('image')) {

            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); //getting image extension
            $filename = time() . '.' . $extension;
            $file->move('uploads/signup/', $filename);
            $signup->image = $filename;
        }
        else{
            return redirect('/signup');
        }

        $signup->email=$request->get('email');
        $signup->check=$request->check == true ? '1':'0';

        $signup->save();

        return redirect('/')->with('msg','Thankx for Your Info');
    }
}
