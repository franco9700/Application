<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class companies extends Model
{
    protected $fillable = [
        'name', 'rfc', 'img', 'user_id'
    ];
}
