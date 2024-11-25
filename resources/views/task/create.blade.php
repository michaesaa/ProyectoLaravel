@extends('layout.app')

@section('title', 'Crear Tarea')

@section('content')


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Task List') }}
        </h2>
    </x-slot>



    @if ($errors->any())
    <div class="alert alert-danger mt-3">
        <ul>
            @foreach ($errors->all() as $error)
                <li> {{ $error }} </li>
            @endforeach
        </ul>
    </div>
@endif    
<div class="text-center">
<h1>Crear tarea</h1>
</div>
<form action="{{ route('task.store') }}" class="align-items-center" method="POST">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">descripcion</label>
        <input type="text" class="form-control" id="description" name="description" placeholder="description" value="{{ old('descripcion') }}">
    </div>

    <div class="text-end">
    <button type="submit" class="btn btn-primary"><i class="bi bi-server"> </i>Guardar</button>
    <a href="{{ route('task.index') }}" class="btn btn-primary"><i class="bi bi-server"> </i>Volver</a>
    </div>
</form>
</div>
</x-app-layout>
@endSection
