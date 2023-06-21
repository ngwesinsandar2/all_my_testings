<?php

namespace Source\Controllers;

require __DIR__ . "/../../vendor/autoload.php";

use Source\Models\Course;
use Source\Models\Gender;
use Source\Models\Student;

use Symfony\Component\HttpFoundation\Request;

class StudentController
{
  public function index()
  {
    // $students = Student::get();
    $students = Student::join('genders', 'students.gender_id', '=', 'genders.id')
      ->join('courses', 'students.course_id', '=', 'courses.id')
      ->get(['students.*', 'genders.gender_name', 'courses.course_name']);

    return view("index.php", ["students" => $students]);
  }

  public function create()
  {
    $genders = Gender::get();
    $courses = Course::get();
    return view("create.php", ["genders" => $genders, "courses" => $courses]);
  }

  public function store(Request $request)
  {
    $result = Student::create($request->request->all());

    if ($result) {
      echo "Student Created Success!";
      return redirect("/students");
    } else {
      echo "Something went wrong";
    };
  }

  public function show($id)
  {
    $student = Student::find($id);

    return view("show.php", ["student" => $student]);
  }

  public function edit($id)
  {
    $genders = Gender::get();
    $courses = Course::get();
    $student = Student::find($id);
    return view("edit.php", ["student" => $student, "genders" => $genders, "courses" => $courses]);
  }

  public function update(Request $request, $id)
  {
    $result = Student::where('id', $id)->update($request->request->all());
    if ($result) {
      return redirect("/students");
    } else {
      echo "Something went wrong";
    };
  }

  public function destroy($id)
  {
    $result = Student::destroy($id);
    if ($result) {
      return redirect("/students");
    } else {
      echo "Something went wrong";
    };
  }
}
