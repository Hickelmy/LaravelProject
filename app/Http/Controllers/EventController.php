<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        return view('home.home');
    }

    public function dashboard()
    {
        return view('dashboard.dashboard');
    }


    public function about()
    {
        return view('about.about');
    }


    public function create_function()
    {
        return view('events.create');
    }

    public function login()
    {
        return view('login.login');
    }


    public function logout()
    {
        return view('login.logout');
    }


    public function signup()
    {
        return view('signup.signup');
    }
}
