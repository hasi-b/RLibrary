<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'rlibrary' );
$IssueNo= $_POST['issue_no'];





$s= " DELETE FROM issue WHERE `issue`.`iss_no` = '$IssueNo'" ;

$result=mysqli_query($con,$s);

$Error=mysqli_error($con);
if(empty($Error)){
    header('location:TableIssueShow.php');

}
else{
    echo("Error Description: ".mysqli_error($con));
}


?>