<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public $table = 'users';
    protected $primaryKey = 'C_Id';
    protected $fillable = [
        'C_Id', 'C_Name', 'C_Phone', 'C_Password', 'C_Gender', 'C_BirthDate', 'C_Email', 'C_Ban', 'C_Reason'
    ];
    public $timestamps = false;
}
