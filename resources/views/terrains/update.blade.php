@extends('base')

@section('title', 'Créer un terrain')

@section('content')
    <div class="space-y-5 pt-5">

        <div class="flex justify-between">

            <h1 class="font-bold text-3xl">Modification d'un terrain</h1>
            <a href="{{ route('home') }}" class="bg-primary flex items-center px-4 rounded-md text-white">
                <span>
                    Retour
                </span>
            </a>
        </div>
        <form action="{{ route('process-update', ['id' => $terrain->id]) }}" method="POST">
            @csrf
            @method('PUT')
            @if (session('status'))
                <div class="success">{{ session('status') }}</div>
            @endif
            @foreach ($errors->all() as $error)
                <div class="error">{{ $error }}</div>
            @endforeach
            <input id="longueur" type="number" name="longueur" placeholder="{{ $terrain->longueur }}">
            <input id="largeur" type="number" name="largeur" placeholder="{{ $terrain->largeur }}">
            <select type="text" name="type_de_papier" value="{{ $terrain->type_de_papier }}">
                <option value="bail">Bail</option>
                <option value="titre foncier">Titre Foncier</option>

            </select>
            <button type="submit" class="btn-primary">Enregistrer</button>
        </form>
    </div>
@endsection
