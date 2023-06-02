<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculator</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" />
</head>

<body>
  <div class="container px-5 pt-5">
    <div class="row jusitfy-content-center align-items-center">
      <form action="result.php" method="POST">
        <div class="mb-3">
          <label for="first_number">First Number</label>
          <input type="text" name="first_number" id="first_number" require class="form-control" />
        </div>
        <div class="mb-3">
          <label for="second_number">Second Number</label>
          <input type="text" name="second_number" id="second_number" require class="form-control" />
        </div>
        <div class="mb-4">
          <select class="form-select" require name="what_to_do">
            <option disabled selected>What will you do with two numbers?</option>
            <option value="1">Add(+)</option>
            <option value="2">Subtract(-)</option>
            <option value="3">Multiply(x)</option>
            <option value="4">Divide(&div;)</option>
          </select>
        </div>
        <div class="text-end">
          <button class="btn btn-warning col-2">Submit</button>
        </div>
      </form>
    </div>
  </div>
</body>

</html>