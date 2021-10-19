<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('students')->insert(
      //   [
      //   'id' => 1,
      //   'nim' => '2031710137',
      //   'name' => 'Muhammad Roofiif Wahyu Pratama',
      //   'class' => '1F',
      //   'department' => 'MI',
      //   'phone_number' => '081334930912'
      // ],
      // [
      //   'id' => 2,
      //   'nim' => '2031710106',
      //   'name' => 'Muhammad Zaki',
      //   'class' => '1F',
      //   'department' => 'MI',
      //   'phone_number' => '088214618194'
      // ],
      [
        'id' => 3,
        'nim' => '2031710076',
        'name' => 'Muslimatul Rizky Aulia',
        'class' => '1F',
        'department' => 'MI',
        'phone_number' => '085784739251'
      ]);
    }
}
