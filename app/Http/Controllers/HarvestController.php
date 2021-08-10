<?php

namespace App\Http\Controllers;

use App\Http\Resources\CropResource;
use App\Models\Crop;
use App\Http\Resources\HarvestResource;
use App\Models\Harvest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class HarvestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $crops = Crop::all();
        return view('agri_system.add_harvest', compact('crops'));
    }

    public function view_harvest()
    {
        $harvests = Harvest::all();
        return view('agri_system.view_harvest', compact('harvests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //take crop name by using cropID
        $input_cropID=$request->input('crop_id');
        $cropname=Crop::select("*")->where("id","=",$input_cropID)->get();
        foreach ($cropname as $cropname)
            $cropname=$cropname->crop_name;
        

        $harvest= new Harvest();

        $harvest->cropID=$request->input('crop_id');
        $harvest->Crop_name=$cropname;
        $harvest->tonne=$request->input('tonne');
        $harvest->year=$request->input('year');
 
         if($harvest->save()==TRUE){
             $message='Crop Registered successfully';
             return redirect('view_harvest');    
         }
         else{
             echo 'adff';
         }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
