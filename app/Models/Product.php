<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $primaryKey = 'id_product';
    protected $fillable = ['name', 'quantity'];

    public function transaction()
    {
        return $this->hasMany(Transaction::class, 'id_product', 'id_product');
    }
}