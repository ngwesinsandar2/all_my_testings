<?php

namespace Source\Controllers;

require __DIR__ . "/../../vendor/autoload.php";

use Source\App\Course;
use Source\App\Gender;
use Source\App\Student;

use Symfony\Component\HttpFoundation\Request;

class StudentController
{
  private $query;
  private $request;

  public function __construct()
  {
    $request = Request::createFromGlobals();
    $this->query = $request->query;
    $this->request = $request->request;
  }

  public function index()
  {
    $students = Student::get();
    view("index.php", ["students" => $students]);
  }

  public function create()
  {
    $genders = Gender::get();
    $courses = Course::get();
    view("create.php", ["genders" => $genders, "courses" => $courses]);
  }

  public function store()
  {
    $result = Student::create($this->request->all());

    if ($result) {
      echo "Student Created Success!";
      header("location: /index");
    } else {
      echo "Something went wrong";
    };
  }

  public function detail()
  {
    $student = Student::find($this->query->get('id'));
    view("detail.php", ["student" => $student]);
  }

  public function edit()
  {
    $genders = Gender::get();
    $courses = Course::get();
    $student = Student::find($this->query->get('id'));
    view("edit.php", ["student" => $student, "genders" => $genders, "courses" => $courses]);
  }

  public function update()
  {
    $result = Student::where('id', $this->query->get('id'))->update($this->request->all());
    if ($result) {
      echo "Student Updated Success!";
      header("location: /index");
    } else {
      echo "Something went wrong";
    };
  }

  public function destroy()
  {
    $result = Student::destroy($this->query->get('id'));
    if ($result) {
      echo "Student Deleted Success!";
      header("location: /index");
    } else {
      echo "Something went wrong";
    };
  }
}
