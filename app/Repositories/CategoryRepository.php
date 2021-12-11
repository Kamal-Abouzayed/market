<?php

namespace App\Repositories;

use App\Contracts\CategoryContract;
use App\Models\Category;
use App\Traits\UploadAble;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use InvalidArgumentException;

class CategoryRepository extends BaseRepository implements CategoryContract
{
    use UploadAble;

    public function __construct(Category $model)
    {
        $this->model = $model;
    }

    public function listCategories(string $orderBy = 'id', string $sortBy = 'asc', array $columns = ['*'])
    {
        return $this->all($columns, $orderBy, $sortBy);
    }

    public function findCategoryById(int $id)
    {
        try {

            return $this->findOneOrFail($id);

        } catch (ModelNotFoundException $e) {

            throw new ModelNotFoundException($e);

        }
    }

    public function createCategory(array $params)
    {
        try {

            $collection = \collect($params);

            $category = new Category($collection->all());

            $category->save();

            return $category;

        } catch (QueryException $exception) {

            throw new InvalidArgumentException($exception->getMessage());

        }
    }

    public function updateCategory(array $params)
    {
        $category = $this->findCategoryById($params['id']);

        $collection = \collect($params)->except('_token');

        $category->update($collection->all());

        return $category;
    }

    public function deleteCategory($id)
    {
        $category = $this->findCategoryById($id);

        $category->delete();

        return $category;
    }
}
