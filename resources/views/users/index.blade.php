@extends('layouts.app')

@section('title', 'Listagem dos Usuários')

@section('content')
    <h1>Listagem dos Usuários
        <a href="{{route('users.create')}}">+</a>
    </h1>

    <form action="{{ route('users.index')}}" method="GET">
        <input type="text" name="search" placeholder = "Pesquisar">
        <button>Pesquisar</button>
    </form>

    <ul>
        @foreach ($users as $user)
            <li>
                {{ $user->name }} - 
                {{ $user->email }} 
                <a href="{{ route('users.edit', ['id' => $user->id]) }}">Editar</a>
                <a href="{{ route('users.show', ['id' => $user->id]) }}">Detalhes</a>
            </li>
        @endforeach
    </ul>    
@endsection