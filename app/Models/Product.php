<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'tc_product';
    protected $primaryKey = 'product_id';
    public $timestamps = false;

    protected $fillable = [
        'name',
        'description', 
        'price'
    ];

    public function order()
    {
        return $this->belongsToMany(Order::class, 'order_details', 'product_id', 'order_id');
    }

    public function user()
    {
        return $this->belongsToMany(user::class, 'users', 'product_id', 'id');
    }
}