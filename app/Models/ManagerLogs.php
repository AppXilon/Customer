<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManagerLogs extends Model
{
    public $table = 'manager_logs';
    protected $primaryKey = 'ML_Id';
    protected $fillable = [
        'ML_Id', 'Cust_Id', 'ML_type', 'ML_Status', 'created_at', 'updated_at'
    ];
}
