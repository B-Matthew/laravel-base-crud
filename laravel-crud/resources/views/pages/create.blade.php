@extends('layouts.main-layout')
@section('content')
<main>
  <div class="container">
    <form class="" action="{{route('store')}}" method="POST">
      @csrf
      @method ('POST')
      <div class="box">
        <label for="name">Nome: </label>
        <input type="text" name="name" value="">
      </div>
      <div class="box">
        <label for="lastname">Cognome: </label>
        <input type="text" name="lastname" value="">
      </div>
      <div class="box">
        <label for="date">Data di nascita: </label>
        <input type="date" name="date_of_birth" value="">
      </div>
      <div class="box">
        <label for="document_type">Documento: </label>
        <input type="text" name="document_type" value="">
      </div>
      <div class="box">
        <label for="name">Numero documento: </label>
        <input type="document_number" name="document_number" value="">
      </div>
      <div class="box">
        <button id="btn_submit" type="submit" name="button">INSERISCI</button>
      </div>
    </form>
  </div>
</main>

@endsection
