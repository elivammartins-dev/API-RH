<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFuncionariosTable extends Migration
{
    public function up()
    {
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->id(); // ID único e auto-incremento
            $table->string('nome'); // Nome do funcionário
            $table->string('cargo'); // Cargo do funcionário
            $table->foreignId('departamento_id')->constrained('departamentos')->onDelete('cascade'); // Relacionamento com departamentos
            $table->timestamps(); // Colunas created_at e updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('funcionarios');
    }
}
