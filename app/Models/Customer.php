<?php

namespace App\Models;
use App\Models\Rental;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table='customer';
    protected $primarykey='customer_id';
    public $timestamps=false;
    protected $fillable=[
        'customer_id','store_id','first_name','last_name','email',
        'address_id',
    ];
    public function rental(){
        return $this->hasMany(Rental::class);
    }
   
    
}