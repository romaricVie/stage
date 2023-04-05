<?php

namespace App\Http\Controllers;

use App\Models\Reparation;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ReparationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $reparations = Reparation::all();

         return view('reparations.index',[
                     "reparations" => $reparations
         ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        //
       return view('reparations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Reparation $reparation):View
    {
        //
         return view('reparations.show',[
            
                       "reparation" =>$reparation
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reparation $reparation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reparation $reparation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reparation $reparation)
    {
        //
    }
}
