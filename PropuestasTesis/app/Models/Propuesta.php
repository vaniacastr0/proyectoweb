<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Propuesta extends Model
{
    use HasFactory;
    protected $table = 'propuestas';
    protected $primaryKey = 'Id';

    protected $fillable = [ 
        'Fecha','Documento','Estado','Estudiante_rut'
    ];
    public $incrementing = false;

    public function profesores():BelongsToMany{
        return $this->belongsToMany(Profesor::class);
    }
    
    public function profesoresConPivot():BelongsToMany{
        return $this->belongsToMany(Profesor::class)->withPivot(['Profesor_Id','Fecha','Hora','Comentario']);
    }
}
