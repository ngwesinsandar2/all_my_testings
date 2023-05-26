<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>

<body>
  <div class="container">
    <?php if ($_SESSION["logged_in"]) : ?>
      <h1>Home Page</h1>
      <h2>
        <?php echo $_SESSION["user_name"] ?>
      </h2>
      <a href="logout.php" class="btn btn-primary">Logout</a>
    <?php else : ?>
      <form action="has_session.php" method="POST">
        <div class="mb-4">
          <label for="user_name">User name</label>
          <input type="text" name="user_name" id="user_name" class="form-control" />
        </div>
        <div class="mb-4">
          <label for="password">Password</label>
          <input type="password" name="password" id="password" class="form-control" />
        </div>
        <button class="btn btn-primary">Login</button>
      </form>
    <?php endif; ?>
  </div>
</body>

</html>