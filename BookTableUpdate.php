<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'rlibrary' );
$OldBook=$_POST['book_no'];
$BookNo= $_POST['new_book_no'];
$Author = $_POST['author'];
$BookName= $_POST['book_name'];



$s= " UPDATE `book` SET `book_no` = '$BookNo', `book_name` = '$BookName', `author` = '$Author' WHERE `book`.`book_no` = '$OldBook'" ;

$result=mysqli_query($con,$s);
$Error=mysqli_error($con);
if(empty($Error)){
    header('location:TableBookShow.php');

}
else{
    echo("Error Description: ".mysqli_error($con));
}


?>
