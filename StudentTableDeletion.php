<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'rlibrary' );
$StudentNo= $_POST['student_no'];





$s= " DELETE FROM student WHERE `student`.`stud_no` = '$StudentNo';" ;

$result=mysqli_query($con,$s);

$Error=mysqli_error($con);
if(empty($Error)){
    header('location:TableStudentShow.php');

}
else{
    echo("Error Description: ".mysqli_error($con));
    
}


?>
