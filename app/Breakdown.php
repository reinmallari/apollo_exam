<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Breakdown extends Model
{
  protected $fillable = [
                      'random_id',
                      'values'
                    ];
}
