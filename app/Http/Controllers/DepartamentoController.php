<?php

//namespace App\Http\Controllers;

//use App\Models\Departamento; // Importando o modelo Departamento
//use Illuminate\Http\Request;

//class DepartamentoController extends Controller
//{
    // Método para retornar todos os departamentos
    //public function index()
   // {
        // Recupera todos os departamentos
      //  $departamentos = Departamento::all();
        //return response()->json($departamentos);
    //}

    // Método adicional: Retornar um departamento específico
    //public function show($id)
    //{
      //  $departamento = Departamento::find($id);

        //if (!$departamento) {
          //  return response()->json(['message' => 'Departamento não encontrado'], 404);
       // }

        //return response()->json($departamento);
    //}
//}
// App\Http\Controllers\FuncionarioController.php
namespace App\Http\Controllers;

use App\Models\Funcionario;
use App\Models\Departamento;
use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    public function criarFuncionario()
    {
        // Criando o departamento
        $departamento = Departamento::create(['nome' => 'TI']);
        
        // Criando o funcionário
        $funcionario = Funcionario::create([
            'nome' => 'Carlos Souza',
            'departamento_id' => $departamento->id
        ]);

        return response()->json([
            'departamento' => $departamento,
            'funcionario' => $funcionario
        ]);
    }
}
