<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'rlibrary');


$s= "select * from student" ;

$result=mysqli_query($con,$s);

?>
<!DOCTYPE html>
<html>
    <head>
        <title>
        Student Data
        </title>
    </head>
    <body>
        
        <table>
            <tr>
                <th> Student No</th>
                <th> Student Name</th>
            </tr>
            <tr>
                <td></td>
            </tr>
            <?php
            while ($row=mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td>
                        <?php echo $row["stud_no"] ?>
                    </td>
                    <td>
                        <?php echo $row["stud_name"] ?>
                    </td>
                </tr>
                <?php
            }
            ?>
            
        </table>
    </body>
</html>