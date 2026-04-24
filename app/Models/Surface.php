<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Surface extends Model
{
    protected $guarded = [];
    use SoftDeletes;

    public function material()
    {
        return $this->belongsTo(Materials::class, 'material_id');
    }

    public function surfaceTypes()
    {
        return $this->hasMany(SurfaceType::class);
    }
    
}
