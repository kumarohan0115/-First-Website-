<?php
// date_default_timezone_set("Asia/Kolkata");

// date("d:m:y");
date_default_timezone_set("Asia/Kolkata");


// $date = date_create("2021-05-28");


$server_name = "localhost";
$user_name= "root";
$password="";
$database_name="attendance"; //now i have changed the database name

$connection= mysqli_connect($server_name,$user_name,$password,$database_name) or die("die");

// $connect=mysqli_connect("localhost","root","","attendance") or die("NBO");
$date = $_POST['Date'];
//
$newdate= (string)$date;

echo  var_dump($newdate);


$mysql= "CREATE TABLE nothing (P VARCHAR(1),A VARCHAR (1))";

$result= mysqli_query($connect,$mysql) or die("no");

$end=30;
$starting=1;

for($starting=1;$starting<=$end;$starting++)
{
   

   date_add($date,date_interval_create_from_date_string("1 days"));
   echo date_format($date,"y/m/d");
   echo ("<br>");


}


?>