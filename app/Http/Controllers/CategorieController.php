<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        //
       $categories = DB::table("categories")->simplePaginate(50);

       return view('categories.index',
                                    [

                                     "categories" => $categories
                                    ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        //

       return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    {
        //

             $validated = $request->validate([
                        'name' => 'required',
                    ]);

          if($validated){

            $categorie = Categorie::create([
                     "name" =>$validated["name"],
             ]);

         
          }
 
          return redirect()->back();
       
    }

    /**
     * Display the specified resource.
     */
    public function show(Categorie $categorie)
    {
        //
         return view('categories.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categorie $categorie)
    { 
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categorie $categorie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categorie $categorie)
    {
        //
    }
}
