<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $table = 'stocks';

    protected $keyType = 'string';

    public $incrementing = false;

    protected $fillable = [
        'name', 'id_type', 'id_color', 'id_size', 'id_material', 'id_gender', 'long_sleeve', 'quantity'
    ];

    public function getRelationProduct()
    {
        return $this->hasMany('App\Product', 'id_product');
    }

    public function getProduct()
    {
        return $this->getRelationProduct()->get();
    }

    public function getRelationSize()
    {
        return $this->belongsTo('App\Size', 'id_size');
    }

    public function getSize()
    {
        return $this->getRelationSize()->get();
    }

    public function getRelationType()
    {
        return $this->belongsTo('App\Type', 'id_type');
    }

    public function getType()
    {
        return $this->getRelationType()->get();
    }

}
