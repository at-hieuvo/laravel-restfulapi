<?php

namespace App\Transformers;

use App\Category;
use League\Fractal\TransformerAbstract;

class CategoryTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Category $category)
    {
        return [
            'identifier' => (int)$category->id,
            'title' => (string)$category->name,
            'details' => (string)$category->description,
            'creationDate' => $category->created_at,
            'lastChange' => $category->updated_at,
            'deleteDate' => isset($category->delete_at) ? (string) $category->delete_at : null,
        ];
    }
}
