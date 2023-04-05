<?php

namespace App\Http\Controllers;

use App\Models\Emplacement;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EmplacementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        //
        $emplacements = Emplacement::with(array('entrepot'=> function($query){
                       $query->select('id','name');

        }))->simplePaginate(10);

        return view('entrepots.emplacement_index',[

                 "emplacements" => $emplacements
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        //
          return view('entrepots.emplacement_create');
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
    public function show(Emplacement $emplacement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Emplacement $emplacement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Emplacement $emplacement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Emplacement $emplacement)
    {
        //
    }
}
