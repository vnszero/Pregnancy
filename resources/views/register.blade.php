@extends('layouts.layout')

@section('title', 'Cadastro')

@section('header')
    <x-large-button variant="invert" url="{{ route('landingPage') }}">Voltar</x-large-button>
@endsection

@section('content')
<form method="POST" action="{{ route('register') }}">
    @csrf
    <div class="mb-4">
        <label for="name" class="block text-sm font-medium text-gray-700">Nome</label>
        <input id="name" type="text" name="name" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
    </div>
    <div class="mb-4">
        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
        <input id="email" type="email" name="email" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
    </div>
    <div class="mb-4">
        <label for="password" class="block text-sm font-medium text-gray-700">Senha</label>
        <input id="password" type="password" name="password" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
    </div>
    <div class="mb-4">
        <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirmar Senha</label>
        <input id="password_confirmation" type="password" name="password_confirmation" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
    </div>
    <div class="flex items-center justify-between">
        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded">Cadastrar</button>
    </div>
    
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
</form>
@endsection

@section('footer')
    Footer
@endsection