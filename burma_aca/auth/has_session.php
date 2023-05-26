<?php
if ($_POST["user_name"] === "ngwesin" && $_POST["password"] === "1234") {
  session_start();
  $_SESSION["logged_in"] = true;
  $_SESSION["user_name"] = "Ngwe Sin";
  header("location: index.php");
} else {
  echo "<h1>Login Failed</h1>";
}
