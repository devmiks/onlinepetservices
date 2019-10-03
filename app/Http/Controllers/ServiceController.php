<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\service;
use App\Listservice;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $Services = new Listservice();
        $Services->ServiceName = $request->input('frmServiceName');
        $Services->save();
        return redirect()->route('admin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addnewservice(Request $request)
    {
        $Service = new service();
        $Service->userid = $request->input('user_id');
        $Service->services_name = $request->input('selectUser');
        $Service->rate_price = $request->input('servicesrateprice');

        $Service->save();
        return redirect()->route('admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(service $service)
    {
        $Services = service::findorFail($service->id);
        $Service->services_name = $service->input('inputServiceName');
        $Service->rate_price = $service->input('inputServiceRate');

        $Service->save();
        return redirect()->route('admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(service $service)
    {
        //
    }
    
    public function delete($id) 
    {
        $Service = service::findorFail($id);
        $Service->delete($id);
        
        return redirect()->route('admin');
    }
}
