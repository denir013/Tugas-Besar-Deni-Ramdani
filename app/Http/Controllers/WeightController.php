<?php

namespace App\Http\Controllers;

use App\Weight;
use Illuminate\Http\Request;

class WeightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $weight = Weight::all();
        return view('weight.index',compact('weight'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $weight = Weight::all();
        return view('weight.create',compact('weight'));
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
        $request->validate([
            'name' => 'required'
        ]);

        $weight = new Weight;
        $weight->name = $request->name;
        $weight->save();
        return redirect()->route('weight.index')->with('success', 'Weight Telah Tersimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Weight  $weight
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Weight  $weight
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $weight = Weight::findOrFail($id);
        return view('weight.edit',compact('weight'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Weight  $weight
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'name' => 'required'
        ]);

        $weight = Weight::findOrFail($id);
        $weight->name = $request->name;
        $weight->save();
        return redirect()->route('weight.index')->with('success', 'Weight Telah Terupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Weight  $weight
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $weight = Weight::findOrFail($id);
        $weight->delete();
        return redirect()->route('weight.index')->with('success','Weight Telah Terhapus');
    }
}
