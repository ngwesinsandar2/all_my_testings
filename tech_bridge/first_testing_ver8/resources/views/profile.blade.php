<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Profile page</h1>

  <h2>Name - {{ $name }}</h2>
  <h2>Age - {{ $age }}</h2>
  
  @if ($status == "single")
    <h2>I'm single</h2>
  @else
    <h2>I've bf</h2>
  @endif

</body>
</html>