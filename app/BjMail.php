<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BjMail extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name',
        'from',
        'to',
        'subject',
        'msg',
        'received_time',
        'sent_time',
        'status',
        'user_id'
    ];
}
