<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerModel extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'customer_name',
    //     'customer_address',
    //     'customer_phoneNo',
    //     'car_model',
    //     'car_register_name',
    //     'car_manu_year',
    //     'car_chassic_year',
    //     'car_kilometer',
    //     'car_sold_date'
    // ];

    protected $guarded = [];
}
