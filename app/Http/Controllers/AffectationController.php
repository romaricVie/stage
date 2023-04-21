<?php

namespace App\Http\Controllers;

use App\Models\Affectation;
use App\Models\Employe;
use App\Models\Bien;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;


class AffectationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        //
    //  $affectations = Affectation::simplePaginate(10);

      return view('affectations.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
      
        //
        $employes = Employe::all();
        $biens = Bien::all();

        return view('affectations.create',

                    [
                        "employes" => $employes,
                        "biens" => $biens

                ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    {
        //

       $validated = $request->validate([
                
                        'description' => 'required',
                        'motif_affection' => 'required',
                        'employe_id' => 'required',
                        'bien_id' => 'required',

                    ]);

   

          if($validated){

        $affectation = Affectation::create([

                     "description" =>$validated["description"],
                     "motif_affection" =>$validated["motif_affection"],
                     "employe_id" =>$validated["employe_id"],
                     "bien_id" =>$validated["bien_id"],
             ]);

         
          }
 
          return redirect()->back();

    }

    /**
     * Display the specified resource.
     */
    public function show(Affectation $affectation):View
    {
        //

         return view('affectations.show',[
                   'affectation' => $affectation
      ]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Affectation $affectation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Affectation $affectation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Affectation $affectation)
    {
        //
    }
}
