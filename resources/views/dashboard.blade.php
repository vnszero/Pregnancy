@extends('layouts.layout')

@section('title', 'Dashboard')

@section('header')
    <nav>
        <p>Bem-vindo!!</p>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit">Logout</button>
        </form>
    </nav>
@endsection

@section('content')
    Feed
@endsection

@section('footer')
    Footer
@endsection
