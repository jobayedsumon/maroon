<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $guarded = [];
    //
    public function products() {
        return $this->hasManyThrough(Products::class, ProductVariation::class, 'colors_id');
    }
}
