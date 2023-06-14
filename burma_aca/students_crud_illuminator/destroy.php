<?php
require __DIR__ . "/vendor/autoload.php";

use Source\App\Database;

$db = new Database();
$db->destroy($_GET['id']);