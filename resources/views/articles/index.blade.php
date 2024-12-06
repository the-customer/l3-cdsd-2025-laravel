@extends('layouts.base')

@section('content')
<h1>Liste des articles:</h1>
<hr/>
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Image</th>
        <th scope="col">Titre</th>
        <th scope="col">Description</th>
        <th scope="col">actions</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($articles as $article)
            <tr>
                <th>{{ $article['id'] }}</th>
                <td>
                    <img class="rounded-circle" src="{{ $article['image'] }}" alt="Article" width="50" height="50">
                </td>
                <td>{{ ucfirst($article['titre']) }}</td>
                <td>{{ $article['contenu'] }}</td>
                <td>...</td>
            </tr>
        @endforeach


    </tbody>
  </table>
@endsection

