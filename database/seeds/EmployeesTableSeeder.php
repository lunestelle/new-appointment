<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeesTableSeeder extends Seeder
{
  public function run()
  {
    $userIds = DB::table('users')->where('role_id', 3)->pluck('id'); 

    DB::table('employees')->insert([
      [
        'user_id' => 2,
        'status' => 'Active',
      ],
    ]);
  }
}