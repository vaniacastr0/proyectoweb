<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Estudiante extends Model
{
    use HasFactory;
    protected $table = 'estudiantes';
    protected $primaryKey = 'Rut';
    protected $fillable = [ 
        'Rut','Nombre','Apellido','Email'
    ];
    public $incrementing = false;
    
    public function propuestas():HasMany{
        return $this->hasMany(Propuesta::class);
    }

}