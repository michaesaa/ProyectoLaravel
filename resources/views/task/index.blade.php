@extends('layout.app')

@section('title', 'Products')

@section('content')

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-900 leading-tight">
            {{ __('tasks') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="text-center">
                <h1>Lista de tareas</h1>
            </div>

            @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif

            <div class="text-end">
                <a href="{{ route('task.create') }}" class="btn btn-primary">
                    <i class="bi bi-box2-fill"></i> Crear
                </a>
            </div>

            <br>

            <table class="table">
                <thead>
                    <tr class="text-center">

                        <th scope="col">Descripción</th>
                        <th scope="col">Acciones</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tasks as $task)
                        <tr class="text-end">
                            <th scope="row">{{ $task->description }}</th>
                            <td>
                                <a href="{{ route('task.show', $task->id) }}" class="btn btn-info">
                                    <i class="bi bi-eye"></i>Ver
                                </a>    
                                <a href="{{ route('task.edit', $task->id) }}" class="btn btn-success">
                                    <i class="bi bi-pencil-square"></i>Editar
                                </a>
                                <form action="{{ route('task.destroy', $task->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')   
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro?')">
                                        <i class="bi bi-trash"></i>Eliminar
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>

@endsection
