<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductFilterRequest;
use App\Models\Product;
use Illuminate\Support\Facades\Cache;


class ProductController extends Controller
{
    public function index(ProductFilterRequest $request)
    {
        $cacheKey = $this->generateCacheKey($request);

        $products = Cache::remember($cacheKey, 600, function () use ($request) {


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

        });

        return $products;
    }

    protected function generateCacheKey(ProductFilterRequest $request)
    {
        $properties = $request->input('properties', []);
        $page = $request->input('page', 1);
        return 'products_' . md5(serialize($properties) . "_page_" . $page);
    }
}

