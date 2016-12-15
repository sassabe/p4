<?php

namespace RunTrainer;

use Illuminate\Database\Eloquent\Model;

class Run extends Model
{
  /* Relationship Methods */

  public function user() {
      return $this->belongsTo('RunTrainer\User');
  }

  public function shoe() {
        # Book belongs to Author
        # Define an inverse one-to-many relationship.
        return $this->belongsTo('RunTrainer\Shoe');
    }

  /* End Relationship Methods */
}
