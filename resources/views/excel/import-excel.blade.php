@extends('layout.app')

@section('title', 'importar excel')

@section('content')


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('importar excel') }}
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

    
</div>
<form action="{{ route('excel.store') }}" class="align-items-center" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
   
  <div class="form-group">
    <label for="exampleFormControlFile1">Aqui cargue su archivo excel</label>
    <input type="file" class="form-control-file" name="import_file">
 

  <button type="submit" class="btn btn-primary"><i class="bi bi-server"> </i>importar archivos</button>
  </div>

    <a href="{{ route('task.index') }}" class="btn btn-primary"><i class="bi bi-server"> </i>Volver</a>
    </div>
</form>
</div>
</x-app-layout>
@endSection
