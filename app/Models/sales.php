<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class sales extends Model
{
    protected $guarded = ['id','seller_id','product_id'];
}
