<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Disciplina;
use App\Models\Curso;

class DisciplinaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $disciplinas = Disciplina::with('curso')->get();
        return view('disciplina.index', compact('disciplinas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cursos = Curso::all();
        return view('disciplina.create', compact('cursos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'aulas' => 'required|integer|min:1',
            'curso_id' => 'required|exists:cursos,id',
        ]);

        Disciplina::create([
            'nome' => $request->nome,
            'aulas' => $request->aulas,
            'curso_id' => $request->curso_id,
        ]);

        return redirect()->route('disciplina.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $disciplina = Disciplina::findOrFail($id);
        $cursos = Curso::all();
        return view('disciplina.edit', compact('disciplina', 'cursos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'aulas' => 'required|integer|min:1',
            'curso_id' => 'required|exists:cursos,id',
        ]);

        $disciplina = Disciplina::findOrFail($id);
        $disciplina->update([
            'nome' => $request->nome,
            'aulas' => $request->aulas,
            'curso_id' => $request->curso_id,
        ]);

        return redirect()->route('disciplina.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $disciplina = Disciplina::findOrFail($id);
        $disciplina->delete();

        return redirect()->route('disciplina.index');
    }
}
