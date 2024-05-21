@extends('base')

@section('title', 'Créer un terrain')

@section('content')
    <div class="space-y-5 pt-5">

        <div class="flex justify-between">

            <h1 class="font-bold text-3xl">Suppression d'un terrain</h1>
            <a href="{{ route('home') }}" class="bg-orange-600 flex items-center px-4 rounded-md text-white">
                <span>
                    Retour
                </span>
            </a>
        </div>
        <form action="{{ route('process-delete', ['id' => $terrain->id]) }}" method="POST">
            @csrf
            @method('DELETE')


            <input id="longueur" type="number" name="longueur" placeholder="Longueur" disabled
                value="{{ $terrain->longueur }}">
            <input id="largeur" type="number" name="largeur" placeholder="Largeur" disabled
                value="{{ $terrain->largeur }}">
            <select type="text" name="type_de_papier" disabled>
                <option value="" selected>{{ $terrain->type_de_papier }}</option>
                <option value="bail">Bail</option>
                <option value="titre foncier">Titre Foncier</option>

            </select>
            <button type="submit" class="btn-primary">Supprimer définitivement</button>
        </form>
    </div>
@endsection
