<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminController extends Controller
{
    //

    public function index():View
    {
        //
        
       // $users = User::all();

         return view('admins.index');
    }



        public function show(User $user):View
        {
            //
            
           // $users = User::all();

             return view('admins.show',[
                       "user" => $user
             ]);
        }


    public function edit(User $user):View
    {


      
    // The action is authorized...
        $roles = Role::all();
         return view('admins.edit',[
           'user' => $user,
           'roles' => $roles
         ]);

       
    }



    public function update(Request $request, User $user)
    {
        //
        
         $user->roles()->sync($request->roles);
         $user->save();
         return redirect()->back()->with('success','Role modifié avec succès!');
      
    
        
    }

     public function destroy(User $user)
    {
        //

          $user->roles()->detach();
          $user->delete();
          return redirect()->back()->with('success','utilisateur supprimé avec succès!');
        
    

       

    }


}
