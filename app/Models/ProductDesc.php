<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductDesc extends Model
{
    protected $guarded = [];

    public function children()
    {
        return $this->hasMany(ProductDesc::class, 'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo(ProductDesc::class, 'parent_id');
    }
}
