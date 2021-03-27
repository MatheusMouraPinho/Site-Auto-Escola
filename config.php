<?php 

$url = $_SERVER['DOCUMENT_ROOT'] . "/www";

$db_config = [
    "host" => "localhost", 
    "username" => "root",
    "password" => "",
    "database" => "arcoiris",
];

$conn = mysqli_connect($db_config["host"], $db_config["username"], $db_config["password"], $db_config["database"]);
mysqli_set_charset($conn, 'utf8');

?>