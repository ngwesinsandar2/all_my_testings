<?php

namespace Source\App;

require __DIR__ . "/../../vendor/autoload.php";

use Illuminate\Database\Capsule\Manager as Capsule;

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

  public function read($controller)
  {
    return $controller::get();
  }

  public function store($controller, $data)
  {
    $student = $controller::create($data);

    if ($student) {
      echo "New Student Created Success!";
      header("location: ../../index.php");
    } else {
      echo "Something went wrong";
    };
  }

  public function detail($id)
  {
    return Student::find($id);
  }

  public function update($data, $id)
  {
    $affected = Student::where('id', $id)->update($data);

    if ($affected) {
      echo "Student Updated Success!";
      header("location: ../../index.php");
    } else {
      echo "Something went wrong";
    };
  }

  public function destroy($id)
  {
    $deleted = Student::destroy($id);

    if ($deleted) {
      echo "Student Deleted Success!";
      header("location: ../../index.php");
    } else {
      echo "Something went wrong";
    };
  }
};
