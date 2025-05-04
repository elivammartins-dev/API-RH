<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Departamento;
use App\Models\Funcionario;

class DepartamentoFuncionarioSeeder extends Seeder
{
    public function run()
    {
        // Criar o departamento
        $departamento = Departamento::create(['nome' => 'TI']);

        // Criar o funcionário
        Funcionario::create([
            'nome' => 'Carlos Souza',
            'departamento_id' => $departamento->id
        ]);
    }
}
