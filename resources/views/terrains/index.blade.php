@extends('base')
@section('title', 'Accueil')

@section('content')
    <div class="space-y-5 pt-5">
        <div class="flex justify-between">

            <h1 class="font-bold text-3xl">Terrains disponibles</h1>
            <a href="{{ route('create-terrain') }}"
                class="border border-orange-600 flex items-center px-4 rounded-md text-orange-500 ">
                <span>
                    Ajouter un terrain
                </span>
            </a>
        </div>
        @if (session('status'))
            <div class="success">{{ session('status') }}</div>
        @endif
        @foreach ($errors->all() as $error)
            <div class="error">{{ $error }}</div>
        @endforeach
        <div class="grid grid-cols-3 gap-10">

            @foreach ($terrains as $terrain)
                <div class="border rounded-md">
                    <div class="relative">
                        <div class="absolute bg-orange-600 top-0 left-0 h-full w-full bg-opacity-40"></div>
                        <img src="{{ asset('assets/default.jpg') }}" alt="">
                    </div>
                    <div class="p-2 space-y-3">

                        <div class="flex items-center gap-2">
                            <span class="bg-orange-600 rounded-full p-1">

                                <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linejoin="round" stroke-width="2"
                                        d="M15 4v3a1 1 0 0 1-1 1h-3m2 10v1a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-7.13a1 1 0 0 1 .24-.65L6.7 8.35A1 1 0 0 1 7.46 8H9m-1 4H4m16-7v10a1 1 0 0 1-1 1h-7a1 1 0 0 1-1-1V7.87a1 1 0 0 1 .24-.65l2.46-2.87a1 1 0 0 1 .76-.35H19a1 1 0 0 1 1 1Z" />
                                </svg>
                            </span>

                            {{ ucfirst($terrain->type_de_papier) }}
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="bg-orange-600 rounded-full p-1">

                                <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M8 4H4m0 0v4m0-4 5 5m7-5h4m0 0v4m0-4-5 5M8 20H4m0 0v-4m0 4 5-5m7 5h4m0 0v-4m0 4-5-5" />
                                </svg>
                            </span>

                            {{ round($terrain->longueur, 2) }}

                        </div>
                        <div class="flex items-center gap-2">
                            <span class="bg-orange-600 rounded-full p-1">

                                <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M5 9h4m0 0V5m0 4L4 4m15 5h-4m0 0V5m0 4 5-5M5 15h4m0 0v4m0-4-5 5m15-5h-4m0 0v4m0-4 5 5" />
                                </svg>
                            </span>

                            {{ round($terrain->largeur, 2) }}
                        </div>
                        <div class="flex gap-2">
                            <a href="{{ route('update-terrain', ['id' => $terrain->id]) }}" class="btn-update">Modifier</a>
                            <a href="{{ route('delete-terrain', ['id' => $terrain->id]) }}" class="btn-delete">Supprimer</a>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>

@endsection
