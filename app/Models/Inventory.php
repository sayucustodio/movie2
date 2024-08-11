<?php

namespace App\Models;

use App\Models\Film;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    
    protected $table='inventory';
 
    public $timestamps=false;
    protected $guarded=['id'];
    protected $fillable=[
       'store_id',
            ];
        
            public function rental(){
                return $this->hasMany('App\Rental','rental_id', 'id');
            }
            public function film(){
                return $this->belongsTo(Film::class,'film_id', 'id');
            }
            
}
