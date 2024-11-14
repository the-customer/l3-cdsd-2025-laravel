@extends('layouts.base')



@section('content')
    <h1>Liste des etudiants : {{ $nom }}</h1>
    <ul>
        @foreach ($etudiants as $etu)
            @if ($etu['etat'] == 1)
                <li>
                    <a href="{{ route('etudiants.details',$etu['id']) }}">{{ $etu['prenom'].' '.$etu['nom'] }}</a>
                </li>
            @endif
        @endforeach
    </ul>
    <h2>Liste des fruits</h2>
    <ul>
        @for ($i=0;$i < count($fruits);$i++)
            <li>{{ $fruits[$i] }}</li>
        @endfor
    </ul>
    <div>
    <p>Bla bla bla...</p>
    <hr>
    <h2>Un titre</h2>
    </div>
@endsection
