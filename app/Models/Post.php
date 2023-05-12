<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //laravel debe saber que información debo leer y procesar antes de almacenar algo en la base de datos
    protected $fillable = [
        'titulo',
        'descripcion',
        'imagen',
        'user_id'

    ];


    public function user()
    {

        #belongsto-->pertenece a 
        return $this->belongsTo(User::class)->select(['name', 'username']);
    }



    public function comentarios()
    {
        return $this->hasMany(Comentario::class);
    }
}
