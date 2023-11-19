<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('services')->insert([
      [
        'name' => 'Transfer of Ownership',
      ],
      [
        'name' => 'New Applicant',
      ],
      [
        'name' => 'New Franchise',
      ],
      [
        'name' => 'Renewal of Franchise',
      ],
      [
        'name' => 'Change of Motorcycle',
      ],
    ]);
  }
}
