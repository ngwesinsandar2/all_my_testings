<?php

namespace Source\App;

require __DIR__ . "/../../vendor/autoload.php";

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Support\Facades\Cache;

class Database
{
  public function __construct()
  {

    $capsule = new Capsule;

    $capsule->addConnection([
      'driver' => 'mysql',
      'host' => 'localhost',
      'database' => 'school',
      'username' => 'root',
      'password' => '',
      'charset' => 'utf8',
      'collation' => 'utf8_unicode_ci',
      'prefix' => '',
    ]);

    // Make this Capsule instance available globally via static methods... (optional)
    $capsule->setAsGlobal();

    // Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
    $capsule->bootEloquent();
  }

  public function read($table)
  {
    return Capsule::table($table)->get();
  }

  public function store($data)
  {
    $student = Capsule::table('students')->insert([
      'name' => $data['name'],
      'gender_id' => $data['gender_id'],
      'birth_date' => $data['birth_date'],
      'age' => $data['age'],
      'email' => $data['email'],
      'course_id' => $data['course_id'],
    ]);

    if ($student) {
      echo "New Student Created Success!";
      header("location: ../../index.php");
    } else {
      echo "Something went wrong";
    };
  }

  public function detail($id)
  {
    return Capsule::table('students')->find($id);
  }

  public function update($data, $id)
  {
    $affected = Capsule::table('students')
      ->where('id', $id)
      ->update([
        'name' => $data['name'],
        'gender_id' => $data['gender_id'],
        'birth_date' => $data['birth_date'],
        'age' => $data['age'],
        'email' => $data['email'],
        'course_id' => $data['course_id'],
      ]);

    if ($affected) {
      echo "Student Updated Success!";
      header("location: ../../index.php");
    } else {
      echo "Something went wrong";
    };
  }

  public function destroy($id)
  {
    $deleted = Capsule::table('students')->where('id', $id)->delete();

    if ($deleted) {
      echo "Student Deleted Success!";
      header("location: ../../index.php");
    } else {
      echo "Something went wrong";
    };
  }
};
