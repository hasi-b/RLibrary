<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'rlibrary' );
$OldMembershipNo= $_POST['membership_no'];

$MembershipNo = $_POST['new_membership_no'];




$s= " UPDATE `membership` SET `mem_no` = '$MembershipNo' WHERE `membership`.`mem_no` = '$OldMembershipNo'" ;

$result=mysqli_query($con,$s);

$Error=mysqli_error($con);
if(empty($Error)){
    header('location:TableMembershipShow.php');

}
else{
    echo("Error Description: ".mysqli_error($con));
    echo "<br>";
    echo("Try Inserting Data on Student Table First");
}


?>
