<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class consumers extends Model
{
    //
    protected $fillable = ['fullname','gender','customer_type','mob_no','state','postcode','city'];
}
