<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function dashboard():View
    {
        //
        return view('welcome');
    }

    public function create():View
    {
        //
        return view('login.login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function register():View
    {
        //

         return view('register.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    {
        //

       // dd(Request()->all());

          $fields = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'firstname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
             "password" => ['required','string','min:3'],
            
       ]);

        //Create New user

          if($fields){

               $user = User::create([
                     'name' => $fields["name"],
                     'firstname'=> $fields["firstname"],
                     'email' => $fields['email'],
                     'password' => Hash::make($fields['password']),

      ]);
          
        
         return redirect()->route('login.create');

       }
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function login(Request $request):RedirectResponse
    {
        //
       // dd($request->all());
         $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->route('dashboard');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    
    }

    public function logout(Request $request):RedirectResponse
    {
        //
       // dd(Request()->all());
        Auth::logout();
 
        $request->session()->invalidate();
 
        $request->session()->regenerateToken();

         return redirect('/login');
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
