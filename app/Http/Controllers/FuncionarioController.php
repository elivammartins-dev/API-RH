<?php

namespace App\Http\Controllers;

use App\Models\Funcionario; // Modelo Funcionario
use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    public function index()
    {
        // Retorna todos os funcionários
        $funcionarios = Funcionario::all();
        return response()->json($funcionarios);
    }

    public function show($id)
    {
        // Retorna um funcionário específico pelo ID
        $funcionario = Funcionario::find($id);
        
        if (!$funcionario) {
            return response()->json(['message' => 'Funcionário não encontrado'], 404);
        }

        return response()->json($funcionario);
    }
}
