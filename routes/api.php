<?php

use Illuminate\Support\Facades\Route;
use App\Models\Departamento;
use App\Models\Funcionario;

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



