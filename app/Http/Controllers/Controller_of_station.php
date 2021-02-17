<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Station;
class Controller_of_station extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $All_station =Station::all();
       return view('pages_station.page_show_station',compact('All_station'));
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
        //
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
        $data_station=Station::find($id);
        return view('pages_station.page_edit_station',compact('data_station'));
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
        
        $request->validate([
            'station_name' => 'required|max:20',
            'station_name' =>  'required|max:25',
            'station_name' =>  'required|max:10',
            'station_name' =>  'required|max:13',
           ]);
  
            $dataUser =  Station::find($id);
            $dataUser->station_name   = $request->station_name;
            $dataUser->station_desc   = $request->station_desc;
            $dataUser->station_area   = $request->station_area;
            $dataUser->trans_type     = $request->trans_type;
        
            $dataUser->save();
  
             return redirect('/pages_station');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data_station=Station::find($id);
        $data_station->delete();
       return redirect('/pages_station');
    }
}
