@extends('layouts.main-layout')
@section('content')
 <main>
   <div class="container">
     <h2>{{$guest-> name}} {{$guest-> lastname}}</h2>
     <h3>Data di nascita: {{$guest-> date_of_birth}}</h3>
     <h3>Tipo di documento: {{$guest-> document_type}}</h3>
     <h3>Numero documento: {{$guest-> document_number}}</h3>
   </div>
 </main>
@endsection
