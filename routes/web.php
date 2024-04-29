<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController, App\Http\Controllers\HomeController, App\Http\Controllers\ParticipationController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleVisualizzazione degli eventi dell'utente: Modifica il metodo show() del controller per recuperare solo gli eventi dell'utente corrente anziché tutti gli eventi. Puoi fare ciò utilizzando la relazione tra il modello User e il modello Event e filtrando gli eventi per l'ID dell'utente corrente.ware group. Make something great!
|
*/

//Route che restituisce la vista welcome
Route::get('/', function () {
  return view('welcome');
});

//Route per l'autenticazione
Auth::routes();

//Route che permette di andare alla home (area riservata utente)
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/gate', [\App\Http\Controllers\AuthorizationController::class, 'index'])->name('gate.index');


//Route::get('/', [EventController::class, 'show']);

//Route che permette di salvare il nuovo evento
Route::post('/store',[EventController::class,'store']);

//Route che mi mostra gli eventi creati dall'utente loggato
Route::get('/show', [HomeController::class, 'show']);

//Route che permette di eliminare un evento creato
Route::delete('/events/{id}', [EventController::class, 'destroy'])->name('events.destroy');

//Route che permette di modificare un evento già creato
Route::get('/events/{id}/modify', [EventController::class,'modify'])->name('events.modify');

//Route per salvare le modifiche apportate
Route::put('/events/{event}/update',[EventController::class, 'update'])->name('events.update');

//Route per eseguire la ricerca di eventi
Route::get('/search', [EventController::class,'search'])->name('events.search');

//Route per eseguire la ricerca dal titolo
Route::get('/search1', [EventController::class,'searchByTitle'])->name('events.searchByTitle');

//Route per gestire le partecipazione all'evento
Route::get('/participate/{event}', '\App\Http\Controllers\ParticipantController@participate')->name('participate');

//Route che mostra sia gli eventi aggiunti di recente che i più popolari
Route::get('/', [EventController::class,'most'])->name('most-popular-events');

//Route che mostra tutti gli eventi ai quali l'uttente loggato partecipa
Route::get('/participated-events', [EventController::class, 'showParticipatedEvents'])->name('participated-events');

//Route che permette di vedere tutti gli eventi ai quali l'utente può partecipare
Route::get('/eventi-disponibili',[EventController::class,'showAvailableEvents']);
