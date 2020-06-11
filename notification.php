<?php
error_log("hello, this is a test!");
// Takes raw data from the request
$json = file_get_contents('php://input');
// Converts it into a PHP object
$data = json_decode($json);
error_log($data);
?>