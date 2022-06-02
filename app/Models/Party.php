<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Party extends Model implements Auditable
{
    public $table = 'partys';
    use \OwenIt\Auditing\Auditable;
    
    protected $fillable = [
        'id',
        'name', 
        'description',
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
