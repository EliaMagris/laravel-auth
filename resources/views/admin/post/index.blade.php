@extends('layouts.app')

@section('content')
    <h1>Dati Utente</h1>

    {{ $userId }} | {{ $user->name }}


@endsection