<?php

namespace App\Http\Controllers;

use App\Item;
use App\Type;
use App\Size;
use App\Unit;
use App\Weight;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $item = Item::all();
        return view('item.index', compact('item'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //$item = Item::all();
        //return view('item.create',compact('item'));
        $type = Type::all();
        $size = Size::all();
        $unit = Unit::all();
        $weight = Weight::all();
        return view('item.create',compact('weight','type','size','unit'));
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
            'code' => 'required',
            'price' => 'required'
        ]);
        
        $item = new Item;
        $item->code = $request->code;
        $item->type_id = $request->type_id;
        $item->size_id = $request->size_id;
        $item->unit_id = $request->unit_id;
        $item->weight_id = $request->weight_id;
        $item->price = $request->price;
        $item->save();
        return redirect()->route('item.index')->with('success', 'Item Telah Tersimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $item = Item::findOrFail($id);
        $type = Type::all();
        $size = Size::all();
        $unit = Unit::all();
        $weight = Weight::all();
        return view('item.show',compact('weight','unit','size','type','item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $item = Item::findOrFail($id);
        $type = Type::all();
        $size = Size::all();
        $unit = Unit::all();
        $weight = Weight::all();
        return view('item.edit',compact('weight','unit','size','type','item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request,[
            'code' => 'required',
            'price' => 'required'
        ]);
        
        $item = Item::findOrFail($id);
        $item->code = $request->code;
        $item->type_id = $request->type_id;
        $item->size_id = $request->size_id;
        $item->unit_id = $request->unit_id;
        $item->weight_id = $request->weight_id;
        $item->price = $request->price;
        $item->save();
        return redirect()->route('item.index')->with('success', 'Item Telah Terupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $item = Item::findOrFail($id);
        $item->delete();
        return redirect()->route('item.index')->with('success', 'Item Telah Terhapus');;
    }
}
