<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    use SoftDeletes;

    protected $fillable = ['nome', 'aulas', 'curso_id'];

    public function curso()
    {
        return $this->belongsTo('App\Models\Curso');
    }
}
