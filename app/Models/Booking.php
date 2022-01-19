<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    public $table = 'restaurant_table';


    protected $fillable = [
        'T_Id', 'Day_Of_Week', 'Start_Time', 'End_Time', 'Status'
    ];
    
    protected $primaryKey = 'Day_Id';
}
