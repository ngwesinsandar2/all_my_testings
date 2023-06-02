<?php
require "../db.php";
$db = new DB();
$db->store($_POST);
