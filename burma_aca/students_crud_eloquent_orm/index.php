<?php
require __DIR__ . "/vendor/autoload.php";

use Source\App\Database;
use Source\App\Student;

$db = new Database();
$students = $db->read(Student::class);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Students Table -> Eloquent ORM</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" />
</head>

<body>
  <div class="container py-5">
    <div class="row justify-content-center align-items-center">
      <div class="col-12 text-end mb-4">
        <a href="./create.php" class="btn btn-primary">Create New Student</a>
      </div>

      <div class="col-12">
        <table class="table table-responsive table-info table-striped table-bordered">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">Gender</th>
              <th scope="col">Date of Birth</th>
              <th scope="col">Age</th>
              <th scope="col">Email</th>
              <th scope="col">Course</th>
              <th scope="col">Actions</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <?php foreach ($students as $student) : ?>
              <tr>
                <th> <?php echo $student->id ?> </th>
                <th> <?php echo $student->name ?> </th>
                <td> <?php echo $student->gender_id ?> </td>
                <td> <?php echo $student->birth_date ?> </td>
                <td> <?php echo $student->age ?> </td>
                <td> <?php echo $student->email ?> </td>
                <td> <?php echo $student->course_id ?> </td>
                <td class="d-flex gap-2">
                  <a class="btn btn-primary btn-sm text-white text-decoration-none" href="./detail.php?id=<?php echo $student->id ?>">Details</a>
                  <a class="btn btn-info btn-sm text-white text-decoration-none" href="./edit.php?id=<?php echo $student->id ?>">Edit</a>
                  <a class="btn btn-outline-danger btn-sm" href="./destroy.php?id=<?php echo $student->id ?>">Delete</a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>

</html>