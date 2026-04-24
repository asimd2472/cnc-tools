<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MaterialTypes extends Model
{
    protected $guarded = [];
    use SoftDeletes;

    public function material()
    {
        return $this->belongsTo(Materials::class, 'material_id');
    }

    public function colors()
    {
        return $this->hasMany(Colors::class, 'material_type_id');
    }

    public function processes()
    {
        return $this->hasMany(Processes::class, 'material_type_id');
    }
}
