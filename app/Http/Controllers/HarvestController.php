<?php

namespace App\Http\Controllers;

use App\Http\Resources\CropResource;
use App\Models\Crop;
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
        $crop = Crop::where('id','id')->get(['id','crop_name']);
        return view('agri_system.add_harvest', compact('crop'));
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
        $harvest= new Harvest();

        $harvest->crop_name=$request->input('crop_name');
        $harvest->soil_type=$request->input('soil_type');
        $harvest->rainfall=$request->input('rainfall');
        $harvest->temperature=$request->input('temperature_level');
        $harvest->fertilizer=$request->input('fertilizer');
        $harvest->period=$request->input('season');
 
         if($harvest->save()==TRUE){
             $message='Crop Registered successfully';
             return redirect('add_crop');    
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
