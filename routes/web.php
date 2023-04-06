<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\BienController;
use App\Http\Controllers\ScategorieController;
use App\Http\Controllers\SscategorieController;
use App\Http\Controllers\EntrepotController;
use App\Http\Controllers\EmplacementController;
use App\Http\Controllers\EspaceController;
use App\Http\Controllers\EntiteController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\ReparationController;
use App\Http\Controllers\AffectationController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/dashboard', function () {
    return view('welcome');
});
*/

/*Route::get('/register', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('welcome');
});*/


/* Guest*/
Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/register', [UserController::class, 'store'])->name('register.store');

Route::get('/', [UserController::class, 'create'])->name('login.create');
Route::post('/login', [UserController::class, 'login'])->name('login');

/* Auth */

Route::middleware('auth')->group(function () {
        
        // dashboard
        Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
        Route::post('/logout', [UserController::class, 'logout'])->name('logout');

        /* Categories    */
        Route::get('/categories', [CategorieController::class, 'index'])->name('categories.index');
        Route::get('/categories/create', [CategorieController::class, 'create'])->name('categories.create');
        Route::post('/categories/store', [CategorieController::class, 'store'])->name('categories.store');
        Route::get('/categories/{categorie}', [CategorieController::class, 'show'])->name('categories.show');

        // Scategorie
        Route::get('/scategories', [ScategorieController::class, 'index'])->name('scategories.index');
        Route::get('/scategories/create', [ScategorieController::class, 'create'])->name('scategories.create'); 

        //Sscategorie
        Route::get('/sscategories', [SscategorieController::class, 'index'])->name('sscategories.index');
        Route::get('/sscategories/create', [SscategorieController::class, 'create'])->name('sscategories.create');

        /* Entrepots  */
        Route::get('/entrepots', [EntrepotController::class, 'index'])->name('entrepots.index');
        Route::get('/entrepots/create', [EntrepotController::class, 'create'])->name('entrepots.create');

        //Emplacement
        Route::get('/emplacements', [EmplacementController::class, 'index'])->name('emplacements.index');
        Route::get('/emplacements/create', [EmplacementController::class, 'create'])->name('emplacements.create');

        //Espace
        Route::get('/espaces', [EspaceController::class, 'index'])->name('espaces.index');
        Route::get('/espaces/create', [EspaceController::class, 'create'])->name('espaces.create');

        /* Entites */
        Route::get('/entites', [EntiteController::class, 'index'])->name('entites.index');
        Route::get('/entites/create', [EntiteController::class, 'create'])->name('entites.create');

        /* Employes */
        Route::get('/employes', [EmployeController::class, 'index'])->name('employes.index');
        Route::get('/employes/create', [EmployeController::class, 'create'])->name('employes.create');
        Route::get('/employes/{employe}', [EmployeController::class, 'show'])->name('employes.show');

        /* Reparations ReparationController */
        Route::get('/reparations', [ReparationController::class, 'index'])->name('reparations.index');
        Route::get('/reparations/show', [ReparationController::class, 'show'])->name('reparations.show');
        Route::get('/reparations/create', [ReparationController::class, 'create'])->name('reparations.create');

        /* AffectationController */
        Route::get('/affectations', [AffectationController::class, 'index'])->name('affectations.index');
        Route::get('/affectations/create', [AffectationController::class, 'create'])->name('affectations.create');

        /* Biens */
        Route::get('/biens', [BienController::class, 'index'])->name('biens.index');
        Route::get('/biens/create', [BienController::class, 'create'])->name('biens.create');
        Route::get('/biens/{bien}', [BienController::class, 'show'])->name('biens.show');

});

