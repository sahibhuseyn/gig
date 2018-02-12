<?php

namespace App\Http\Controllers\Client;

use App\Mail\ContactMail;
use App\Project;
use App\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class MainController extends Controller
{
    public function index(){
        $projects = Project::projects();
        $teams = Team::teams();

        return view('client.index.index', compact('projects', 'teams'));
    }

    public function contactsEmail (Request $request) {

        if ($request->cap_check){
            return back();
        }

        Mail::send(new ContactMail());

        Session::flash('success', 'Successfully sent! We will inform you soon.');
        return back();
    }
}
