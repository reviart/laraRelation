<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $fillable = ['order_id', 'product_id','quantity','sub_total'];

    public function order()
    {
        return $this->belongsTo('App\Order');
    }
}
