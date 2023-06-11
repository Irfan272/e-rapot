<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function home(){
        return view('admin.home');
    }

    public function index(){
        return view('admin.master_data.guru.index');
    }

    public function create(){
        return view('admin.master_data.guru.create');
    }
}
