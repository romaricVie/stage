<?php

namespace App\Http\Controllers;

use App\Models\Entrepot;
use App\Models\Emplacement;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class EmplacementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        //
      /*  $emplacements = Emplacement::with(array('entrepot'=> function($query){
                       $query->select('id','name');

        }))->simplePaginate(20);
*/
        return view('entrepots.emplacement_index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        //
         $entrepots = Entrepot::all();

          return view('entrepots.emplacement_create',
                        [
                        
                        "entrepots" => $entrepots

                      ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    {
        //

       $validated = $request->validate([
                
                        'name' => 'required',
                        'description' => 'required',
                        'entrepot_id' => 'required',
                    ]);

   

          if($validated){

            $emplacement = Emplacement::create([

                     "name" =>$validated["name"],
                     "description" =>$validated["description"],
                     "entrepot_id" =>$validated["entrepot_id"],
             ]);

         
          }
 
          return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Emplacement $emplacement):View
    {
        //
        return view('entrepots.emplacement_show',[

                 "emplacement" => $emplacement
        ]);
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
