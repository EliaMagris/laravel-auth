@extends('layouts.app')

@section('content')
    {{-- <h1>Dati Utente</h1>

    {{ $userId }} | {{ $user->name }}
 --}}
 <button class="btn btn-primary my-2"><a class="text-white" href="{{ route('admin.posts.create') }}"><i class="fa-solid fa-plus"></i></a></button>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Data</th>
                <th scope="col">Descrizione</th>
                <th scope="col">See info</th>
                <th scope="col">Edit</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $elem)
                <tr>
                    <td>{{ $elem->name }}</td>
                    <td>{{ $elem->date }}</td>
                    <td>{{ $elem->description }}</td>
                    <td><a href="{{ route('admin.posts.show', $elem->id) }}"><i class="fa-solid fa-eye"></i></a></td>
                    {{-- <td><a href="{{ route('admin.posts.create', $elem->id) }}"><i class="fa-solid fa-pen"></i></a></td> --}}
                    <td><a href="{{ route('admin.posts.edit', $elem->id) }}"><i class="fa-solid fa-pen"></i></a>
                        <form method="POST" action="{{ route('admin.posts.destroy', $elem->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">
                                <i class="fa-solid fa-x"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $posts->links() }}
@endsection
