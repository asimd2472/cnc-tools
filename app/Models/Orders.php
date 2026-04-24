<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Orders extends Model
{
    protected $guarded = [];
    use SoftDeletes;

    public function userDetails(): HasOne
    {
        return $this->HasOne(User::class,'id', 'user_id');
    }

    public function details(): HasMany
    {
        return $this->HasMany(OrderDetails::class,'order_id', 'id');
    }

}
