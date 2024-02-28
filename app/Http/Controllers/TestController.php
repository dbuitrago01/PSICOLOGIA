<?php

namespace App\Http\Controllers;
use App\Models\Test;
use Illuminate\Http\Request;


class TestController extends Controller
{
    public function index()
    {
        $tests = Test::all();
        return view('tests.index', compact('tests'));
    }

    public function create()
    {
        return view('tests.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'duration_minutes' => 'required|integer|min:1',
            'max_score' => 'required|integer|min:0',
        ]);

        Tes::create($request->all());

        return redirect()->route('tests.index')->with('success', 'La prueba se ha creado correctamente.');
    }

    // Método para mostrar una prueba específica
    public function show($id)
    {
        $test = Test::findOrFail($id);
        return view('tests.show', compact('test'));
    }
}
