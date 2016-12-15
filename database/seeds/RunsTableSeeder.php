<?php

use Illuminate\Database\Seeder;
use RunTrainer\Run;
use RunTrainer\Shoe;
use RunTrainer\User;

class RunsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      #$shoe_id = Shoe::where('model','=','Minimus')->pluck('id')->first();
      DB::table('runs')->insert([
      'user_id' => 1,
      'created_at' => Carbon\Carbon::now()->toDateTimeString(),
      'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
      'title' => 'Long run in the Fells',
      'notes' => 'Cold and windy, difficult first 3 miles but I felt great in the second half!',
      'distance' => 8,
      ##'duration' => 3600,
      'shoe_id' => 3,
      ]);

    #$shoe_id = Shoe::where('model','=','Minimus')->pluck('id')->first();
      DB::table('runs')->insert([
        'user_id' => 2,
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'title' => 'Loop around Fresh Pond',
          'notes' => 'Quick run before work.',
          'distance' => 6,
          ##'duration' => 3600,
          'shoe_id' => 3,
      ]);

      #$shoe_id = Shoe::where('model','=','Free RN Flyknit')->pluck('id')->first();
      DB::table('runs')->insert([
          'user_id' => 2,
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'title' => 'Minuteman Slingshot',
          'notes' => 'Long run!',
          'distance' => 12,
          ##'duration' => 3600,
          'shoe_id' => 2,
      ]);

    }
}
