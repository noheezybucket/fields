@extends('base')

@section('title', 'Créer un terrain')

@section('content')
    <div class="space-y-5 pt-5">

        <div class="flex justify-between">

            <h1 class="font-bold text-3xl">Création d'un terrain</h1>
            <a href="{{ route('home') }}" class="bg-orange-600 flex items-center px-4 rounded-md text-white">
                <span>
                    Retour
                </span>
            </a>
        </div>
        <form action="{{ route('process-create') }}" method="POST">
            @csrf
            @if (session('status'))
                <div class="success">{{ session('status') }}</div>
            @endif
            @foreach ($errors->all() as $error)
                <div class="error">{{ $error }}</div>
            @endforeach
            <input id="longueur" type="number" name="longueur" placeholder="Longueur">
            <input id="largeur" type="number" name="largeur" placeholder="Largeur">
            <select type="text" name="type_de_papier">
                <option value="bail">Bail</option>
                <option value="titre foncier">Titre Foncier</option>

            </select>
            <button type="submit" class="btn-primary">Enregistrer</button>
        </form>
    </div>
@endsection
