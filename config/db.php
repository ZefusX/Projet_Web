<?php
$host = "localhost";
$dbname = "Shop_Web";
$user = "root";
$pass = "";

$db = mysqli_connect($host, $user, $pass, $dbname);

if (!$db) {
    die("Erreur de connexion : " . mysqli_connect_error());
}

function qdb($sql)
{
    global $db;

    $result = mysqli_query($db, $sql);

    if (!$result) {
        die("MySQL error: " . mysqli_error($db));
    }

    return $result;
}