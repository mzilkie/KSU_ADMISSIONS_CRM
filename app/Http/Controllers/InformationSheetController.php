<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformationSheetController extends Controller
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
        return view('prospect.index');
    }

    public function create()
    {
        return view('prospects.create');
    }

    public function store(InformationFormRequest $request)
    {
        $prospect = DB::InformationForm($request->all());

        return view('prospect.index', compact('prospect'));
    }
}