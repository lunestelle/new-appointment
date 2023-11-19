<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Employee extends Model
{
  use Notifiable;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = ['user_id', 'status'];

  public function workingHour()
  {
    return $this->hasMany('App\Entities\WorkingHour', 'employee_id');
  }

  public function employeeServices()
  {
    return $this->hasMany('App\Entities\EmployeeService', 'employee_id');
  }

  public function appointments()
  {
    return $this->hasMany('App\Entities\Appointment', 'employee_id');
  }
}