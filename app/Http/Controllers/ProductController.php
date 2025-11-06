<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function getAllProducts()
    {
        $products = Product::with('images')->get();
        return response()->json([
            'error' => null,
            'products' => $products->map(function ($product) {
                return [
                    'id' => $product->id,
                    'label' => $product->label,
                    'price' => $product->price,
                    'image' => asset('storage' . ($product->images()->first()->url ?? '/products/default-product.svg')),
                    'liked' => false // TODO: implementar o liked
                ];
            })
        ]);
    }
}
