<?php
try {
  $pdo = new Pdo("mysql:dbname=school;host=localhost", 'root', "");
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $statement = $pdo->prepare("SELECT * FROM genders");
  $statement2 = $pdo->prepare("SELECT * FROM courses");

  if ($statement->execute()) {
    $genders = $statement->fetchAll(PDO::FETCH_OBJ);
  } else {
    echo "Something went wrong";
  };

  if ($statement2->execute()) {
    $courses = $statement2->fetchAll(PDO::FETCH_OBJ);
  } else {
    echo "Something went wrong";
  };
} catch (PDOException $e) {
  die('Could not connect: ' . $e->getMessage());
} catch (Exception $e) {
  die($e->getMessage());
}
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
        <form action="store.php" method="POST">
          <!-- Name -->
          <div class="mb-2">
            <label for="name" class="form-label fw-bold">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Student Name" />
          </div>
          <!-- Email -->
          <div class="mb-2">
            <label for="email" class="form-label fw-bold">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter Student Email" />
          </div>
          <!-- Gender -->
          <div class="mb-2">
            <h6>Gender</h6>
            <?php foreach ($genders as $gender) : ?>
              <div class="d-flex">
                <div class="mb-2">
                  <input class="form-check-input" type="radio" name="gender" id="<?php echo $gender->name ?>" value="<?php echo $gender->id ?>">
                  <label class="form-check-label text-uppercase" for="<?php echo $gender->name ?>">
                    <?php echo $gender->name ?>
                  </label>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
          <!-- Date of Birth -->
          <div class="mb-2">
            <label for="dob" class="form-label fw-bold">Date of Birth</label>
            <input type="date" class="form-control" id="dob" name="birth_date" placeholder="Enter Birthday" />
          </div>
          <!-- Age -->
          <div class="mb-2">
            <label for="age" class="form-label fw-bold">Age</label>
            <input type="number" class="form-control" id="age" name="age" placeholder="Enter Student Age" />
          </div>
          <!-- Course -->
          <div class="mb-2">
            <h6>Course</h6>
            <?php foreach ($courses as $course) : ?>
              <div class="d-flex">
                <div class="mb-2">
                  <input class="form-check-input" type="radio" name="course" id="<?php echo $course->name ?>" value="<?php echo $course->id ?>">
                  <label class="form-check-label text-uppercase" for="<?php echo $course->name ?>">
                    <?php echo $course->name ?>
                  </label>
                </div>
              </div>
            <?php endforeach; ?>
          </div>

          <button class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</body>

</html>