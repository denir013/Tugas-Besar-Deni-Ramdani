<?php

namespace App\Http\Controllers;

use App\Size;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $size = Size::all();
        return view('size.index',compact('size'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $size = Size::all();
        return view('size.create',compact('size'));
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

        $size = new Size;
        $size->name = $request->name;
        $size->save();
        return redirect()->route('size.index')->with('success', 'Size Telah Tersimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Size  $size
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Size $size
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $size = Size::findOrFail($id);
        return view('size.edit',compact('size'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Size $size
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'name' => 'required'
        ]);

        $size = Size::findOrFail($id);
        $size->name = $request->name;
        $size->save();
        return redirect()->route('size.index')->with('success', 'Size Telah Terupdate');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Size  $size
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $size = Size::findOrFail($id);
        $size->delete();
        return redirect()->route('size.index')->with('success','Size Telah Terhapus');
    }
}
