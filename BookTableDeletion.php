<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'rlibrary' );
$BookNo= $_POST['book_no'];




$s= " DELETE FROM book WHERE `book`.`book_no` = '$BookNo';" ;

$result=mysqli_query($con,$s);

$Error=mysqli_error($con);
if(empty($Error)){
    header('location:TableBookShow.php');

}
else{
    echo("Error Description: ".mysqli_error($con));
    
}


?>
