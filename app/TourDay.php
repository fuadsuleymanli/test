<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TourDay extends Model
{
    public $timestamps = false;

  protected $fillable = [
      'day', 'tour_id'
  ];
}
