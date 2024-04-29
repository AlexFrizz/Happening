@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Search Results</h1>

        @if ($events->isEmpty())
            <p>No events found.</p>
        @else
            <div class="row">
                @foreach ($events as $event)
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                        <div class="card-body">
                        
                        <img src="assets/immagini.$event->image">
                                <h5 class="card-title">{{ $event->title }}</h5>
                                <p class="card-text">{{ $event->description }}</p>
                                <p class="card-text"><strong>City:</strong> {{ $event->city }}</p>
                                <p class="card-text"><strong>Address:</strong> {{ $event->address }}</p>
                                <p class="card-text"><strong>Location:</strong> {{ $event->location }}</p>
                                <p class="card-text"><strong>Date:</strong> {{ $event->date }}</p>          
                                              </div>
                                              
                                              
                        </div>
                        
                    </div>
                    
                @endforeach
            </div>
        @endif
    </div>
@endsection
