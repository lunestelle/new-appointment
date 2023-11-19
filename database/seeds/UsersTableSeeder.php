<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('users')->insert([
      [
        'first_name' => 'Admin',
        'last_name' => 'Admin',
        'phone' => '+383 43 000 000',
        'email' => 'admin@gmail.com',
        'password' => Hash::make('admin'),
        'confirmed' => 1,
        'role_id' => 1,
      ],
      [
        'first_name' => 'John',
        'last_name' => 'Doe',
        'phone' => '+123 45 678 900',
        'email' => 'john@gmail.com',
        'password' => Hash::make('password'),
        'confirmed' => 1,
        'role_id' => 2,
      ],
      [
        'first_name' => 'Ash',
        'last_name' => 'Lei',
        'phone' => '+321 54 345 467',
        'email' => 'ash@gmail.com',
        'password' => Hash::make('password'),
        'confirmed' => 1,
        'role_id' => 2,
      ],
    ]);
  }
}