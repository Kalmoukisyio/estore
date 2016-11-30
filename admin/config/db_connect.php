<?php
$host = "mysql1.000webhost.com";
$db_name = "a1258492_store";
$user = "a1258492_admin";
$password = "kalmyo1";
 
try
{
    $mysql_con = new PDO("mysql:host={$host};dbname={$db_name}", $user, $password);
}
catch(PDOException $exception)
{
    echo "Connection error: " . $exception->getMessage();
}
?>