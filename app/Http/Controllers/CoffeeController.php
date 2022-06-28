<?php

namespace App\Http\Controllers;

use App\Coffee;
use Illuminate\Http\Request;

class CoffeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coffees = Coffee::all();

        return view('coffees.index', compact('coffees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('coffees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $coffee = new Coffee();
        $coffee->coffee_name = $request->input('coffee_name');
        $coffee->coffee_place = $request->input('coffee_place');
        $coffee->save();

        return redirect()->route('coffees.show', ['id' => $coffee->id])->with('message', 'Coffee was successfully created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Coffee  $coffee
     * @return \Illuminate\Http\Response
     */
    public function show(Coffee $coffee)
    {
         return view('coffees.show', compact('coffee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Coffee  $coffee
     * @return \Illuminate\Http\Response
     */
    public function edit(Coffee $coffee)
    {
         return view('coffees.edit', compact('coffee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Coffee  $coffee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Coffee $coffee)
    {
        $coffee->coffee_name = $request->input('coffee_name');
        $coffee->coffee_place = $request->input('coffee_place');
        $coffee->save();

        return redirect()->route('coffees.show', ['id' => $coffee->id])->with('message', 'Coffee was successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Coffee  $coffee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coffee $coffee)
    {
        $coffee->delete();

        return redirect()->route('coffees.index');
    }
}
