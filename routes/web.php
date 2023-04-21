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
Route::get('/', function () {
    return view('guest');
});

Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/register', [UserController::class, 'store'])->name('register.store');


Route::get('/login', [UserController::class, 'create'])->name('login.create');
Route::post('/login', [UserController::class, 'login'])->name('login');

/* Auth */

Route::middleware('auth')->group(function () {
                // dashboard
        Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
        Route::post('/logout', [UserController::class, 'logout'])->name('logout');

        /* Categories    */
        Route::get('/categories', [CategorieController::class, 'index'])->name('categories.index');
        Route::get('/categories/create', [CategorieController::class, 'create'])->name('categories.create');
        Route::post('/categories', [CategorieController::class, 'store'])->name('categories.store');
        Route::get('/categories/{categorie}', [CategorieController::class, 'show'])->name('categories.show');

        // Scategorie
        Route::get('/scategories', [ScategorieController::class, 'index'])->name('scategories.index');
        Route::get('/scategories/create', [ScategorieController::class, 'create'])->name('scategories.create'); 
        Route::post('/scategories', [ScategorieController::class, 'store'])->name('scategories.store');
        Route::get('/scategories/{scategorie}', [ScategorieController::class, 'show'])->name('scategories.show'); 

        //Sscategorie
        Route::get('/sscategories', [SscategorieController::class, 'index'])->name('sscategories.index');
        Route::get('/sscategories/create', [SscategorieController::class, 'create'])->name('sscategories.create');
        Route::post('/sscategories', [SscategorieController::class, 'store'])->name('sscategories.store');
        Route::get('/sscategories/{sscategorie}', [SscategorieController::class, 'show'])->name('sscategories.show');

        /* Entrepots  */
        Route::get('/entrepots', [EntrepotController::class, 'index'])->name('entrepots.index');
        Route::get('/entrepots/create', [EntrepotController::class, 'create'])->name('entrepots.create');
        Route::post('/entrepots', [EntrepotController::class, 'store'])->name('entrepots.store');
        Route::get('/entrepots/{entrepot}', [EntrepotController::class, 'show'])->name('entrepots.show');


        //Emplacement
        Route::get('/emplacements', [EmplacementController::class, 'index'])->name('emplacements.index');
        Route::get('/emplacements/create', [EmplacementController::class, 'create'])->name('emplacements.create');
        Route::post('/emplacements', [EmplacementController::class, 'store'])->name('emplacements.store');
        Route::get('/emplacements/{emplacement}', [EmplacementController::class, 'show'])->name('emplacements.show');

        //Espace
        Route::get('/espaces', [EspaceController::class, 'index'])->name('espaces.index');
        Route::get('/espaces/create', [EspaceController::class, 'create'])->name('espaces.create');
        Route::post('/espaces', [EspaceController::class, 'store'])->name('espaces.store');
        Route::get('/espaces/{espace}', [EspaceController::class, 'show'])->name('espaces.show');

        /* Entites */
        Route::get('/entites', [EntiteController::class, 'index'])->name('entites.index');
        Route::get('/entites/create', [EntiteController::class, 'create'])->name('entites.create');
        Route::post('/entites', [EntiteController::class, 'store'])->name('entites.store');
        Route::get('/entites/{entite}', [EntiteController::class, 'show'])->name('entites.show');

        /* Employes */
        Route::get('/employes', [EmployeController::class, 'index'])->name('employes.index');
        Route::get('/employes/create', [EmployeController::class, 'create'])->name('employes.create');
        Route::post('/employes', [EmployeController::class, 'store'])->name('employes.store');
        Route::get('/employes/{employe}', [EmployeController::class, 'show'])->name('employes.show');
        Route::get('/employes/informations/{employe}', [EmployeController::class, 'infos'])->name('employes.infos');
        Route::put('/employes/{employe}', [EmployeController::class, 'update'])->name('employes.update');
        Route::get('/employes/{employe}/edit', [EmployeController::class, 'edit'])->name('employes.edit');


        /* AffectationController */
        Route::get('/affectations', [AffectationController::class, 'index'])->name('affectations.index');
        Route::get('/affectations/create', [AffectationController::class, 'create'])->name('affectations.create');
        Route::post('/affectations', [AffectationController::class, 'store'])->name('affectations.store');
        Route::get('/affectations/{affectation}', [AffectationController::class, 'show'])->name('affectations.show');

        /* Reparations ReparationController */
        Route::get('/reparations', [ReparationController::class, 'index'])->name('reparations.index');
        Route::get('/reparations/create', [ReparationController::class, 'create'])->name('reparations.create');
        Route::post('/reparations', [ReparationController::class, 'store'])->name('reparations.store');
        Route::get('/reparations/{reparation}', [ReparationController::class, 'show'])->name('reparations.show');

        /* Biens */
        Route::get('/biens', [BienController::class, 'index'])->name('biens.index');
        Route::get('/biens/create', [BienController::class, 'create'])->name('biens.create');
        Route::post('/biens', [BienController::class, 'store'])->name('biens.store');
        Route::get('/biens/{bien}', [BienController::class, 'show'])->name('biens.show');

});

