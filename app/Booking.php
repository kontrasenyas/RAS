<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'bookings'; //table name connection

    // protected $fillable = [
    // 'ProductName', 
    // 'Capacity'
    // ];
    protected $fillable = array('ContactName', 'ContactNo', 'Code');

    public $timestamps = false;
}