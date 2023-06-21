<?php
require __DIR__ . "/vendor/autoload.php";

use Source\App\Database;

$db = new Database();
$student = $db->detail($_GET['id']);
$genders = $db->read("genders");
$courses = $db->read("courses");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create New Student</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" />
</head>

<body>
  <div class="container py-5">
    <div class="row justify-content-center align-items-center">
      <div class="col-8">
        <form action="./update.php?id=<?php echo $student->id ?>" method="POST">
          <!-- Name -->
          <div class="mb-2">
            <label for="name" class="form-label fw-bold">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo $student->name ?>" placeholder="Enter Student Name" />
          </div>
          <!-- Email -->
          <div class="mb-2">
            <label for="email" class="form-label fw-bold">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo $student->email ?>" placeholder="Enter Student Email" />
          </div>
          <!-- Gender -->
          <div class="mb-2">
            <h6>Gender</h6>
            <?php foreach ($genders as $gender) : ?>
              <div class="d-flex">
                <div class="mb-2">
                  <input class="form-check-input" <?php if ($gender->id === $student->gender_id) {
                                                    echo "checked";
                                                  } ?> type="radio" name="gender_id" id="<?php echo $gender->gender_name ?>" value="<?php echo $gender->id ?>">
                  <label class="form-check-label text-uppercase" for="<?php echo $gender->gender_name ?>">
                    <?php echo $gender->gender_name ?>
                  </label>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
          <!-- Date of Birth -->
          <div class="mb-2">
            <label for="dob" class="form-label fw-bold">Date of Birth</label>
            <input type="date" class="form-control" id="dob" name="birth_date" value="<?php echo $student->birth_date ?>" placeholder="Enter Birthday" />
          </div>
          <!-- Age -->
          <div class="mb-2">
            <label for="age" class="form-label fw-bold">Age</label>
            <input type="number" class="form-control" id="age" name="age" value="<?php echo $student->age ?>" placeholder="Enter Student Age" />
          </div>
          <!-- Course -->
          <div class="mb-2">
            <h6>Course</h6>
            <?php foreach ($courses as $course) : ?>
              <div class="d-flex">
                <div class="mb-2">
                  <input class="form-check-input" <?php if ($course->id === $student->course_id) {
                                                    echo "checked";
                                                  } ?> type="radio" name="course_id" id="<?php echo $course->course_name ?>" value="<?php echo $course->id ?>">
                  <label class="form-check-label text-uppercase" for="<?php echo $course->course_name ?>">
                    <?php echo $course->course_name ?>
                  </label>
                </div>
              </div>
            <?php endforeach; ?>
          </div>

          <button class="btn btn-primary">Update</button>
        </form>
      </div>
    </div>
  </div>
</body>

</html>