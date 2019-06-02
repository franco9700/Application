<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subsidiaries extends Model
{
    protected $fillable = [
        'name', 'address', 'coordinates', 'company_id'
    ];
}
