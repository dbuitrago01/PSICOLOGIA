<!-- resources/views/testconsult/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Consulta de Pruebas</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Duración (minutos)</th>
                <th>Puntuación Máxima</th>
                <!-- Agrega más columnas según sea necesario -->
            </tr>
        </thead>
        <tbody>
            @foreach ($tests as $test)
                <tr>
                    <td>{{ $test->id }}</td>
                    <td>{{ $test->name }}</td>
                    <td>{{ $test->description }}</td>
                    <td>{{ $test->duration_minutes }}</td>
                    <td>{{ $test->max_score }}</td>
                    <!-- Agrega más columnas según sea necesario -->
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
