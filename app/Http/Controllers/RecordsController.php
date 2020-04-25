<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Records;

class RecordsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('records.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $records = Records::create([
            'pm_obs' => $request->input('pm_obs'),
            'pm_min' => $request->input('pm_max'),
            'pm_max' => $request->input('pm_min'),
            'aqi_max' => $request->input('aqi_max'),
            'aqi_min' => $request->input('aqi_min'),
        ]);
        
        $records->save();
        return redirect()->action('HomeController@index');
        
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
    public function edit(Records $id)
    {
        return view('records.edit')->with('record', $id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Records $id)
    {
        $id->update($request->all());
        return redirect()->action('HomeController@index')->with('updated', "Successfully updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $record = Records::find($id);
        $record->delete();

        return redirect()->action('HomeController@index')->with('deleted', "Successfully deleted");
    }


    //for API
    public function getRecords(){
        $records = Records::all();
        return response()->json($records, 200);
    }
}
