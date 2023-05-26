<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php if ($_SESSION["logged_in"]) : ?>
    <h1>Home Page</h1>
    <h2>
      <?php echo $_SESSION["user_name"] ?>
    </h2>
    <a href="logout.php">Logout</a>
  <?php else: ?>
    <form action="has_session.php" method="POST">
      <div>
        <label for="user_name">User name</label>
        <input type="text" name="user_name" id="user_name" />
      </div>
      <div>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" />
      </div>
      <button>Login</button>
    </form>
  <?php endif; ?>
</body>

</html>