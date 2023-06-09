<?php

namespace App\Http\Controllers;

use App\Models\Entrepot;
use App\Models\Emplacement;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Barryvdh\DomPDF\Facade\Pdf;

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
                        'description' =>  ['string', 'nullable'],
                        'entrepot_id' => 'required',
                    ]);

   

          if($validated){

            $emplacement = Emplacement::create([

                     "name" =>$validated["name"],
                     "description" =>$validated["description"],
                     "entrepot_id" =>$validated["entrepot_id"],
             ]);

         
          }
          session()->flash('success', 'Emplacement enregistré avec succès!');
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
     * Display all biens belong to emplacement .
     */
    public function createPDF(Emplacement $emplacement)
    {
        //
        $pdf = Pdf::loadView('entrepots.emplacement_pdf',["emplacement"=> $emplacement]);
        
        return $pdf->download('liste des biens de l\'emplacement_'.$emplacement->name.time().rand('1', '9999').'.pdf');
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
