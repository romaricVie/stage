<?php

namespace App\Http\Controllers;

use App\Models\Sscategorie;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SscategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $sscategories = Sscategorie::with('categorie','scategorie')->simplePaginate(10);

         return view('categories.sscategorie_index',[
                    "sscategories" => $sscategories
      
         ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        //
         return view('categories.sscategorie_create');
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
    public function show(Sscategorie $sscategorie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sscategorie $sscategorie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sscategorie $sscategorie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sscategorie $sscategorie)
    {
        //
    }
}
