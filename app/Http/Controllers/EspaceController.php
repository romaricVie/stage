<?php

namespace App\Http\Controllers;

use App\Models\Espace;
use Illuminate\Http\Request;
use Illuminate\View\View;
class EspaceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $espaces = Espace::with('entrepot','emplacement')->simplePaginate(10);
         return view('entrepots.espace_index',[

                     'espaces' => $espaces
         ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        //
         return view('entrepots.espace_create');
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
    public function show(Espace $espace)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Espace $espace)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Espace $espace)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Espace $espace)
    {
        //
    }
}
