<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $table = 'types';

    public $timestamps = false;

    protected $fillable = [
        'name', 'id_category'
    ];

    public function getStock(bool $queryReturn = false)
    {
        $stock = $this->hasMany('App\Stock', 'id_stock');
        if ($queryReturn)
            return $stock;
        return $stock->get();
    }


    public function getProduct(bool $queryReturn = false)
    {
        $all_stock_id = $this->getStock(true)->select('id')->get()->toArray();
        $all_stock_id = array_flatten($all_stock_id);
        $product = Product::whereIn('id_stock', $all_stock_id);
        if ($queryReturn)
            return $product;
        return $product->get();
    }
}
