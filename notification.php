<?php
error_log("hello, this is a test!");
$_POST = json_decode(file_get_contents('php://input'), true);
error_log($_POST);
?>