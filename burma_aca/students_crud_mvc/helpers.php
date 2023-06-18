<?php
function view($fileName, $data = null)
{
  if ($data) {
    extract($data);
  }
  require __DIR__ . "/views/" . $fileName;
}

function notFound()
{
  die("404");
}
