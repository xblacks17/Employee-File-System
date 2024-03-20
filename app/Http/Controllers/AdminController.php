<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view("pages.index");
    }

    public function current(){
        return view("pages.current");
    }

    public function past(){
        return view("pages.past");
    }

    public function add(){
        return view("pages.add");
    }

    public function profile(){
        return view("pages.profile");
    }

    public function login(){
        return view("pages.login");
    }
}
