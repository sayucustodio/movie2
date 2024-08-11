<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use HasFactory;
   
    protected $table='language';
    protected $guarded=['id'];
    public $timestamps=false;
    protected $fillable=[
        'language_id','name',
    ];
    public function films(){
        return $this->hasMany(Film::class,'film_id', 'id');
    }
   
}