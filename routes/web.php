<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SarlsController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\SarlsAUController;
use App\Http\Controllers\CessionController;
use App\Http\Controllers\ModificationsController;
use App\Http\Controllers\DissolutionController;
use App\Http\Controllers\LiquidationController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ConstitutionSARL', function () {
    return view('ConstitutionSARL');
});
Route::get('/ConstitutionSARLAU', function () {
    return view('ConstitutionSARLAU');
});
Route::get('/Cession', function () {
    return view('Cession');
});
Route::get('/Modification', function () {
    return view('Modification');
});
Route::get('/Dissolution', function () {
    return view('Dissolution');
});
Route::get('/Liquidation', function () {
    return view('Liquidation');
});
Route::get('/AjoutGerant', function () {
    return view('AjoutGerant');
});
Route::get('/Transfert', function () {
    return view('Transfert');
});
Route::get('/ModificationDuCapital', function () {
    return view('ModificationDuCapital');
});
Route::get('/DernieresAnnonces', function () {
    return view('DernieresAnnonces');
});
Route::get('/ModelesAnnonces', function () {
    return view('ModelesAnnonces');
});

Route::get('/ModePaiement', function () {
    return view('ModePaiement');
});
Route::get('/connexion', function () {
    return view('connexion');
});
//Route::get('/connexion','Conne{xionController@formulaire');
//Route::post('/traitement','ConnexionController@traitement');


Route::get('/ApresConnexion', function () {
    return view('ApresConnexion');
    //Hna normalemet khasni nraja3 view li dayra fiha walo
});
Route::get('/NouveauAnnonceLegale', function () {
    return view('NouveauAnnonceLegale');
});



Route::get('/GestionAnnonceLegale', function () {
    return view('GestionAnnonceLegale');
});
Route::get('/ListePublication', function () {
    return view('ListePublication');
});
Route::get('/NouvellePublicite', function () {
    return view('NouvellePublicite');
});
Route::get('/GestionPublicite', function () {
    return view('GestionPublicite');
});
Route::get('/deconnexion', function () {
    return view('welcome');
});
Route::get('/NouveauRapport', function () {
    return view('NouveauRapport');
});
Route::get('/ListeRapport', function () {
    return view('ListeRapport');
});

Route::post('/SARLForm', [SarlsController::class, 'storeFormData'])->name('store.form.data');
Route::post('/SARLAUForm', [SarlsAUController::class, 'storeFormSARLSAUData'])->name('store.from.dataAU');
//Route::get('/Mailview',[MailController::class,'sendMail']);

Route::post('/CessionForm', [CessionController::class, 'storeFormCessionData'])->name('store.CessionForm.data');
Route::post('/ModificationForm', [ModificationsController::class, 'storeModificationsData'])->name('store.ModificationsForm.data');
Route::post('/DissolutionForm',[DissolutionController::class,'storeDissolutionData'])->name('store.DissolutionForm.data');
Route::post('LiquidationForm',[LiquidationController::class,'storeLiquidationData'])->name('store.LiquidationForm.data');