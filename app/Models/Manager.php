<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    public $table = 'manager';
    protected $primaryKey = 'Manager_id';
    protected $fillable = [
        'Manager_id', 'Name', 'Email', 'Password', 'Street_1', 'Postcode', 'City', 'State', 'Ban', 'Reason'
    ];
    public $timestamps = false;
}
