<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InformationSheet;
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

    public function index()
    {
        //$informationSheet = Request::all();

        return view('prospect.informationsheet.index');
    }

    public function show($id)
    {
        $informationsheet = InformationSheet::findOrFail($id);

        return view( 'prospect.informationsheet.show', compact('informationsheet'));
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
        $informationsheet = InformationSheet::findOrFail($id);

        return view('prospect.informationsheet.edit', compact('informationsheet'));
    }

}