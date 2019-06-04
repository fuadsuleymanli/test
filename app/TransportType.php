<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransportType extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'type_name'
    ];
}
