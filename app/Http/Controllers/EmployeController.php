<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use Illuminate\Http\Request;
use Illuminate\View\View;
//use App\Models\Bien;
use Illuminate\Http\RedirectResponse;

class EmployeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        //
         $employes = Employe::all();
         
         return view('employes.index',[
              'employes'=> $employes
         ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        //

        return view('employes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    {
        //
        
         $validated = $request->validate([
                
                        'name' => 'required',
                        'firstname' => 'required',
                        'email' => ['required', 'string', 'email', 'max:255'],
                        'fonction' => 'required',
                        'contact' => 'required',
                    ]);
 
                  if($validated){

                    $employe = Employe::create([

                            "name" => $validated["name"],
                            "firstname" => $validated["firstname"],
                            "email" => $validated["email"],
                            "fonction" => $validated["fonction"],
                            "contact" => $validated["contact"],
                     ]);

                  }


 
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

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employe $employe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employe $employe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employe $employe)
    {
        //
    }
}
