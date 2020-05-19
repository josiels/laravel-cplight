@extends('admin.layouts.app')

@section('title', 'Cadastrar novo usuário')

@section('content')
    <h1>Cadastrar novo usuário</h1>

    <form action="{{ route('users.store') }}" method="POST">
        <input type="text" name="nome" placeholder="Nome:">
        <input type="text" name="email" placeholder="Email:">
        <button type="submit">Cadastrar</button>
    </form>

@endsection
