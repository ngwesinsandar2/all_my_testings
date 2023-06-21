<?php

namespace Source\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Source\Models\Course;
use Source\Models\Gender;

class Student extends Model
{
  protected $table = 'students';

  public $timestamps = false;

  protected $fillable = ['name', 'gender_id', 'birth_date', 'age', 'email', 'course_id'];

  public function gender_id(): HasOne
  {
      return $this->hasOne(Gender::class);
  }
}
