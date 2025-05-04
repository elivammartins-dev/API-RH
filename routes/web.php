<?php

// routes/web.php ou routes/api.php
use Illuminate\Support\Facades\Route;
use App\Models\Departamento;
use App\Models\Funcionario;

// routes/web.php ou routes/api.php
use App\Http\Controllers\FuncionarioController;

Route::get('/criar-funcionario', [FuncionarioController::class, 'criarFuncionario']);


Route::get('/criar-departamentos', function () {
    $departamento = Departamento::create(['nome' => 'TI']);
    $funcionario = Funcionario::create([
        'nome' => 'Carlos Souza',
        'departamento_id' => $departamento->id
    ]);
    return response()->json([
        'departamento' => $departamento,
        'funcionario' => $funcionario
    ]);
});
