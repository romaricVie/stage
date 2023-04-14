<?php

namespace App\Http\Controllers;

use App\Models\Scategorie;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

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
         }))->simplePaginate(50);

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
     $categories = Categorie::all();

      return view('categories.scategorie_create',
                [
                 
                 "categories" => $categories

                ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    {
        //

        // dd($request->categorie_id);
          $validated = $request->validate([
                
                        'name' => 'required',
                        'categorie_id' => 'required',
                    ]);

    //   dd($request->all());

          if($validated){

            $scategorie = Scategorie::create([

                     "name" =>$validated["name"],
                     "categorie_id" =>$validated["categorie_id"],
             ]);

         
          }
 
          return redirect()->back();
       
    }

    /**
     * Display the specified resource.
     */
    public function show(Scategorie $scategorie):View
    {
        //

        return view('categories.scategorie_show',
                [
                 
                 "scategorie" => $scategorie

                ]);

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
