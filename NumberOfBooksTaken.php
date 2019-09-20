<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'rlibrary');



$s= "SELECT student.stud_name, COUNT(*) AS 'Number of Books'
FROM student, issue, membership, book
WHERE student.stud_no = membership.stud_no
AND membership.mem_no = issue.mem_no
AND book.book_no = issue.book_no
GROUP BY student.stud_name" ;

$result=mysqli_query($con,$s);

?>
<!DOCTYPE html>
<html>
    <head>
        <title>
        Query Data
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
                <th colspan="2"><h1>Query Result</h1></th>
            <tr>
            <tr>
            
             <th> stud_name</th>
                <th> Number of Books</th>
                
            </tr>
         
            <?php
            while ($row=mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                
                    <td>
                        <?php echo $row["stud_name"] ?>
                    </td>
                    <td>
                        <?php echo $row["Number of Books"] ?>
                    </td>
                   
                </tr>
                <?php
            }
            ?>
            
        </table>
    </body>
</html>