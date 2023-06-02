<?php
require "../db.php";
$db = new DB();
$db->destroy($_GET['id']);