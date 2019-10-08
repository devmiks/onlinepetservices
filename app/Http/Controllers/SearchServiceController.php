<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\service;
use App\Listservice;
use Illuminate\Http\Request;
use DB;

class SearchServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $fieldSearch = $request->input('selectUser');
        $serviceinfo = DB::table('services')->where('services.services_name', $fieldSearch)->first();
        $searchprofile = DB::select('select distinct users.id, users.email, users.fname, users.mname, users.lname, 
                                    users.homeaddress, users.mobilenum, users.image1 from services 
                                    inner join users on services.userid = users.id 
                                    where services_name = ?', array($fieldSearch));        
         
        return view('Regular.searchprofessionalprofile', compact('fieldSearch','serviceinfo', 'searchprofile'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
    public function update(Request $request, $id)
    {
        //
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
