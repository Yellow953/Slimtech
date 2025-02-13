<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    } //end of user

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_order')->withPivot('quantity', 'type', 'rented_at', 'rented_untill', 'months');
    } //end of products

}
