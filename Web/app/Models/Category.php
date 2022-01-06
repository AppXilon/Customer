<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $table = 'category';

    public function products()
    {
        return $this->belongsToMany('App\Product');
    }
}
