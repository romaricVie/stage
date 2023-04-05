<?php

namespace App\Http\Controllers;

use App\Models\Scategorie;
use Illuminate\Http\Request;
use Illuminate\View\View;


class ScategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
         $scategories = Scategorie::with(array('categorie' => function($query){
                        $query->select('id','name');
         }))->simplePaginate(10);

         return view('categories.scategorie_index',[
                      "scategories" => $scategories
                    ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        //
      return view('categories.scategorie_create');
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
    public function show(Scategorie $scategorie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Scategorie $scategorie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Scategorie $scategorie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Scategorie $scategorie)
    {
        //
    }
}
