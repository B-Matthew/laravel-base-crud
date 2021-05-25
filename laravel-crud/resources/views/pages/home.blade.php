@extends('layouts.main-layout')
@section('content')
  <main>
    <div class="container">
      <h1>Ciao {{$name}}</h1>
      <ul>
        <li><h2>Lista ospiti:</h2></li>
        @foreach ($guests as $guest)
          <li><a href="{{route('guest', $guest-> id)}}">{{$guest-> name}} {{$guest-> lastname}}</a></li>
        @endforeach
      </ul>
    </div>
  </main>
@endsection
