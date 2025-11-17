<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function getAllProducts(Request $request)
    {
        $validator = Validator::make($request->query(), [
            'metadata' => ['sometimes', 'string'],
            'orderBy' => ['sometimes', 'in:views,selling,price'],
            'limit' => ['sometimes', 'numeric'],
        ], [
            'metadata' => 'O metadata deve ser um JSON válido',
            'orderBy' => 'O campo orderBy deve ser um dos seguintes:views, selling ou price',
            'limit' => "O limite deve ser um número válido"
        ]);
        if ($validator->fails()) {
            return response()->json([
                'error' => $validator->errors()->first(),
                'products' => []
            ], 400);
        }

        $limit = $request->query('limit', 10);
        $orderBy = 'id';

        $query = Product::query();
        if ($request->query('orderBy')) {
            switch ($request->query('orderBy')) {
                case 'views':
                    $orderBy = 'views_count';
                    break;
                case 'selling':
                    $orderBy = 'sales_Count';
                    break;
                case 'price':
                    $orderBy = 'price';
                    break;
            }
        };

        $query->orderBy($orderBy, 'desc');
        $query->with('images');
        $query->limit($limit);

        $products = $query->get();
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
