<?php

class MyCustomException extends Exception
{
};

function my_custom_error_handler($errCode, $errMsg, $errFile, $errLineNo)
{
  echo "Error Code: $errCode <br />";
  echo "Error Message: $errMsg <br />";
  echo "Error File Path: $errFile <br />";
  echo "Error LineNo: $errLineNo <hr />";

  throw new MyCustomException($errMsg, $errCode);
}

set_error_handler("my_custom_error_handler");

try {
  include "hello.php";
} catch (\Throwable $th) {
  echo "Error Message: " . $th->getMessage() . "<br />";
  echo "Error Code: " . $th->getCode() . "<br />";
  echo "Error throwing LineNo: " . $th->getLine() . "<br />";
}
