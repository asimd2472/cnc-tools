<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Colors extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    public function materialType()
    {
        return $this->belongsTo(MaterialTypes::class, 'material_type_id');
    }
}
