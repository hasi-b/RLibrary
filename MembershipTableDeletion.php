<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'rlibrary' );
$MembershipNo= $_POST['membership_no'];




$s= " DELETE FROM `membership` WHERE `membership`.`mem_no` = '$MembershipNo'" ;

$result=mysqli_query($con,$s);

$Error=mysqli_error($con);
if(empty($Error)){
    header('location:TableMembershipShow.php');

}
else{
    echo("Error Description: ".mysqli_error($con));
    
}


?>
