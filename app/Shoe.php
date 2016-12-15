<?php

namespace RunTrainer;

use Illuminate\Database\Eloquent\Model;

class Shoe extends Model
{
  public function runs() {
      # Shoes has many runs
      # Define a one-to-many relationship.
      return $this->hasMany('RunTrainer\Run');
}
public static function getForDropdown() {
        # Shoe
        $shoes = Shoe::orderBy('model', 'ASC')->get();
        $shoes_for_dropdown = [];
        foreach($shoes as $shoe) {
            $shoes_for_dropdown[$shoe->id] = $shoe->make.' '.$shoe->model;
        }
        return $shoes_for_dropdown;
    }
