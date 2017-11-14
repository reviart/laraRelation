<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['order_id', 'transaction_date','customer_id','status','total_amount'];

    public function orderDetails()
    {
        return $this->hasMany('App\OrderDetail');
    }

    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }
}
