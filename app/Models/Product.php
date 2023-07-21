<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = ['status', 'updated_by'];

    public function rated(): object
    {
        return $this->hasOne(ProductFreightRate::class, 'product_id', 'id');
    }
}
