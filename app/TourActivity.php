<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TourActivity extends Model
{
    public $timestamps = false;

  protected $fillable = [
      'activity_id', 'tour_id'
  ];
}
