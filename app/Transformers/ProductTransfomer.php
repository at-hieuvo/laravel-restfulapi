<?php

namespace App\Transformers;

use App\Product;
use League\Fractal\TransformerAbstract;

class ProductTransfomer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Product $product)
    {
        return [
            'identifier' => (int)$product->id,
            'title' => (string)$product->name,
            'details' => (string)$product->description,
            'stock' => (int)$product->quantiy,
            'situation' => (string)$product->status,
            'picture' => url("img/{$product->image}"),
            'seller' => (int)$product->seller_id,
            'creationDate' => $product->created_at,
            'lastChange' => $product->updated_at,
            'deleteDate' => isset($product->delete_at) ? (string) $product->delete_at : null,
        ];
    }
}
