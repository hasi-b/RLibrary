<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'rlibrary' );
$OldStudentNo= $_POST['student_no'];
$StudentNo= $_POST['new_student_no'];
$StudentName = $_POST['student_name'];




$s= " UPDATE `student` SET `stud_no` = '$StudentNo', `stud_name` = '$StudentName' WHERE `student`.`stud_no` = '$OldStudentNo'" ;

$result=mysqli_query($con,$s);

$Error=mysqli_error($con);
if(empty($Error)){
    header('location:TableStudentShow.php');

}
else{
    echo("Error Description: ".mysqli_error($con));
    echo "<br>";
    echo("Student No Must Start With 'C'");
}


?>
