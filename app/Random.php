<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Random extends Model
{
  protected $fillable = [
                      'values',
                      'flag'
                    ];

  public function random()
  {
    return $this->hasMany('App\Breakdown', 'random_id');
  }
}
