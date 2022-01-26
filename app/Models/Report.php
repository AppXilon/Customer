<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    public $table = 'order';

    protected $fillable = [
        'id', 'O_Name',	'O_Payment', 'O_Total_Price', 'Dine_Datetime'
    ];
<<<<<<< HEAD
}
=======
}
>>>>>>> 5d252560cb433a36102fe932ee7080365e1f9cb0
