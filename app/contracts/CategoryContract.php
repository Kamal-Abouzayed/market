<?php

namespace App\Contracts;

interface CategoryContract
{
    public function listCategories(string $orderBy = 'id', string $sortBy = 'asc', array $columns = ['*']);

    public function findCategoryById(int $id);

    public function createCategory(array $params);

    public function updateCategory(array $params);

    public function deleteCategory($id);
}
