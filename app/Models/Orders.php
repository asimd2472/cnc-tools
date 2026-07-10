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

    // public function userDetails(): HasOne
    // {
    //     return $this->HasOne(User::class,'id', 'user_id');
    // }
    
    public function userDetails()
    {
        return $this->belongsTo(User::class, 'user_id')->withTrashed();
    }

    public function details(): HasMany
    {
        return $this->HasMany(OrderDetails::class,'order_id', 'id');
    }

    public function shippingAddress(): HasOne
    {
        return $this->HasOne(UserShippingAddress::class,'id', 'shipping_address');
    }

}
