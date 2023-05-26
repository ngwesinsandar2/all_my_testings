<?php
  $result = (int)$_POST["first_number"] + (int)$_POST["second_number"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Addition Result</title>
</head>
<body>
  <div>
    <h1>
      <?php var_dump($result) ?>
    </h1>
  </div>
</body>
</html>