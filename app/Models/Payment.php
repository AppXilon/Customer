<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    public $table = 'payment_type';
    protected $primaryKey = 'Pay_Id';
    protected $fillable = [
        'Pay_Id', 'Pay_Name', 'Pay_Status', 'Pay_Image'
    ];
    public $timestamps = false;
}
