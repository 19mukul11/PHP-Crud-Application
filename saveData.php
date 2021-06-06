
<?php

    $stu_name = $_POST['sname'];
    $stu_age = $_POST['sage'];
    $stu_city = $_POST['scity'];
    $stu_branch = $_POST['sbranch'];
    $stu_id = $_POST['sid'];

    $conn = mysqli_connect("localhost","root") or die("Failed to Connect to DB");

    mysqli_select_db($conn, "learn");
    $sqlQuery = "insert into student values('$stu_name',$stu_age, '$stu_city', '$stu_branch',$stu_id)";

    $result = mysqli_query($conn, $sqlQuery) or die("<h1 style='color:red; text-align:center; padding:20px 20px;'>Query Unsuccessfull !! <br>".mysqli_error($conn)." </h1>");

    if($result == true)
    {
        mysqli_close($conn);
        header("Location: http://localhost/crud-operations/add.php");
    }else{
        echo "Query not Success";
    }   
    
?>