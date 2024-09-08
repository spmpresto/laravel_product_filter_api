<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = false;
    protected $fillable = ['name', 'price', 'quantity'];
    protected $table = 'products';


    public function properties()
    {
        return $this->hasMany(ProductProperty::class);
    }


}
