<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'rlibrary' );
$OldIssueNo= $_POST['issue_no'];
$IssueNo= $_POST['new_issue_no'];
$MembershipNo = $_POST['membership_no'];
$BookNo = $_POST['book_no'];




$s= "UPDATE `issue` SET `iss_no` = '$IssueNo', `mem_no` = '$MembershipNo ', `book_no` = '$BookNo' WHERE `issue`.`iss_no` = "$OldIssueNo" ;

$result=mysqli_query($con,$s);

$Error=mysqli_error($con);
if(empty($Error)){
    header('location:TableIssueShow.php');

}
else{
    echo("Error Description: ".mysqli_error($con));
}


?>