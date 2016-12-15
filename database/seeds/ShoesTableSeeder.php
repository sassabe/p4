<?php

use Illuminate\Database\Seeder;
use RunTrainer\Run;
use RunTrainer\Shoe;
use RunTrainer\User;


class ShoesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('shoes')->insert([
         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
         'make' => 'Nike',
         'model' => 'Free RN Flyknit',
        ]);

         DB::table('shoes')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'make' => 'New Balance',
        'model' => 'Minimus Trail',
        ]);

        DB::table('shoes')->insert([
       'created_at' => Carbon\Carbon::now()->toDateTimeString(),
       'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
       'make' => 'Merrel',
       'model' => 'Vapor Glove',
       ]);

    }
}
