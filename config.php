<?php
$servername="localhost";
$username="root";
$password="";
$dbname="inverstment";

$con = mysqli_connect($servername, $username, $password, $dbname);

if(!$con)
{
    die("connection faild: " . mysqli_connect_error());

}
echo "connect sucsessfully";

?>