<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'rlibrary');
$author=$_POST['author'];


$s= "SELECT student.stud_no, student.stud_name, book.book_name, book.author,membership.mem_no,issue.iss_no FROM student, book, issue, membership WHERE author = '$author' AND student.stud_no = membership.stud_no AND membership.mem_no = issue.mem_no AND book.book_no = issue.book_no" ;

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
                <th colspan="6"><h1>Query Result</h1></th>
            <tr>
            <tr>
            <th> Student No</th>
                <th> Student Name</th>
                <th> Membership No</th>
                <th> Issue No</th>
                <th> Book Name</th>
                <th> Author</th>
                
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
                    <td>
                    <?php echo $row["mem_no"] ?>
                    </td>
                    <td>
                        <?php echo $row["iss_no"] ?>
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