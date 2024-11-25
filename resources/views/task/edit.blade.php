@extends('layout.app')

@section('title', 'Crear producto')

@section('content')

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-900 leading-tight">
            {{ __('Description') }}
        </h2>
    </x-slot>


    <div class="container">
        <div class="text-center">
        <h1>Editar tarea</h1>
        </div>
        <form action="{{ route('task.update', $task->id) }}" method="POST">
            @csrf
            @method('PATCH')

            <div class="mt-3">
                <b>ID:</b> {{ $task->id }}
            </div>

            <div class="mb-3">
                <label for="name" class="form-label">description</label>
                <input type="text" class="form-control" id="description" name="description" placeholder="description" value="{{ $task->description }}">
            </div>
            

            <button type="submit" class="btn btn-primary"><i class="bi bi-server"> </i>Guardar</button>
            <a href="{{ route('task.index') }}" class="btn btn-primary"><i class="bi bi-server"> </i>Volver</a>
         
        </form>
    </div>
</x-app-layout>
@endSection