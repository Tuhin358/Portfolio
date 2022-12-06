<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServicePagesController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $services=Service::all();
        return view('pages.services.list',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $service=Service::first();
        return view('pages.services.create',compact('service'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'icon'=>'required|string',
            'title'=>'required|string',
            'description'=>'required|string'

        ]);
        $services=new Service;
        $services->icon=$request->icon;
        $services->title=$request->title;
        $services->description=$request->description;
        $services->save();
        return redirect()->route('admin.services.create')->with('success','New Services Create Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $services=Service::find($id);
        return view('pages.services.edit',compact('services'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'icon'=>'required|string',
            'title'=>'required|string',
            'description'=>'required|string'

        ]);
        $services=Service::find($id);
        $services->icon=$request->icon;
        $services->title=$request->title;
        $services->description=$request->description;

        $services->save();

        return redirect()->route('admin.services.list')->with('success','New Services Updated Successfully');
    }



    public function destroy($id)
    {
        $services=Service::find($id);
        $services->delete();
        return redirect()->route('admin.services.list')->with('success',' Services Delete Successfully');


    }
}