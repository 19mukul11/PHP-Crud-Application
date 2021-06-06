<?php
    $name = $_POST['sname'];
    $age = $_POST['sage'];
    $city = $_POST['scity'];
    $branch = $_POST['sbranch'];
    $sid  =$_POST['sid'];

    $conn = mysqli_connect("localhost","root") or die("Failed to Connect to DB");

    mysqli_select_db($conn, "learn");
    $sqlQuery = "update student set name='{$name}', age={$age}, city='{$city}', branch='{$branch}' where id={$sid}";

    $result = mysqli_query($conn, $sqlQuery) or die("<h1 style='color:red; text-align:center; padding:20px 20px;'>Query Unsuccessfull !! <br>".mysqli_error($conn)." </h1>");

    if($result == true)
    {
       
       
       mysqli_close($conn);
       header("Location: http://localhost/crud-operations/update.php");
       echo " Updation Success !!!";
    }else{
        echo "Query not Success";
    }   
?>