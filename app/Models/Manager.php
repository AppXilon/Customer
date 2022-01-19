<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    public $table = 'manager';
    protected $primaryKey = 'M_Id';
    protected $fillable = [
        'M_Id', 'M_Name', 'M_Password', 'M_Email', 'M_Ban', 'M_Reason'
    ];
    public $timestamps = false;
}
