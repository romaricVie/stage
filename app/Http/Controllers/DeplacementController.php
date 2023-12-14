<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Deplacement;
use App\Models\Entrepot;
use App\Models\Emplacement;
use App\Models\Espace;
use App\Models\Bien;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;

class DeplacementController extends Controller
{
    //



    public function index():View
    {
        //
     $deplacements = Deplacement::orderBy('id','DESC')->simplePaginate(25);

      return view('deplacements.index',[
                    "deplacements" => $deplacements

             ]);
    }


     /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
      
        //
      //  $biens = Bien::all();

        /*$biens = DB::table('biens')->where("disponibilite","libre" )
                                     ->where("etat","bon" )
                                     ->get();
*/
        return view('deplacements.create');
    }


    public function store(Request $request):RedirectResponse
    {
         //dd($request->all());
         //validattion

          $validated = $request->validate([
                        'description' => 'required',
                        'motif_deplacement' =>  ['string', 'required'],
                        'entrepot_id' => 'required',
                        'emplacement_id' => 'required',
                        'espace_id' => 'required',
                        'entite_id' => 'required',
                        'bien_id' => 'required',

                    ]);

   
         //Insertion table deplacement

          $bien = DB::table('biens')->where('id',$request->bien_id)->first();

          if($validated){

        Deplacement::create([

                     "description" =>$validated["description"],
                     "motif_deplacement" =>$validated["motif_deplacement"],
                     "entrepot_id" =>$validated["entrepot_id"],
                     "emplacement_id" =>$validated["emplacement_id"],
                     "espace_id" =>$validated["espace_id"],
                     "entite_id" =>$validated["entite_id"],
                     "bien_id" =>$validated["bien_id"],
             ]);

           //update etat bien($request->bien);  
             $bien = DB::table('biens')->where('id',$request->bien_id)->update([

                                      'entrepot_id'=> $validated["entrepot_id"],
                                      'emplacement_id'=> $validated["emplacement_id"],
                                      'espace_id'=> $validated["espace_id"],
                                      'entite_id'=> $validated["entite_id"],
                                  ]);
          }


          session()->flash('success', 'Déplacement enregistré avec succès!');
          return redirect()->back();

         //Update localisation

         //

    }

      /**
     * Display the specified resource.
     */
    public function show(Deplacement $deplacement):View
    {
        //

      return view('deplacements.show',[

                     'deplacement' => $deplacement
         ]);


    }

     /**
     * Remove the specified resource from storage.
     */
    public function destroy(Deplacement $deplacement)
    {
        //
        $deplacement->delete();
        session()->flash('success', 'Mouvement supprimé avec succès!');
        return redirect()->route('deplacements.index');
    }



}
