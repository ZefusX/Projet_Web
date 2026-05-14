<?php
include "../config/init.php";

session_destroy();
$_SESSION = [];

echo "Session reset";
?>