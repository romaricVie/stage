<?php

namespace App\Http\Controllers;

use App\Models\Reparation;
use App\Models\Bien;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;

class ReparationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $reparations = Reparation::all();

         return view('reparations.index',[
                     "reparations" => $reparations
         ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        //
        $biens = Bien::all();
        return view('reparations.create',[

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
       //$bien = DB::table('biens')->where('id',$request->bien_id)->first();   

      //  dd($bien->etat);
 
      //dd($request->etat);
         $validated = $request->validate([
                
                        'etat' => 'required',
                        'maintenancier' => 'required',
                        'price' => ['required', 'string'],
                        'contact_maintenancier' => ['required', 'string'],
                        'description_panne' => ['required','string'],
                        'day' => 'required',
                        'month' => 'required',
                        'year' =>'required',
                        'bien_id' =>'required',

                    ]);
 
               $bien = DB::table('biens')->where('id',$request->bien_id)->first();

                  if($validated){

                            $reparation = Reparation::create([

                                            "etat" => $validated["etat"],
                                            "maintenancier" => $validated["maintenancier"],
                                            "price" => $validated["price"],
                                            "contact_maintenancier" => $validated["contact_maintenancier"],
                                            "description_panne" => $validated["description_panne"],
                                            "day" => $validated["day"],
                                            "month" => $validated["month"],
                                            "year" => $validated["year"],
                                            "etiquette" =>$bien->etiquette,
                                            "bien_id" => $validated["bien_id"],

                                     ]);

            //update etat bien($request->bien);  
             $bien = DB::table('biens')->where('id',$request->bien_id)->update(['etat'=>$validated["etat"]]);   
              
            

                  }


 
          return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Reparation $reparation):View
    {
        //
         return view('reparations.show',[
            
                       "reparation" =>$reparation
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reparation $reparation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reparation $reparation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reparation $reparation)
    {
        //
        $reparation->delete();
        return redirect()->route('reparations.index');
    }
}
