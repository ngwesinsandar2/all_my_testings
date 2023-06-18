<?php

namespace Source\App;
 
use Illuminate\Database\Eloquent\Model;
 
class Student extends Model
{
  protected $table = 'students';

  public $timestamps = false;
  
  protected $fillable = ['name', 'gender_id', 'birth_date', 'age', 'email', 'course_id'];
}