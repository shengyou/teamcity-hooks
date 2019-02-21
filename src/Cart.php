<?php

namespace App;

class Cart
{
    /**
     * @var \Illuminate\Support\Collection
     */
    private $items;

    /**
     * Cart constructor.
     */
    public function __construct()
    {
        $this->items = collect();
    }

    /**
     * @param Product $product
     * @return Cart
     */
    public function add(Product $product)
    {
        $this->items->push($product);

        return $this;
    }
}
