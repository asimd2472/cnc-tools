<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasOne;

class OrderDetails extends Model
{
    protected $guarded = [];
    use SoftDeletes;

    public function manufacturingTypes(): HasOne
    {
        return $this->HasOne(ManufacturingTypes::class,'id', 'manufacturing_types_id');
    }
    
}
