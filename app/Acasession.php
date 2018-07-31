<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acasession extends Model
{
    protected $fillable = [
        'name', 'description', 'status',
    ];
}
