<?php

namespace App\Http\Controllers;

use App\subsidiaries;
use App\companies;
use Illuminate\Http\Request;

class SubsidiariesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('subsidiary_register');
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
        $subsidiary= new subsidiaries($request->all());
        
        $companies = new companies;

        $company= $companies->getCompany();

        $subsidiary['company_id'] = $company['id'];
        $subsidiary->save();

        return redirect()->route('my_company');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\subsidiaries  $subsidiaries
     * @return \Illuminate\Http\Response
     */
    public function show(subsidiaries $subsidiaries)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\subsidiaries  $subsidiaries
     * @return \Illuminate\Http\Response
     */
    public function edit(subsidiaries $subsidiaries)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\subsidiaries  $subsidiaries
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, subsidiaries $subsidiaries)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\subsidiaries  $subsidiaries
     * @return \Illuminate\Http\Response
     */
    public function destroy(subsidiaries $subsidiaries)
    {
        //
    }
}
