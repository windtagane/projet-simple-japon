<?php

namespace App\Http\Controllers;

use App\Trip;
use App\Http\Requests\TripStore;
use Illuminate\Http\Request;

class TripController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('trips.index', [
            'trips' => Trip::all()
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $Request)
    {
        //
        return view('trips.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TripStore $request)
    {
        $request->user()->trips()->create($request->all());
        session()->flash('status', 'Parcours créé avec succès');
        return redirect('/trips');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $trip = Trip::find($id);
        return view('trips.show', compact('trip'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $trip = Trip::find($id);
        return view('trips.edit', compact('trip'));

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
        'theme' => 'required|max:255|string',
        'title' => 'required||max:255|string',
        'description' => 'required',
        'favorite_place' => 'string',
        'travel_time' => 'string',
        'average_price' => 'integer',
        'transportation' => 'string',
    ]);

     $trip = Trip::find($id);
     $trip->theme = $request->get('theme');
     $trip->title = $request->get('title');
     $trip->description = $request->get('description');
     $trip->favorite_place = $request->get('favorite_place');
     $trip->travel_time = $request->get('travel_time');
     $trip->average_price = $request->get('average_price');
     $trip->transportation = $request->get('transportation');

     $trip->save();

     return redirect('/trips')->with('success', 'Votre parcours a bien été mis à jour');
 }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $trip = Trip::find($id);
        $trip->delete();

        return redirect('/trips')->with('success', 'Votre parcours a bien été supprimer');
    }
}
