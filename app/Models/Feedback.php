<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    public $table = 'review';

    protected $fillable = [
        'Review_Id', 'User_Id',	'P_Id',	'R_Rating',	'R_Comment', 'R_Image',	'R_Sentiment', 'created_at', 'updated_at'
    ];
}
