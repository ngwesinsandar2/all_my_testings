<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Students Table</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" />
  <style>
    .image_con {
      width: 200px;
      height: 200px;
    }

    .image_con img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
  </style>
</head>

<body>
  <div class="container py-3 d-flex flex-column align-items-center">
    <div>
      <div class="image_con mb-4">
        <img src="./assets/images/hanna.jpg" alt="" class="rounded" />
      </div>

      <div class="mb-4">
        <p>
          # - <strong><?php echo $student->id ?></strong>
        </p>
        <p>
          Name - <strong><?php echo $student->name ?></strong>
        </p>
        <p>
          Gender - <strong><?php echo $student->gender_id ?></strong>
        </p>
        <p>
          Birthday - <strong><?php echo $student->birth_date ?></strong>
        </p>
        <p>
          Age - <strong><?php echo $student->age ?></strong>
        </p>
        <p>
          Email - <strong><?php echo $student->email ?></strong>
        </p>
        <p>
          Course - <strong><?php echo $student->course_id ?></strong>
        </p>
      </div>

      <div class="d-flex gap-4">
        <a href="javascript:history.back()" class="btn btn-primary">Back</a>
        <a class="btn btn-info text-white text-decoration-none" href="/edit?id=<?php echo $student->id ?>">Edit</a>
        <a class="btn btn-outline-danger" href="/destroy?id=<?php echo $student->id ?>">Delete</a>
      </div>
    </div>
  </div>
</body>

</html>