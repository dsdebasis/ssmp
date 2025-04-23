<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class retailers extends Model
{
    //
    protected $fillable = ['fullname','dob',
        'gender','customer_type','gst_no','address','state','postcode','business_name','adharcard_no','city','profile_img',''] ;
}
