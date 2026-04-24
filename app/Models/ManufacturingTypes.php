<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ManufacturingTypes extends Model
{   
    protected $guarded = [];
    use SoftDeletes;

    public function materials()
    {
        return $this->hasMany(Materials::class, 'manufacturing_types_id');
    }
}
