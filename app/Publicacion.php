<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Publicacion extends Model
{
    public function user(){
        return $this->belongsTo('App\User','foreign_key');
    } 
    public function com_publicaciones()
    {
        return $this->belogsTo('App\com_publicaciones','foreign_key');
    }

    protected $table="publicaciones";

    //protected $fillable=['contenido','Autor','titulo',''];
   
}
