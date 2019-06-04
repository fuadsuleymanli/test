<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TourRecommended extends Model
{
    public $timestamps = false;

  protected $fillable = [
      'recommended', 'tour_id'
  ];
}
