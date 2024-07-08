@extends('layouts.layout')

@section('title', 'Dashboard')

@section('header')
    <nav>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <x-large-button variant="invert" url="{{ route('register') }}">Sair</x-large-button>
        </form>
    </nav>
@endsection

@section('content')
    Feed
@endsection

@section('footer')
    Footer
@endsection
