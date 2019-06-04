<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TourTransport extends Model
{
    public $timestamps = false;

  protected $fillable = [
      'transport', 'tour_id'
  ];
}
