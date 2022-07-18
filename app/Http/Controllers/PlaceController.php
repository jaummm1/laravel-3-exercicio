<?php

namespace App\Http\Controllers;

use App\Models\Place;
use App\Models\Nome;
use Illuminate\Http\Request;

class PlaceController extends Controller
{

    public function hello($nome)
    {
        $result = $nome;
        return view('hello', compact('nome'));
    }

    public function dbz($energy)
    {
        $result = $energy;
        return view('dbz', compact('energy'));
    }

    public function clients()
    {
        $names = Nome::all();
        

        return view('clients', compact('names'));

    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {
         $places = Place::all();
         return view('places.index', compact('places'));
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('places.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Place::create([
            'name' => $request->name,
            'description' => $request->description,
            'address' => $request->address
        ]
        );
    
    return redirect('/places');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function show(Place $place)
    {
        return view('places.show', compact('place'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function edit(Place $place)
    {
        return view('places.edit', compact('place'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Place $place)
    {
        $place->update(
            [
                'name' => $request->name,
                'description'=> $request->description,
                'address' => $request->address
            ]
        );
        return redirect('/places');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Place  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Place $place)
    {
        $place->delete();

        return redirect('/places');
    }
}
