<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
        protected $table='rental';
  

    protected $guarded=['id'];
    public $timestamps=false;
    protected $fillable=[
        'rental_id','inventory_id','customer_id','return_date','staff_id'
            ];
        
            public function inventory(){
                return $this->belongsTo(Inventory::class,'inventory_id', 'id');
            }
            public function customer(){
                return $this->belongTo(Customer::class,'customer_id', 'id');
            }
}