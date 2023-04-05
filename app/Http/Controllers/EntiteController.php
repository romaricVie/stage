<?php

namespace App\Http\Controllers;

use App\Models\Entite;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EntiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        //
        $entites = Entite::all();
        
        return view('entites.index',[

                 'entites' => $entites
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        //
         return view('entites.create');

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
    public function show(Entite $entite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Entite $entite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Entite $entite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Entite $entite)
    {
        //
    }
}
