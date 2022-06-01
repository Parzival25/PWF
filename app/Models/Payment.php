<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Payment extends Model {
    use HasFactory;
    protected $fillable = [
        'id',
        'amount',
        'description',
        'imagen',
    ];

    public function users(){
        return $this->belongsToMany('App\Models\User','id','user_id');
    }

    public function parties(){
        return $this->belongsTo('App\Models\Party','id','party_id');
    }

}