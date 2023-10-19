<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    } //end of user

    public function products()
    {
        return $this->belongsToMany(Product::class, 'purchase_item')->withPivot('quantity');
    } //end of products

}
