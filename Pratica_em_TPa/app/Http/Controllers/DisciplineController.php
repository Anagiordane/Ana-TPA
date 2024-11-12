<?php

namespace App\Http\Controllers;

use App\Models\Discipline;
use Illuminate\Http\Request;

class DisciplineController extends Controller
{
    // Exibir a lista de disciplinas
    public function index()
    {
        $disciplines = Discipline::all();
        return view('disciplines.index', compact('disciplines'));
    }

    // Mostrar o formulário de criação de disciplina
    public function create()
    {
        return view('disciplines.create');
    }

    // Armazenar nova disciplina
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        Discipline::create($request->all());
        return redirect()->route('disciplines.index')->with('success', 'Disciplina criada com sucesso.');
    }

    // Exibir uma disciplina específica
    public function show(Discipline $discipline)
    {
        return view('disciplines.show', compact('discipline'));
    }

    // Mostrar o formulário de edição de disciplina
    public function edit(Discipline $discipline)
    {
        return view('disciplines.edit', compact('discipline'));
    }

    // Atualizar disciplina
    public function update(Request $request, Discipline $discipline)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        $discipline->update($request->all());
        return redirect()->route('disciplines.index')->with('success', 'Disciplina atualizada com sucesso.');
    }

    // Remover disciplina
    public function destroy(Discipline $discipline)
    {
        $discipline->delete();
        return redirect()->route('disciplines.index')->with('success', 'Disciplina excluída com sucesso.');
    }
}
