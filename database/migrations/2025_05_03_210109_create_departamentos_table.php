<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartamentosTable extends Migration
{
    public function up()
    {
        Schema::create('departamentos', function (Blueprint $table) {
            $table->id(); // ID único e auto-incremento
            $table->string('nome'); // Nome do departamento
            $table->timestamps(); // Colunas created_at e updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('departamentos');
    }
}
