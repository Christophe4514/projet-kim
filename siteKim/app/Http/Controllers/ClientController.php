<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Nouvelle;
use App\Models\Personnel;
use App\Models\Project;
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

    public function services()
    {
        $servicesName = Service::all();
        return view('clients.services.services', compact('servicesName'));
    }

    public function about()
    {
        $team = Personnel::all();
        $servicesName = Service::all();
        return view('clients.about.about', compact('servicesName', 'team'));
    }

    public function contact()
    {
        $servicesName = Service::all();
        return view('clients.contact', compact('servicesName'));
    }

    public function temoignage()
    {
        $listeTemoin = Temoignage::all();
        $servicesName = Service::all();
        return view('clients.about.temoignage', compact('listeTemoin', 'servicesName'));
    }

    public function faq()
    {
        $question = Faq::all();
        $project = Project::all();
        $servicesName = Service::all();
        return view('clients.about.faq', compact('question', 'servicesName','project'));
    }

    public function project()
    {
        $project = Project::all();
        $servicesName = Service::all();
        return view('clients.about.project', compact('project', 'servicesName'));
    }

    public function team()
    {
        $team = Personnel::all();
        $servicesName = Service::all();
        return view('clients.about.team', compact('team', 'servicesName'));
    }

    public function news()
    {
        $news = Nouvelle::all();
        $servicesName = Service::all();
        $project = Project::all();
        return view('clients.about.news', compact('news', 'servicesName', 'project'));
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
