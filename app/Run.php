<?php

namespace RunTrainer;

use Illuminate\Database\Eloquent\Model;

class Run extends Model
{
  /* Relationship Methods */

  public function user() {
      return $this->belongsTo('RunTrainer\User');
  }
  /* End Relationship Methods */
}
