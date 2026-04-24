<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Materials extends Model
{
    protected $guarded = [];
    use SoftDeletes;

    public function manufacturingType()
    {
        return $this->belongsTo(ManufacturingTypes::class, 'manufacturing_types_id');
    }

    public function materialTypes()
    {
        return $this->hasMany(MaterialTypes::class, 'material_id');
    }

    public function surfaces()
    {
        return $this->hasMany(Surface::class, 'material_id');
    }

}
