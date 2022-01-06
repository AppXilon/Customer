<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    use HasFactory;
    public $table = "order_product";
    public $fillable = [
        'Order_Id',
        'U_Id',
        'P_Id',
        'Order_Quantity',
        'Order_Price'
    ];

    public function products()
    {
        return $this->belongsTo(Product::class, 'P_Id', 'P_Id');
    }
}
