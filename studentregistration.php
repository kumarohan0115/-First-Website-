<?php

require 'connectivity.php';

$connc=new connective\Connect();

$student_id=$_POST['SID'];
$student_fname=$_POST['F_name'];
$student_lname=$_POST['L_name'];

// $full_name=$student_fname+ $student_lname;

$student_branch=$_POST['branch'];
$student_section = $_POST['section'];


$connection= mysqli_connect("localhost","root","","attendance") or die("connection failed");

$query= "INSERT INTO student_table(STU_ID,F_name,L_name,BRANCH,SECTION)
VALUES  ('{$student_id}','{$student_fname}','{$student_lname}','{$student_branch}','{$student_section}')";

$result=mysqli_query($connection,$query) or die("failed");

header("Location:http:enroll_student.php");


mysqli_close($connection);


?>