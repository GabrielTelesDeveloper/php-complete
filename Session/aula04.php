<?php

session_id("io0kq5csrhtiht6sesrt8gjsa3");

require_once './config.php';

session_regenerate_id();
echo session_id();

var_dump($_SESSION);
?>

