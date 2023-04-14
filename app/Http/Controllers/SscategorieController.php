<?php

namespace App\Http\Controllers;


use App\Models\Categorie;
use App\Models\Scategorie;
use App\Models\Sscategorie;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

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
        $categories = Categorie::all();
        $scategories = Scategorie::all();

         return view('categories.sscategorie_create',

                        [
                            "categories" => $categories,
                            "scategories" => $scategories

                     ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    {
        //
       
       // dd($request->all());

          $validated = $request->validate([
                
                        'name' => 'required',
                        'categorie_id' => 'required',
                        'scategorie_id' => 'required',
                    ]);

    //   dd($request->all());

          if($validated){

            $sscategorie = Sscategorie::create([

                     "name" =>$validated["name"],
                     "categorie_id" =>$validated["categorie_id"],
                     "scategorie_id" =>$validated["scategorie_id"],
             ]);

         
          }
 
          return redirect()->back();



    }

    /**
     * Display the specified resource.
     */
    public function show(Sscategorie $sscategorie):View
    {
        //
         return view('categories.sscategorie_show',
                        [
                          "sscategorie" => $sscategorie,
                     ]);
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
