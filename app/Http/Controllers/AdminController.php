<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $Profile = User::findorFail($request->input('id'));

        if($request->hasfile('img1')) 
        {
            $file = $request->file('img1');
            //$file = $request->file('img1')->getClientOriginalName(); cause error 
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

        return redirect()->route('admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
