<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SurfaceType extends Model
{
    protected $guarded = [];
    use SoftDeletes;

    public function surface()
    {
        return $this->belongsTo(Surface::class, 'surface_id');
    }
}
