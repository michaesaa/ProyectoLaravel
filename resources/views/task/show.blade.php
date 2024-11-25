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
        <h1>Ver Description</h1>
        </div>
            <div class="mt-3">
                 <b>ID:</b> {{ $tasks->id }}
            </div>
        

            <div class="mt-3">
                <b>Description:</b> {{ $tasks->description }}
            </div>
            
        
            <div>
                
            </div>

            <a href="{{ route('task.index') }}" class="btn btn-primary"><i class="bi bi-server"> </i>Volver</a>
         
    
    </div>
</x-app-layout>
@endSection