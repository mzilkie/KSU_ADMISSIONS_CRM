<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformationFormController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return view('index');
    }

    public function create()
    {
        return view('prospects.create');
    }
}