<?php

namespace App\Http\Controllers\API\Product;

use App\Http\Controllers\Controller;
use App\Http\Resources\Product\ProductResource;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\Tag;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class FilterListController extends Controller
{
    public function __invoke(Product $product)
    {
        $categories = Category::all();
        $colors = Color::all();
        $tags = Tag::all();
        $maxPrice = Product::max('price');
        $minPrice = Product::min('price');

        $result = [
            'categories' => $categories,
            'colors' => $colors,
            'tags' => $tags,
            'price' => [
                'max' => $maxPrice,
                'min' => $minPrice,
            ]
        ];

        return response()->json($result);
    }
}
