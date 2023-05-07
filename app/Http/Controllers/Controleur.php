<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controleur extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function portail()
    {
        return view('portail');
    }
    public function encheresTerminees()
    {
        return view('encheresTerminees');
    }
    public function encheresEncours()
    {
        return view('encheresEncours');
    }
    public function inscription()
    {
        return view('inscription');
    }
    public function reponsesFormulaire(Request $request)
    {
        return view('inscription', ['data' => $request]);
    }
}
