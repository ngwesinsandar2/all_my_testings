<?php

namespace Source\App;
 
use Illuminate\Database\Eloquent\Model;
 
class Gender extends Model
{
  protected $table = 'genders';

  public $timestamps = false;
}