<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductProperty extends Model
{
    use HasFactory;
    protected $guarded = false;
    protected $fillable = ['product_id', 'name', 'value'];
    protected $table = 'product_properties';

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
