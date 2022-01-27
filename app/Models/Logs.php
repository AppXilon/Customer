<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logs extends Model
{
    public $table = 'pay_logs';
    protected $primaryKey = 'PL_Id';
    protected $fillable = [
        'PL_Id', 'Cust_Id', 'PL_type', 'PL_Total_Price', 'created_at', 'updated_at'
    ];
}
