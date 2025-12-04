<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    protected $fillable = ['pessoa_id', 'numero_prontuario', 'observacoes'];

    public function pessoa()
    {
        return $this->belongsTo(Pessoa::class);
    }
}
