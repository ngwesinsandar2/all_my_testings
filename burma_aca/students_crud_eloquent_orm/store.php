<?php
require __DIR__ . "/vendor/autoload.php";

use Source\App\Database;
use Source\App\Student;

$db = new Database();
$db->store(Student::class, $_POST);
