<?php

namespace App\Services;

use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;

class ProductService
{
    public function getAllProducts($filters = []): Collection
    {
        $query = Product::with('category');

        if (isset($filters['name_en'])) {
            $query->where('name_en', 'like', '%' . $filters['name_en'] . '%');
        }

        if (isset($filters['name_ar'])) {
            $query->where('name_ar', 'like', '%' . $filters['name_ar'] . '%');
        }

        if (isset($filters['category_id'])) {
            $query->where('category_id', $filters['category_id']);
        }

        return $query->get();
    }

    public function getProductById($id): ?Product
    {
        return Product::with('category')->find($id);
    }

    public function createProduct($data): Product
    {
        return Product::create($data);
    }

    public function updateProduct($data, $id): ?Product
    {
        $product = Product::find($id);

        if (!$product) {
            return null;
        }

        $product->update($data);

        return $product;
    }

    public function deleteProduct($id): ?bool
    {
        $product = Product::find($id);

        if (!$product) {
            return null;
        }

        $product->delete();

        return true;
    }
}
