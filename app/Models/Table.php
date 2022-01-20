<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    use HasFactory;
    public $table = 'restaurant_table';
    protected $fillable = [
        'T_Id', 'Shop_Id', 'T_Pax', 'T_Status'
    ];
    
    protected $primaryKey = 'T_Id';

}
