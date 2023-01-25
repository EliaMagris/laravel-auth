@extends('layouts.app')

@section('content')
    {{-- <h1>Dati Utente</h1>

    {{ $userId }} | {{ $user->name }}
 --}}
 <table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Data</th>
            <th scope="col">Descrizione</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $elem)
            <tr>
            <td>{{$elem->id}}</td>
            <td>{{$elem->name}}</td>
            <td>{{$elem->date}}</td>
            <td>{{$elem->description}}</td>
        </tr>
        @endforeach
        
        
    </tbody>
</table>
{{$posts->links()}}
@endsection