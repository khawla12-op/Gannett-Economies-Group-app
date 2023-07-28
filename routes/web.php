<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SarlsController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\SarlsAUController;
use App\Http\Controllers\CessionController;
use App\Http\Controllers\ModificationsController;
use App\Http\Controllers\DissolutionController;
use App\Http\Controllers\LiquidationController;
use App\Http\Controllers\AjoutController;
use App\Http\Controllers\CapitalSocialController;


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
Route::get('/premiereannonce',function(){
    return view('premiereannonce');
});
Route::get('/deuxiemeannonce',function(){
    return view('deuxiemeannonce');
});
Route::get('/3annonce',function(){
    return view('3annonce');
});
Route::get('/4annonce',function(){
    return view('4annonce');
});
Route::get('/5annonce',function(){
    return view('5annonce');
});
Route::get('/6annonce',function(){
    return view('6annonce');
});
Route::get('/7annonce',function(){
    return view('7annonce');
});
Route::get('/8annonce',function(){
    return view('8annonce');
});
Route::get('/9annonce',function(){
    return view('9annonce');
});
Route::get('/10annonce',function(){
    return view('10annonce');
});
Route::get('/11annonce',function(){
    return view('11annonce');
});
Route::get('/12annonce',function(){
    return view('12annonce');
});
Route::get('/13annonce',function(){
    return view('13annonce');
});
Route::get('/14annonce',function(){
    return view('14annonce');
});
Route::get('/15annonce',function(){
    return view('15annonce');
});
Route::get('/16annonce',function(){
    return view('16annonce');
});
Route::get('/17annonce',function(){
    return view('17annonce');
});
Route::get('/18annonce',function(){
    return view('18annonce');
});
Route::get('/19annonce',function(){
    return view('19annonce');
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
Route::post('/LiquidationForm',[LiquidationController::class,'storeLiquidationData'])->name('store.LiquidationForm.data');
Route::post('/AjoutForm',[AjoutController::class,'storeAjoutChangementData'])->name('store.AjoutChangementForm.data');
Route::post('/CapitalSocialForm',[CapitalSocialController::class,'storeCapitalSocialData'])->name('store.CapitalSocialForm.data');