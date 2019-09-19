<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'rlibrary' );
$StudentNo= $_POST['student_no'];
$MembershipNo = $_POST['membership_no'];




$s= " INSERT INTO membership (`mem_no`, `stud_no`) VALUES ('$StudentNo','$MembershipNo')" ;

$result=mysqli_query($con,$s);

$Error=mysqli_error($con);
if(empty($Error)){
    header('location:TableMembershipShow.php');

}
else{
    echo("Error Description: ".mysqli_error($con));
    echo("Try Inserting Data on Student Table First");
}


?>
