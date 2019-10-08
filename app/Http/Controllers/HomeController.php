<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\service;
use App\Listservice;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $ListServices = listservice::all();        
        
        if($request->has('btn1submit')) {
            $NameSearch = $request->input('selectUser');

            if(!empty($request->input('selectUser'))) 
            {                
                $ServiceTable = service::where('services_name', $NameSearch)->get();
                $Profiles = user::all();
                return view('home1', compact('ListServices', 'ServiceTable', 'Profiles'));
            }
        }
        
        return view('home1', compact('ListServices'));
    }

    public function update(Request $request)
    {
        
        $Profile = User::findorFail($request->input('id'));
        if($request->hasfile('img1')) 
        {
            $file = $request->file('img1');            
            $extension = $file->getClientOriginalExtension(); // Get Image Ext.
            $filename = time() . "." . $extension;
            $file->move('uploads/employee/', $filename);   
            if(is_null($request->input('oldpic')))
            {   
                
            } else {
                
            }       
        } else {
            if(is_null($request->input('oldpic'))) 
            {
                $filename = null;
            } else 
            {
                $filename = $request->input('oldpic');
            }            
        }

        $Profile->fname = $request->input('fname');
        $Profile->mname = $request->input('mname');
        $Profile->lname = $request->input('lname');
        $Profile->homeaddress = $request->input('homeaddr');
        $Profile->mobilenum = $request->input('mobilenum');
        $Profile->user_type = $request->input('typeAcc');
        $Profile->image1 = $filename;  

        $Profile->save();

        return redirect()->route('home1');
    }

    public function searchprofile(Request $search) 
    {        
        
    }

}
