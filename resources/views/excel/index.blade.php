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
                <h1>Archivos cargados</h1>
            </div>

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="text-end">
                <a href="{{ route('excel.create') }}" class="btn btn-primary">
                    <i class="bi bi-box2-fill"></i> Crear
                </a>
            </div>

            <br>

            <table class="table">
                <thead>
                    <tr class="text-center">

                        <th scope="col">name</th>
                        <th scope="col">description</th>
                        <th scope="col">price</th>
                        <th scope="col">quantity_left</th>
                        <th scope="col">category_id</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($excels as $excel)
                        <tr class="text-end">
                            <th scope="row">{{ $excel->name }}</th>
                            <th scope="row">{{ $excel->description }}</th>
                            <th scope="row">{{ $excel->price }}</th>
                            <th scope="row">{{ $excel->quantity_left }}</th>
                            <th scope="row">{{ $excel->category_id }}</th>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>

@endsection