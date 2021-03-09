<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;

    //protected $table = 'my_flights';
    //jika table tidak bernama flight maka menggunakan protected $table
    //protected $primaryKey = 'flight_id';
    //jika primary key buka id maka menggunakan protected $primaryKey
    //public $incrementing = false;
    //jika tidak mengingingkan increment pada primary key maka menggunakan public $incrementing
    //protected $keyType = 'string';
    //jika primary key bukanlah int maka menggunakan keyType
    //public $timestamps = false;
    //jika tidak mengingkan eloquent melakukan otomatis create dan updated pada database maka menggunakan



    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'updated_date';
    //customize nama colom untuk store timestamp

   
    
}
