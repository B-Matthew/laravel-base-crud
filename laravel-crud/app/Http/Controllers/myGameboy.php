<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ospite;

class myGameboy extends Controller
{

  public function home() {

    $name = 'Mats';
    $guests = Ospite::all();
    return view('pages.home',compact('name','guests'));
  }

  public function guest ($id) {

    $guest = Ospite::findOrFail($id);
    return view('pages.guest',compact('guest'));
  }

  public function create() {

    return view('pages.create');
  }

  public function store(Request $request) {
    $validate = $request -> validate ([
      'name' => 'required|max:50',
      'lastname' => 'required|max:50',
      'date_of_birth' => 'required|date',
      'document_type' => 'required|max:20',
      'document_number' => 'required'
    ]);
    $guest = Ospite::create($validate);
    return redirect() -> route('guest', $guest -> id);
  }
}
