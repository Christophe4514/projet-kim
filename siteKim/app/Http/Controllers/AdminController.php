<?php

namespace App\Http\Controllers;

use App\Models\ClientSatisfait;
use App\Models\Faq;
use App\Models\Nouvelle;
use App\Models\Online;
use App\Models\Personnel;
use App\Models\Project;
use App\Models\Service;
use App\Models\Temoignage;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function dashboard(Online $online){

       $nbr_users = count(User::all());
       $nbr_services = count(Service::all());
       $nbr_user_online =  $online->visiteurs_online();
       $nbr_projects = count(Project::all());
       $nbr_partenaires = count(ClientSatisfait::all());
       $nbr_faqs = count(Faq::all());
       $nbr_news = count(Nouvelle::all());
       $nbr_personnel = count(Personnel::all());
       $nbr_temoignages = count(Temoignage::all());
        return view('admin.dashboard', compact('nbr_user_online', 'nbr_services',
        'nbr_projects', 'nbr_users', 'nbr_partenaires','nbr_faqs', 'nbr_news',
        'nbr_personnel','nbr_temoignages'));
    }
}
