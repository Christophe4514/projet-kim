<?php

namespace App\Http\Controllers;

use App\Models\ClientSatisfait;
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
        $listeTemoin = Temoignage::all();
        $project = Project::all();
        $servicesName = Service::all();
        $client = ClientSatisfait::all();
        $recentProject = Project::orderBy('project_name','desc')->limit(3)->get();
        return view('clients.home', compact('servicesName','project','listeTemoin','client','recentProject'));
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
        $recentProject = Project::orderBy('project_name','desc')->limit(3)->get();
        return view('clients.about.project', compact('project', 'servicesName','recentProject'));
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
    public function details($id){
        $services = Service::all();
        $servicesName = Service::find($id);
        $detail = $servicesName->details;
        return view('clients.services.detail', compact('detail','servicesName','services'));
    }
    public function singleProject($id){
        $project = Project::all();
        $services = Service::all();
        $projectOne = Project::findOrFail($id);
        return view('clients.about.single-project', compact('projectOne','services','project'));
    }

}
