<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'rlibrary');


$s= "select * from issue" ;

$result=mysqli_query($con,$s);

?>
<!DOCTYPE html>
<html>
    <head>
        <title>
        Issue Data
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
                <th colspan="4"><h1>Issue Table</h1></th>
            <tr>
            <tr>
                <th> Issue No</th>
                <th> Issue Date</th>
                <th> Membership No</th>
                <th> Book No</th>
            </tr>
         
            <?php
            while ($row=mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td>
                        <?php echo $row["iss_no"] ?>
                    </td>
                    <td>
                        <?php echo $row["iss_date"] ?>
                    </td>
                    <td>
                        <?php echo $row["mem_no"] ?>
                    </td>
                    <td>
                        <?php echo $row["book_no"] ?>
                    </td>
                </tr>
                <?php
            }
            ?>
            
        </table>
    </body>
</html>