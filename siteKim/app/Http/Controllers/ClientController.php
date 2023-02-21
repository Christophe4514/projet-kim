<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Temoignage;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servicesName = Service::all();
        return view('clients.home', compact('servicesName'));
    }

    public function services(){
        $servicesName = Service::all();
        return view('clients.services.services', compact('servicesName'));
    }

    public function about(){
        $servicesName = Service::all();
        return view('clients.about.about', compact('servicesName'));
    }

    public function contact(){
        $servicesName = Service::all();
        return view('clients.contact', compact('servicesName'));
    }

    public function temoignage(){
        $listeTemoin = Temoignage::all();
        $servicesName = Service::all();
        return view('clients.temoignage', compact('listeTemoin','servicesName'));
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
