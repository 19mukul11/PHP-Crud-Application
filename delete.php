<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete php-mysql</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
    <div id="container">
        <?php
                include"header.php"
        ?>
        <h2 class="text-center py-3">DELETE</h2>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" target="_self"  method="post">
           
           <input type="number" placeholder="Enter Student ID" name="sid" />  
           <button class="btn-info my-2 mx-2" name="delete">Delete</button>          
       </form>

       <?php
       
            if(isset($_POST['delete'])){
                
                $sid = $_POST['sid'];
                
                $conn = mysqli_connect("localhost","root","","learn") or die("Connection Not success!!!1");

                
                $sql1 = "select *from student where ID={$sid}";
                $sql2 = "delete from student where ID={$sid}";

                $result = mysqli_query($conn, $sql1);

                if(mysqli_num_rows($result) > 0)
                {
                    if(mysqli_query($conn, $sql2)){

                        echo "<h4 class='text-info text-center'>Record Successfully Deleted<h4>";
                    }

                }else{
                    echo "<h5 class='text-danger text-center'>No Such Record Found !!!</h5> ";
                }
            
                mysqli_close($conn);
            
            }
       ?>
    </div>
</body>
</html>