<?php
ob_start();
session_start();

try
{
    global $conn;
    $conn = new PDO('mysql:host=localhost;dbname=yacht', "root", "password");
    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}


//set timezone
date_default_timezone_set('Europe/Amsterdam');