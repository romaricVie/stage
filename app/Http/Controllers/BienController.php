<?php

namespace App\Http\Controllers;

use App\Models\Bien;
use App\Models\Categorie;
use App\Models\Scategorie;
use App\Models\Sscategorie;
use App\Models\Entrepot;
use App\Models\Emplacement;
use App\Models\Espace;
use App\Models\Entite;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class BienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        //
        $biens = DB::table('biens')->simplePaginate(10);

         return view('biens.index',[
                             "biens" => $biens
                   ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        //

      /*  $categories = Categorie::all();
        $scategories = Scategorie::all();
        $sscategories = Sscategorie::all();
        $entrepots = Entrepot::all();
        $emplacements = Emplacement::all();
        $espaces = Espace::all();
        $entites = Entite::all();*/


         return view('biens.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    {
        //

          // dd($request->all());
           /* $bien = DB::table('biens')
                                ->count();
                                

            dd($bien);*/
       
       
      
         $validated = $request->validate([
                
                        'name' => ['required'],
                        'price' => ['string', 'nullable'],
                        'day' => ['string', 'nullable'],
                        'month' => ['string', 'nullable'],
                        'year' => ['string', 'nullable'],
                        'image' => ['sometimes', 'image','mimes:jpg,png,jpeg,gif,svg','max:102400'], //100 MO
                        'etat' => ['string', 'required'],
                        'generation' =>['string', 'nullable'],
                        'ram' => ['string', 'nullable'],
                        'disque_dur' =>['string', 'nullable'],
                        'processeur' =>['string', 'nullable'],
                        'couleur' =>['string', 'nullable'],
                        'marque' =>['string', 'nullable'],
                        'longueur' =>['string', 'nullable'],
                        'largeur' =>['string', 'nullable'],
                        'hauteur' =>['string', 'nullable'],
                        'nbre_battant' =>['string', 'nullable'],
                        'immatriculation' =>['string', 'nullable'],
                        'puissance' =>['string', 'nullable'],
                        'matiere' =>['string', 'nullable'],
                        'poids' =>['string', 'nullable'],
                        'autres' =>['string', 'nullable'],
                        'categorie_id' =>['string', 'required'],
                        'scategorie_id' =>['string', 'nullable'],
                        'sscategorie_id' =>['string', 'nullable'],
                        'entrepot_id' =>['string', 'required'],
                        'emplacement_id' =>['string', 'nullable'],
                        'espace_id' =>['string', 'nullable'],
                        'entite_id' =>['string', 'nullable'],

                    ]);

         // dd($request->all());
 
                  if($validated){

                    $bien = Bien::create([

                            "name" => $validated["name"],
                            "price" => $validated["price"],
                            "day" => $validated["day"],
                            "month" => $validated["month"],
                            "year" => $validated["year"],
                            "image" => $this->storeImage(),
                            "etat" => $validated["etat"],
                            "disponibilite" => "libre",   //$validated["disponibilite"],
                            "generation" => $validated["generation"],
                            "ram" => $validated["ram"],
                            "disque_dur" => $validated["disque_dur"],
                            "etiquette" => $this->etiquette(),
                            "processeur" => $validated["processeur"],
                            "couleur" => $validated["couleur"],
                            "marque" => $validated["marque"],
                            "longueur" => $validated["longueur"],
                            "largeur" => $validated["largeur"],
                            "hauteur" => $validated["hauteur"],
                            "nbre_battant" => $validated["nbre_battant"],
                            "immatriculation" => $validated["immatriculation"],
                            "puissance" => $validated["puissance"],
                            "matiere" => $validated["matiere"],
                            "poids" => $validated["poids"],
                            "autres" => $validated["autres"],
                            "categorie_id" => $validated["categorie_id"],
                            "scategorie_id" => $validated["scategorie_id"],
                            "sscategorie_id" => $validated["sscategorie_id"],
                            "entrepot_id" => $validated["entrepot_id"],
                            "emplacement_id" => $validated["emplacement_id"],
                            "espace_id" => $validated["espace_id"],
                            "entite_id" => $validated["entite_id"],

                     ]);

                  }


          session()->flash('success', 'Bien enregistré avec succès!');
          return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Bien $bien):View
    {
        //

        return view('biens.show',[
                   
                    "bien" => $bien,

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bien $bien):View
    {
        //
        
        $categories = Categorie::all();
        $scategories = Scategorie::all();
        $sscategories = Sscategorie::all();
        $entrepots = Entrepot::all();
        $emplacements = Emplacement::all();
        $espaces = Espace::all();
        $entites = Entite::all();


         return view('biens.edit',
                    [

                       "bien" => $bien,
                       "categories" => $categories,
                       "scategories" =>$scategories,
                       "sscategories" =>$sscategories,
                       "entrepots" =>$entrepots,
                       "emplacements" =>$emplacements,
                       "espaces" => $espaces,
                       "entites" => $entites,

                 ]);


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bien $bien)
    {
        //
   



        $validated = $request->validate([
                
                        'name' => 'required',
                        'price' => ['string', 'nullable'],
                        'day' => ['string', 'nullable'],
                        'month' => ['string', 'nullable'],
                        'year' => ['string', 'nullable'],
                        'image' => ['sometimes', 'image','mimes:jpg,png,jpeg,gif,svg','max:102400'], //100 MO
                        'etat' => ['string', 'required'],
                        'disponibilite' =>['string', 'required'],
                        'generation' =>['string', 'nullable'],
                        'ram' => ['string', 'nullable'],
                        'disque_dur' =>['string', 'nullable'],
                        'processeur' =>['string', 'nullable'],
                        'couleur' =>['string', 'nullable'],
                        'marque' =>['string', 'nullable'],
                        'longueur' =>['string', 'nullable'],
                        'largeur' =>['string', 'nullable'],
                        'hauteur' =>['string', 'nullable'],
                        'nbre_battant' =>['string', 'nullable'],
                        'immatriculation' =>['string', 'nullable'],
                        'puissance' =>['string', 'nullable'],
                        'matiere' =>['string', 'nullable'],
                        'poids' =>['string', 'nullable'],
                        'autres' =>['string', 'nullable'],
                        'categorie_id' =>['string', 'required'],
                        'scategorie_id' =>['string', 'nullable'],
                        'sscategorie_id' =>['string', 'nullable'],
                        'entrepot_id' =>['string', 'required'],
                        'emplacement_id' =>['string', 'nullable'],
                        'espace_id' =>['string', 'nullable'],
                        'entite_id' =>['string', 'nullable'],

                    ]);

         // dd($request->all());
 
                  if($validated){

                    $bien->update([

                            "name" => $validated["name"],
                            "price" => $validated["price"],
                            "day" => $validated["day"],
                            "month" => $validated["month"],
                            "year" => $validated["year"],
                            "etat" => $validated["etat"],
                            "disponibilite" => $validated["disponibilite"],
                            "generation" => $validated["generation"],
                            "ram" => $validated["ram"],
                            "disque_dur" => $validated["disque_dur"],
                            "processeur" => $validated["processeur"],
                            "couleur" => $validated["couleur"],
                            "marque" => $validated["marque"],
                            "longueur" => $validated["longueur"],
                            "largeur" => $validated["largeur"],
                            "hauteur" => $validated["hauteur"],
                            "nbre_battant" => $validated["nbre_battant"],
                            "immatriculation" => $validated["immatriculation"],
                            "puissance" => $validated["puissance"],
                            "matiere" => $validated["matiere"],
                            "poids" => $validated["poids"],
                            "autres" => $validated["autres"],
                            "categorie_id" => $validated["categorie_id"],
                            "scategorie_id" => $validated["scategorie_id"],
                            "sscategorie_id" => $validated["sscategorie_id"],
                            "entrepot_id" => $validated["entrepot_id"],
                            "emplacement_id" => $validated["emplacement_id"],
                            "espace_id" => $validated["espace_id"],
                            "entite_id" => $validated["entite_id"],

                     ]);

                  }

            return redirect()->route('biens.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bien $bien)
    {
        //

        $bien->delete();
        return redirect()->route('biens.index');
    }

    private function storeImage()
    {
          if(request('image'))
          {  
              return request()->file('image')->store('biens','public');
          }

          return null;
       
    }


    private function etiquette():string
    {
          //check user email
       
        $bien = DB::table('biens')->count();

        if(request('categorie_id') ==="1"){
            return "Info-".$bien;
        }

        
        if(request('categorie_id') ==="2"){
            return "Mobil-".$bien;
        }

        
        if(request('categorie_id') ==="3"){
            return "Electro-".$bien;
        }


        if(request('categorie_id') ==="4"){
            return "Engins-".$bien;
        }

        if(request('categorie_id') ==="5"){
            return "Goodi-".$bien;
        }

        
    }
}
