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

//    public function index()
//    {
//        $informationSheet = Request::all();
//
//        return view('prospect.informationsheet.index', compact('informationSheet'));
//    }

    public function show($id)
    {
        $informationSheet = InformationSheet::findOrFail($id);

        return view( 'prospect.informationsheet.show', compact('informationSheet'));
    }

    public function create()
    {
        return view('prospect.informationsheet.create');
    }

    public function store(CreateInformationSheetRequest $request)
    {
        InformationSheet::create($request->all());

        return redirect('prospect.index');
    }

    public function edit($id)
    {
        $informationSheet = InformationSheet::findOrFail($id);

        return view('prospect.informationsheet.edit', compact('informationSheet'));
    }

}