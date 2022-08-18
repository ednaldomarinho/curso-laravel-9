@extends('layouts.app')

@section('title', 'Editar Usuario')

@section('content')
    <h1>Editar o Usuario {{ $user->name }}</h1>    
    
    @if ($errors->any())
        <ul class="errors">
            @foreach ($errors->all() as $error)
            <li class="error">
                {{ $error }}
            </li>
        @endforeach
        </ul>
    @endif


    <form action="{{ route('users.update', $user->id )}}" method="POST">
        <input type="hidden" name="_method" value="PUT">
        @csrf
        <input type="text" name="name" placeholder = "Nome:" value="{{ $user->name }}">
        <input type="email" name="email" placeholder = "E-Mail:" value="{{ $user->email }}">
        <input type="password" name="password" placeholder = "Senha:">
        <button type="submit">
            Enviar
        </button>
    </form>
@endsection