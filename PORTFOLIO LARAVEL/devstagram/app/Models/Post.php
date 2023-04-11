<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'descripcion',
        'imagen',
        'user_id'
    ];

    public function user()
    {   //Un post pertenece a un usuaio (1:1)
        return $this->belongsTo(User::class)->select(['name','username']); //seleccionas los atributos que te interesa
                 //Traduccion: "pertenece a"
    }
}
