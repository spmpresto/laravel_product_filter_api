<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductFilterRequest;
use App\Models\Product;


class ProductController extends Controller
{
    public function index(ProductFilterRequest $request)
    {
        $query = Product::with('properties');

        if ($request->has('properties')) {

            foreach ($request->input('properties') as $name => $values) {
                $query->orWhereHas('properties', function ($q) use ($name, $values) {
                    $q->where('name', $name)
                        ->whereIn('value', $values);
                });
            }
        }


        return $query->paginate(40);
    }
}

