<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Event;
use App\Models\Participant;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
class ParticipantController extends Controller
{
  public function participate(Event $event)
  {
      if (!Auth::check()) {
          return redirect()->route('login')->with('error', 'Per partecipare all\'evento devi effettuare il login.');
      }

      $Participant = new Participant();
      $Participant->user_id = Auth::id();
      $Participant->event_id = $event->id;
      $Participant->registration_date = now();
      $Participant->save();

      return redirect()->back();

    }
    //Funzione per disiscirversi dal'evento
    public function unsubscribeUserFromEvent($eventId)
{
    $userId = Auth::id(); // Ottieni l'ID dell'utente attualmente autenticato

    $user = User::findOrFail($userId); // Trova l'utente per l'ID trovato
    $event = Event::findOrFail($eventId); // Trova l'evento per l'ID specificato

    $user->events()->detach($eventId); // Rimuovi l'iscrizione dell'utente dall'evento

    return redirect()->back()->with('success', 'User unsubscribed from the event successfully.');
}

}
