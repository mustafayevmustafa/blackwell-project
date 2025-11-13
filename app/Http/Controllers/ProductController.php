<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function stock()
    {
        $products = Product::all();
        return view('stock', compact('products'));
    }

    public function checkStock(Request $request)
    {
        $request->validate([
            'productname' => 'required|string',
            'quantity' => 'required|integer|min:1',
        ]);

        $product = Product::whereRaw("JSON_UNQUOTE(JSON_EXTRACT(title, '$.en')) = ?", [$request->productname])
            ->orWhereRaw("JSON_UNQUOTE(JSON_EXTRACT(title, '$.az')) = ?", [$request->productname])
            ->first();

        if (!$product) {
            return response()->json([
                'success' => false,
                'message' => 'Məhsul tapılmadı!'
            ]);
        }

        $availableCount = $product->count ?? 0;
        $requestedQuantity = $request->quantity;

        if ($availableCount >= $requestedQuantity) {
            return response()->json([
                'success' => true,
                'message' => "Məhsul mövcuddur! {$availableCount} ədəd qalıb.",
                'available_count' => $availableCount,
                'product_name' => is_array($product->title) ? ($product->title['az'] ?? $product->title['en']) : $product->title
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => "Kifayət qədər məhsul yoxdur! Yalnız {$availableCount} ədəd qalıb.",
                'available_count' => $availableCount,
                'product_name' => is_array($product->title) ? ($product->title['az'] ?? $product->title['en']) : $product->title
            ]);
        }
    }

    public function index()
    {
        $categories = Category::all();
        $products = Product::with('category')->get();

        return view('product', compact('categories', 'products'));
    }

    public function blog()
    {
        $blogs = Blog::orderBy('created_at', 'desc')->paginate(6);
        return view('blog', compact('blogs'));
    }

    public function blogDetail($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();

        $recentBlogs = Blog::where('id', '!=', $blog->id)
            ->orderBy('created_at', 'desc')
            ->take(6)
            ->get();

        return view('blog-detail', compact('blog', 'recentBlogs'));
    }

}
