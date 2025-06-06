<?php abort_if(!auth()->user()->hasRole('administrateur'), 403); ?>
@extends('layouts.barreNav')

@section('content')
<div class="lieux">
    <h2>Ajouter un nouveau lieu</h2>

    <form action="{{ route('places.store') }}" method="POST">
        @csrf
        <label for="name">Nom :</label>
        <input type="text" id="name" name="name" required>

        <label for="type">Type :</label>
        <input type="text" id="type" name="type" required>

        <label for="description">Description :</label>
        <textarea id="description" name="description"></textarea>

        <label for="adresse">Adresse :</label>
        <input type="text" id="adresse" name="adresse">

        <label for="affluence">Affluence :</label>
        <input type="number" id="affluence" name="affluence" value="0">

        <label for="horaire_ouverture">Heure d'ouverture :</label>
        <input type="time" id="horaire_ouverture" name="horaire_ouverture">

        <label for="horaire_fermeture">Heure de fermeture :</label>
        <input type="time" id="horaire_fermeture" name="horaire_fermeture">

        <button type="submit">Ajouter</button>
    </form>
</div>
@endsection