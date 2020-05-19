@extends('admin.layouts.app')

@section('title', 'Gestão de usuários')

@section('content')

    <h1>Exibindo os usuários</h1>

    <a href="{{ route('users.create') }}">Cadastrar</a>

    @include('admin.includes.alerts', ['contents' => 'Alerta dos nomes dos usuários'])

    <hr />

    {{ $teste}}

    @if($teste === 123)
        É igual a {{ $teste }}
    
    @elseif($teste == 123)
        É igual a {{ $teste }}
    
    @else
        kkkk
    @endif

    @unless ($teste === 123)
        verifica se não é
    @else

    @endunless

    @isset($tsatsa)
        verifica se existe a variável
    @endisset

    @empty($record)
        verifica se está vazio
    @endempty

    @auth
        Verifica se o usuário está autenticado
    @else
        se não
    @endauth

    @guest
        só vai entrar se não estiver autenticado
    @endguest

    @switch($teste)
        @case(1)
            Igual a 1
            @break
        @case(2)
            Igual a 2
            @break
        @default
            Default
    @endswitch

    <!-- Estrutura de repetição usando FOREACH-->
    @if (isset($usuarios))
        @foreach ($usuarios as $usuario)
            <p>{{ $usuario }}</p>
        @endforeach
    @endif
    <hr />
    <!-- Estrutura de repetição usando FORELSE-->
    @forelse ($usuarios as $usuario)
        <p>{{ $usuario }}</p>
    @empty
        <p>Nenhum usuário encontrado</p>
    @endforelse

@endsection
