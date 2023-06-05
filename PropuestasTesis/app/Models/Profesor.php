<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    use HasFactory;
    protected $table = 'profesores';
    protected $primaryKey = 'Id';
    protected $fillable = [ 
        'Email','Nombre','Apellido'
    ];
    public $incrementing = false;
    
    public function propuestas():BelongsToMany{
        return $this->belongsToMany(Propuesta::class);
    }
}
