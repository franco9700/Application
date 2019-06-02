<?php

namespace App\Http\Controllers;

use App\companies;
use App\subsidiaries;
use Illuminate\Http\Request;
use Auth;
use App\User;

class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('provider_register');
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
        $provider = new companies($request->all());
        $user = Auth::user();
        $provider['user_id'] = $user['id'];
        $provider->save();

        $changeProvider = new User();
        $changeProvider->changeToProvider($user['id']);

        return redirect()->route('profile');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\companies  $companies
     * @return \Illuminate\Http\Response
     */
    public function show(companies $companies)
    {

        $companies = new companies;

        $company= $companies->getCompany();

        $subsidiaries = $companies->getSubsidiaries();

        $controller = new Controller;
        $error = $controller->hasInput($subsidiaries);

        return view('company')->with('company', $company)->with('subsidiaries', $subsidiaries)->with('error', $error);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\companies  $companies
     * @return \Illuminate\Http\Response
     */
    public function edit(companies $companies)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\companies  $companies
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, companies $companies)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\companies  $companies
     * @return \Illuminate\Http\Response
     */
    public function destroy(companies $companies)
    {
        //
    }
}
