<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['name', 'email','contact_number','delivery_address'];

    public function orders()
    {
        return $this->hasMany('App\Order');
    }
}
