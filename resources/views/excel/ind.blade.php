@extends('layout.app')

@section('title', 'Products')

@section('content')

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-900 leading-tight">
            {{ __('vista de archivos cargados') }}
        </h2>
    </x-slot>

<a href="{{ route(users.export) }}" class="btn btn-primary">Exportar Usuarios</a>

    <div>hola</div>
</x-app-layout>

@endsection
