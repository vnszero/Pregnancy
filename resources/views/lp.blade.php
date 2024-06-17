@extends('layouts.layout')

@section('title', 'Landing Page')

@section('header')
    <nav>
        <x-large-button variant="standard" url="{{ route('login') }}">Login</x-large-button>
        <x-large-button variant="invert" url="{{ route('register') }}">Registrar</x-large-button>
    </nav>
@endsection

@section('content')
    Feed
@endsection

@section('footer')
    Footer
@endsection
