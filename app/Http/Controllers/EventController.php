<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Participant;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
class EventController extends Controller
{

    //Funzione per creare e salvare un nuovo evento
    public function store(Request $request)
{
    if($request->hasFile("image"))
    {
      $file=$request->file("image");
      $imageName=time().'_'.$file->getClientOriginalName();
      $file->move(public_path('assets/Immagini'),$imageName);

      $event =new Event([
        'user_id' => Auth::id(),
        'title' => $request->title,
        'image_name' => "none",
        'image' =>$imageName,
        'description'=>$request->description,
        'city'=>$request->city,
        'address'=>$request->address,
        'location'=>$request->location,
        'date'=>$request->date,

      ]);
      $event->save();
      return redirect()->back()->with('success', 'Evento salvato correttamente!');
    }
}

//Funzione per eliminare l'evento
    public function destroy($id)
{
    $event = Event::findOrFail($id);

    $event->delete();

    return redirect()->back()->with('success', 'Evento eliminato con successo');
}

//Funzione per modificare un evento già esistente
public function modify($id)
{
    $evento = Event::findOrFail($id);
    return view('modifica', compact('evento'));
}

//Funzione update per salvare le modifiche apportate all'evento
public function update(Request $request, Event $event)
{
 $event->update([
  'user_id' => Auth::id(),
        'title' => $request->title,
        'image_name' => "none",
        'image' =>"none",
        'description'=>$request->description,
        'city'=>$request->city,
        'address'=>$request->address,
        'location'=>$request->location,
        'date'=>$request->date,

 ]);
}

//Funzione per ricercare un evento anche tramite inserimento di dati parziali
public function search(Request $request)
{
  $title = $request->input('title');
  $city = $request->input('city');
  $address = $request->input('address');
  $location = $request->input('location');
  $date = $request->input('date');

  $query = Event::query();

  if($title)
  {
    $query->where('title', 'like', '%'. $title . '%');
  }

  if ($city) {
    $query->where('city', 'like', '%' . $city . '%');
}

if ($address) {
    $query->where('address', 'like', '%' . $address . '%');
}

if ($location) {
    $query->where('location', 'like', '%' . $location . '%');
}

if ($date) {
    $query->whereDate('date', $date);
}

$events = $query->get();

return view('results', compact('events'));
}

// Funzione per ricercare un evento solo tramite il titolo
public function searchByTitle(Request $request)
{
    $title = $request->input('title');

    $events = Event::query();

    if ($title) {
        $events->where('title', 'like', '%' . $title . '%');
    }

    $events = $events->get();

    return view('results', compact('events'));
}

//Funzione che mostra sia tutti gli eventi che i più popolari
public function most()
{
    $events = Event::latest()
                   ->where('created_at', '>=', now()->subWeek()) // Selezione degli eventi creati meno di una settimana fa
                   ->get();
    $mostPopular = Event::withCount('users')
                        ->whereHas('users')
                        ->having('users_count', '>', 5)
                        ->get();

    return view('welcome', ['mostPopular' => $mostPopular], ['events' => $events]);
}

//Funzione che mostra a quali eventi partecipi

public function showParticipatedEvents()
{
    if (Auth::check()) {
        $user = Auth::user();
        $eventsParticipated = $user->events()->get();
        return view('participated-events', ['eventsParticipated' => $eventsParticipated]);
    }
}
//Funzione che mostra solo gli eventi che devono ancora svolgersi ai quali posso iscrivermi
public function showAvailableEvents()
{
    $eventiDisponibili = Event::where('date', '>', now())->get();
    return view('eventsparticipants', compact('eventiDisponibili'));
}

//Funzione che mostra le informazioni relative all'evento
public function info($id)
{
    $event = Event::findOrFail($id);

    return view('showinfo', ['event' => $event]);
}

}







