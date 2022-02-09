<?php

namespace App\Http\Controllers;

use App\Transaction;
use App\Item;
use App\Type;
use App\Size;
use App\Unit;
use App\Weight;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    


    public function index()
    {
        //
        $transaction = Transaction::all();
        return view('transaction.index', compact('transaction'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //$transaction = Transaction::all();
        $item = Item::all();
        return view('transaction.create',compact('item'));
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
            'date' => 'required',
            'customer_name' => 'required',
            'total_items' => 'required',
            'subtotal' => 'required'
        ]);
        
        $transaction = new Transaction;
        $transaction->code = $request->code;
        $transaction->date = $request->date;
        $transaction->customer_name = $request->customer_name;
        $transaction->total_items = $request->total_items;
        $transaction->subtotal = $request->subtotal;
        $transaction->save();
        return redirect()->route('transaction.index')->with('success', 'Transaction Telah Tersimpan');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $transaction = Transaction::findOrFail($id);
        return view('transaction.edit',compact('transaction'));
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
        $transaction = Transaction::findOrFail($id);
        $transaction->delete();
        return redirect()->route('transaction.index');
    }
}
