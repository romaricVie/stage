<?php

namespace App\Http\Controllers;

use App\Models\Entrepot;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;
use Barryvdh\DomPDF\Facade\Pdf;

class EntrepotController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        //
        $entrepots = DB::table('entrepots')->simplePaginate(20);
 //  dd($entrepots);
        return view('entrepots.index',
                        [
                            "entrepots" => $entrepots
                        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        //
         return view('entrepots.create');
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
                        'description' =>  ['string','nullable'],
                        'adresse_geographique' => 'required',
                    ]);

   

          if($validated){

            $entrepot = Entrepot::create([

                     "name" =>$validated["name"],
                     "description" =>$validated["description"],
                     "adresse_geographique" =>$validated["adresse_geographique"],
             ]);

         
          }
            session()->flash('success', 'Entrepot enregistré avec succès!');
            return redirect()->back();

    }

    /**
     * Display all biens belong to entrepot .
     */
    public function createPDF(Entrepot $entrepot)
    {
        //

        $pdf = Pdf::loadView('entrepots.entrepot_pdf',["entrepot"=> $entrepot]);
        
        return $pdf->download('liste des biens de l\'entrepot_'.$entrepot->name.time().rand('1', '9999').'.pdf');


    }


     /**
     * Display the specified resource.
     */
    public function show(Entrepot $entrepot):View
    {
        //

         return view('entrepots.show',
                        [
                            "entrepot" => $entrepot
                        ]);


    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Entrepot $entrepot)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Entrepot $entrepot)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Entrepot $entrepot)
    {
        //
    }
}
