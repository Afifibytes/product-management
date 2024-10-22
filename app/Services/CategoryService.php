<?php

namespace App\Services;

use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;

class CategoryService
{
    public function getAllCategories($filters = []): Collection
    {
        $query = Category::query();

        if (isset($filters['name_en'])) {
            $query->where('name_en', 'like', '%' . $filters['name_en'] . '%');
        }

        if (isset($filters['name_ar'])) {
            $query->where('name_ar', 'like', '%' . $filters['name_ar'] . '%');
        }

        return $query->get();
    }

    public function getCategoryById($id): ?Category
    {
        return Category::find($id);
    }

    public function createCategory($data): Category
    {
        return Category::create($data);
    }

    public function updateCategory($data, $id): ?Category
    {
        $category = Category::find($id);

        if (!$category) {
            return null;
        }

        $category->update($data);

        return $category;
    }

    public function deleteCategory($id): ?bool
    {
        $category = Category::find($id);

        if (!$category) {
            return null;
        }

        $category->delete();

        return true;
    }
}
