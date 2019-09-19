<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'rlibrary' );
$BookNo= $_POST['book_no'];
$Author = $_POST['author'];
$BookName= $_POST['book_name'];



$s= " INSERT INTO book (`book_no`, `book_name`, `author`) VALUES ('$BookNo','$BookName', '$Author')" ;

$result=mysqli_query($con,$s);
$Error=mysqli_error($con);
if(empty($Error)){
    header('location:TableBookShow.php');

}
else{
    echo("Error Description: ".mysqli_error($con));
}


?>
