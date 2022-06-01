<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Party extends Model
{
    protected $fillable = [
        'id',
        'name', 
        'descripcion',
        'imagen',
        'imagen2',
        'imagen3',
        'confirmed',
        'status'
    ];

    //Relacion 
    public function anfitrion(){
        return $this->hasOne('App\Models\User','id','user_id');
    }

      //Relacion 
    public function proviene(){
        return $this->hasOne('App\Models\Package','id','package_id');
    }

}