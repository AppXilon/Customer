<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;
    public $table = 'shop';
    protected $primaryKey = 'Shop_Id';
    protected $fillable = [
        'Shop_Id', 'S_Category', 'S_Image', 'S_Table' , 'S_Banner' , 'S_Name', 'S_Description', 'S_Status', 'S_Reason', 'Dine_In', 'Booking', 'Delivery', 'Pick_Up'
    ];

}
