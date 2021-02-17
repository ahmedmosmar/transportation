<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Station;
use App\Sub_station;
class Controller_of_sub_station extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sub_stations=Sub_station::all();
        return view('page_sub_station.page_show_sub_station',compact('sub_stations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $station=Station::all();
      //  dd($station);
        return view('page_sub_station.page_insert_sub_station',compact('station'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'user_name' => 'required|max:20',
        //     'user_email' =>  'required|max:25',
        //     'user_type' =>  'required|max:10',
        //     'user_phone' =>  'required|max:13',
        //    ]);
  
  
            $dataSub_station                         = new Sub_station;
            $dataSub_station->sub_station_name       = $request->sub_station_name;
            $dataSub_station->sub_station_desc       = $request->sub_station_desc;
            $dataSub_station->station_id             = $request->station_id;
        
            $dataSub_station->save();
  
             return redirect('/page_sub_station');
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
