<?php

namespace App\Http\Controllers\Admin;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class MainController extends Controller
{
    public function index () {
        return view('admin.index.index');
    }

}
