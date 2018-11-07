<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    public $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'tax_number'
    ];
}
