<?php

namespace App\Http\Controllers;

use App\Models\Affectation;
use App\Models\Employe;
use App\Models\Bien;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;

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
        $biens = DB::table('biens')->where("disponibilite","libre" )->get();

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

       //dd($request->all());
    
       $validated = $request->validate([
                
                        'employe_id' => ['required'],
                        'bien_id' => ['required'],
                        'motif_affection' => ['string', 'nullable'],
                        'description' => ['string', 'nullable'],

                    ]);

       $bien = DB::table('biens')->where('id',$request->bien_id)->first();

          if($validated){

        $affectation = Affectation::create([

                     "description" =>$validated["description"],
                     "motif_affection" =>$validated["motif_affection"],
                     "etiquette" =>$bien->etiquette,
                     "employe_id" =>$validated["employe_id"],
                     "bien_id" =>$validated["bien_id"],
             ]);

           //update etat bien($request->bien);  
             $bien = DB::table('biens')->where('id',$request->bien_id)->update([
                                      'disponibilite'=> 'occupe'

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
        $affectation->delete();
        return redirect()->route('affectations.index');
    }
}
