<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'rlibrary' );
$IssueNo= $_POST['issue_no'];
$MembershipNo = $_POST['membership_no'];
$BookNo = $_POST['book_no'];




$s= " INSERT INTO issue (`iss_no`, `iss_date`,`mem_no`,`book_no`) VALUES ('$IssueNo',CURRENT_TIMESTAMP,'$MembershipNo','$BookNo')" ;

$result=mysqli_query($con,$s);

$Error=mysqli_error($con);
if(empty($Error)){
    header('location:TableIssueShow.php');

}
else{
    echo("Error Description: ".mysqli_error($con));
}


?>