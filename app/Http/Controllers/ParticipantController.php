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

}
