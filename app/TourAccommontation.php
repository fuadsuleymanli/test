<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TourAccommontation extends Model
{
    public $timestamps = false;

  protected $fillable = [
      'accommontation', 'tour_id'
  ];
}
