@extends('master')
@section('title', 'Inscription')
@section('content')
<!-- template Inscription -->
<link rel="stylesheet" href="assets/css/connexion.css">
<section class="inscription">
    @isset($data)
    <strong>Nom et prénom: </strong>{{$data->prenom}} {{$data->nom}}<br>
    <strong>Adresse: </strong>{{$data->adresse}} {{$data->codePostal}} {{$data->ville}} {{$data->Pays}}<br>
    <strong>Courriel : </strong>{{$data->courriel}}<br>
    <strong>Téléphone : </strong>{{$data->telephone}}<br>
    <strong>Mot de passe : </strong>{{$data->mdp}}<br>
    @else
    <form method="POST">
        @csrf
        <input name="nom" placeholder="Votre nom">
        <input name="prenom" value="" placeholder="Votre prenom">
        <input name="adresse" value="" placeholder="Votre adresse">
        <input name="codePostal" value="" placeholder="Votre code postal">
        <input name="ville" value="" placeholder="Votre ville">
        <input name="pays" value="" placeholder="Votre pays">
        <input name="telephone" value="" placeholder="Votre telephone">
        <input name="courriel" value="" placeholder="Votre adresse mail">
        <input type="password" name="mdp" value="" placeholder="Votre mot de passe">
        <input type="submit" value="S'inscrire">

    </form>
    @endisset
</section>
<!-- fin template Inscription -->

@endsection