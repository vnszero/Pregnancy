@extends('layouts.layout')

@section('title', 'Landing Page')

@section('header')
    <nav>
        @auth
        <x-large-button variant="standard" url="{{ route('dashboard') }}">Painel</x-large-button>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <x-large-button variant="invert" url="{{ route('register') }}">Sair</x-large-button>
        </form>
        @endauth
        @guest
        <x-large-button variant="standard" url="{{ route('login') }}">Entrar</x-large-button>
        <x-large-button variant="invert" url="{{ route('register') }}">Registrar</x-large-button>    
        @endguest
    </nav>
@endsection

@section('content')
    Feed
@endsection

@section('footer')
    Footer
@endsection
