<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Language;

class Film extends Model
{
  
    protected $table='film';
    protected $guarded=['id'];
    public $timestamps=false;
    protected $fillable=[
       'film_id', 'title','description','release_year','language_id','rental_duration',
        'rental_rate','length','replacement_cost','rating','special_features'
            ];
        
            public function inventory(){
                return $this->hasMany('App\Inventory','inventory_id', 'id');
            }
            public function language(){
                return $this->belongsTo(Language::class,'language_id', 'id');
            }
           
}