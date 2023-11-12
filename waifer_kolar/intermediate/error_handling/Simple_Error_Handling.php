<?php

class MyCustomException extends Exception
{
  public function __construct($message, $code)
  {
    parent::__construct($message, $code);
    // echo "Error first <br />";
    $handler = fopen("log.txt", "a");
    $data = "Error Message is => \n $message \nError Code is => \n $code \nError Timestamp is => \n " . date("Y-m-d H:i:s", time()) . "\n\n";
    fwrite($handler, $data);
    fclose($handler);
  }
};

function rFile($file)
{
  if (!file_exists($file)) {
    throw new MyCustomException("File $file does not exist", 400);
  } else {
    // $handler = 
  }
};

try {
  rFile("hello.txt");
} catch (\Throwable $th) {
  echo $th->getMessage() . "<br />";
  echo $th->getCode();
}
