<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    public $table = 'customer_order';

    protected $fillable = [
        'id', 'O_Name',	'O_Payment', 'O_Total_Price', 'Dine_Datetime'
    ];
}
