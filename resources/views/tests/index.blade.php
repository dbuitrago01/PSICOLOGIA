@extends('layouts.app')

@section('content')
    <h1>Listado de Pruebas</h1>
    <!-- <a href="{{ route('tests.create') }}" class="btn btn-primary">Crear Prueba</a> -->
    <ul>
        @foreach ($tests as $test)
            <li>{{ $test->name }}</li>
        @endforeach
    </ul>
@endsection
