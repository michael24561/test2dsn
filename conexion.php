<?php

function conexion(){

$host = "host=dpg-cvmpuoidbo4c7394t4m0-a.oregon-postgres.render.com";
$port = "port=5432";
$dbname = "dbname=test_rq2y";
$user = "user=mfernandez";
$password = "password=va7CzliOlWIIm3XGuStjAEY5KXuJYf7V";

$db = pg_connect("$host $port $dbname $user $password");

return $db;
}
?>
