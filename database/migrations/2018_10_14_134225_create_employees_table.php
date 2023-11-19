<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
  */
  public function up()
  {
    Schema::create('employees', function (Blueprint $table) {
      $table->increments('id');
      $table->unsignedBigInteger('user_id')->nullable();
      $table->enum('status', ['Active', 'Maternity/Paternity Leave', 'Sick Leave', 'Vacation', 'Suspended', 'Terminated'])->default('Active');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
  */
  public function down()
  {
    Schema::dropIfExists('employees');
  }
}