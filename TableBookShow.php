<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'rlibrary');


$s= "select * from book" ;

$result=mysqli_query($con,$s);

?>
<!DOCTYPE html>
<html>
    <head>
        <title>
        Book Data
        </title>
    </head>
    <style>
        body{

            background:Seashell;
        }
        table{
            width:800px;
            margin:auto;
            text-align:center;
            table-layout:fixed;
        }
        table,tr,th,td{
            padding:20px;
            color:white;
            border:1px solid #080808;
            border-collapse:collapse;
            font-size:18px;
            font-family:Arial;
            background:linear-gradient(top,#3c3c3c 0%,#222222 100%);
            background:-webkit-linear-gradient(top,#3c3c3c 0%,#222222 100%);
        }
        
        
        
    </style>
    <body>
        
        <table>
            <tr>
                <th colspan="3"><h1>Book Table</h1></th>
            <tr>
            <tr>
                <th> Book No</th>
                <th> Book Name</th>
                <th> Author</th>
            </tr>
         
            <?php
            while ($row=mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td>
                        <?php echo $row["book_no"] ?>
                    </td>
                    <td>
                        <?php echo $row["book_name"] ?>
                    </td>
                    <td>
                        <?php echo $row["author"] ?>
                    </td>
                </tr>
                <?php
            }
            ?>
            
        </table>
    </body>
</html>