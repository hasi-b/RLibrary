<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'rlibrary' );
$StudentNo= $_POST['student_no'];
$StudentName = $_POST['student_name'];




$s= " INSERT INTO student (`stud_name`, `stud_no`) VALUES ('$StudentName','$StudentNo')" ;

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
