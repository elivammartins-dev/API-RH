<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'cargo', 'departamento_id']; // Permitir preenchimento dos campos

    // Relacionamento com Departamento (muitos para um)
    public function departamento()
    {
        return $this->belongsTo(Departamento::class);
    }
}
