<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    public $timestamps = false;

  protected $fillable = [
      'tour_name',
      'introduction',
      'duration',
      'title',
      'price',
      'destinations_visited',
      'description',
      'inclusions',
      'exclusions',
      'min_age',
      'max_age',
      'min_group',
      'max_group',
      'accommondation',
      'transport',
      'recommended',
      'activity',
      'user_id'
  ];
}
