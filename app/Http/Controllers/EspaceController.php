<?php

namespace App\Http\Controllers;

use App\Models\Entrepot;
use App\Models\Emplacement;
use App\Models\Espace;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class EspaceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
     /*   $espaces = Espace::with('entrepot','emplacement')->simplePaginate(20);*/

         return view('entrepots.espace_index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        //

        //$entrepots = Entrepot::all();
       // $emplacements = Emplacement::all();

         return view('entrepots.espace_create');
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
                        'description' =>  ['string'],
                        'entrepot_id' => 'required',
                        'emplacement_id' => 'required',
                    ]);

   

          if($validated){

            $espace = Espace::create([

                     "name" =>$validated["name"],
                     "description" =>$validated["description"],
                     "entrepot_id" =>$validated["entrepot_id"],
                     "emplacement_id" =>$validated["emplacement_id"],
             ]);

         
          }
 
          return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Espace $espace):View
    {
        //

      return view('entrepots.espace_show',[

                     'espace' => $espace
         ]);


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
