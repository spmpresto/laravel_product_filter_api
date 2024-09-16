<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class Product extends Model
{
    use HasFactory;
    protected $guarded = false;
    protected $fillable = ['name', 'price', 'quantity'];
    protected $table = 'products';

//    public function store(Request $request)
//    {
//        Cache::flush();
//
//    }
//
//    public function update(Request $request, Product $product)
//    {
//        Cache::flush();
//    }


    public function properties()
    {
        return $this->hasMany(ProductProperty::class);
    }


}
