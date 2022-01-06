<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $table = 'product';

    public function qty()
    {
        return $this->belongsTo(Product::class, 'P_Id', 'Pro_Id');
    }

    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }

    protected $primaryKey = 'P_Id';
}


