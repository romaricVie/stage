<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use App\Models\Entite;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Bien;
use Illuminate\Http\RedirectResponse;
use Barryvdh\DomPDF\Facade\Pdf;

class EmployeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        //
      //   $employes = Employe::all();
         
         return view('employes.index');
    }


    /**
     * Display a listing of all employe in PDF.
     */
    public function createPDF()
    {
        //
     
        //Data    
        $data = Employe::all();
        $pdf = Pdf::loadView('employes.pdf',["data"=> $data]);
        
       return $pdf->download('liste des employes'.time().rand('1', '9999').'.pdf');
         
    }



     /**
     * Display a listing of all biens belong to employe  in PDF.
     */
    public function BiensPDF(Employe $employe)
    {
        //
     
        //Data
      //  $name = "ROMARIC";    
       // $employe = Employe::all();
        $pdf = Pdf::loadView('employes.biens_pdf',["employe"=> $employe]);
        
       return $pdf->download('liste des biens affectés a_'.$employe->name.time().rand('1', '9999').'.pdf');
         
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        //

        $entites = Entite::all();
        return view('employes.create',[
                     "entites" => $entites,

        ]);
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
                        'firstname' => 'required',
                        'email' => ['required', 'string', 'email', 'max:255'],
                        'fonction' => 'required',
                        'contact' => 'required',
                        'flotte' => ['string', 'nullable'],
                        'fixe' => ['string', 'nullable'],
                        'statut' =>'required',
                        'contrat' =>'required',
                        'sexe' => 'required',
                        'autres' =>['string', 'nullable'],
                        'entite_id' =>'required',

                    ]);
 
                  if($validated){

                    $employe = Employe::create([

                            "name" => $validated["name"],
                            "firstname" => $validated["firstname"],
                            "email" => $validated["email"],
                            "fonction" => $validated["fonction"],
                            "contact" => $validated["contact"],
                            "flotte" => $validated["flotte"],
                            "fixe" => $validated["fixe"],
                            "statut" => $validated["statut"],
                            "contrat" => $validated["contrat"],
                            "autres" => $validated["autres"],
                            "sexe" => $validated["sexe"],
                            "entite_id" => $validated["entite_id"],


                     ]);

                  }


          session()->flash('success', 'Employé enregistré avec succès!');
          return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Employe $employe):View
    {
      
         
         return view('employes.show',[
                     'employe' => $employe
         ]);
    }



    public function infos(Employe $employe):View
    {
      
         
         return view('employes.infos',[
                     'employe' => $employe
         ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employe $employe):View
    {
        //

        $entites = Entite::all();
        return view('employes.edit',[
                     'employe' => $employe,
                     'entites' => $entites
         ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employe $employe):RedirectResponse
    {
        //
          //dd($request->all());
          $validated = $request->validate([
                
                        'name' => 'required',
                        'firstname' => 'required',
                        'email' => ['required', 'string', 'email', 'max:255'],
                        'fonction' => 'required',
                        'contact' => 'required',
                        'flotte' => ['string', 'nullable'],
                        'fixe' => ['string', 'nullable'],
                        'statut' =>'required',
                        'contrat' =>'required',
                        'autres' =>['string', 'nullable'],
                        'entite_id' =>'required',

                    ]);
 
             if($validated){
                $employe->update([
                                "name" => $validated["name"],
                                "firstname" => $validated["firstname"],
                                "email" => $validated["email"],
                                "fonction" => $validated["fonction"],
                                "contact" => $validated["contact"],
                                "flotte" => $validated["flotte"],
                                "fixe" => $validated["fixe"],
                                "statut" => $validated["statut"],
                                "contrat" => $validated["contrat"],
                                "autres" => $validated["autres"],
                                "entite_id" => $validated["entite_id"],
                         ]);

                  }
          session()->flash('success', 'Employé modifié avec succès!');
          return redirect()->route('employes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employe $employe)
    {
        //
         $employe->delete();
         session()->flash('success', 'Employé supprimé avec succès!');
         return redirect()->route('employes.index');
    }
}
