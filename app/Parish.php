<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parish extends Model
{
    protected $table = 'parish';

    protected $fillable = [
        'id', 'name',
    ];

    public $timestamps = false;
}
