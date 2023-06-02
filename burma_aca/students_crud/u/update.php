<?php
require "../db.php";
$db = new DB();
$db->update($_POST, $_GET['id']);