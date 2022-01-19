<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hour extends Model
{
    public $table = 'business_hour';
    protected $primaryKey = 'day_id';
    protected $fillable = [
        'day_id', 'day_name', 'start_time', 'end_time', 'day_off'
    ];
    public $timestamps = false;
}
