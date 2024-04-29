<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

use Illuminate\Database\Eloquent\Model;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    
   public function show()
{
    $events = Event::all();
    return view('mostra', ['events' => $events]);
}

    
}
