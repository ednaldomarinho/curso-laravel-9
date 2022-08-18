@extends('layouts.app')

@section('title', 'Listagem do Usuario')

@section('content')
    <h1>Listagem do Usuario {{ $user->name }}</h1>
    <ul>    
        <li> Nome: {{ $user->name }}</li>
        <li> E-mail: {{ $user->email }}</li>
    </ul>    

    <form action="{{ route('users.destroy', $user->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Deletar</button>
    </form>
@endsection