<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'photo',
        'certificate',
        'phone',
        'marketing_name',
        'tour_email',
        'invoice_email',
        'office_location',
        'address',
        'city',
        'postal_code',
        'facebook',
        'instagram',
        'owerview',
        'min_age',
        'max_age',
        'min_group',
        'max_group',
        'allowed_booking',
        'terms_conditions',
        'user_id'
    ];
}
