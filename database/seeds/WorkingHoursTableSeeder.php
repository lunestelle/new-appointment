<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkingHoursTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run(): void
  {
    // Use DB to get employee IDs
    $employeeIds = DB::table('employees')->pluck('id');

    foreach ($employeeIds as $employeeId) {
      DB::table('working_hours')->insert([
        'employee_id' => $employeeId,
        'date'        => now()->toDateString(),
        'start_time'  => '09:00:00',
        'finish_time' => '17:00:00',
      ]);

      DB::table('working_hours')->insert([
        'employee_id' => $employeeId,
        'date'        => now()->addDay()->toDateString(),
        'start_time'  => '08:30:00',
        'finish_time' => '16:30:00',
      ]);
    }
  }
}
