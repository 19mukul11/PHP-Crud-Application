<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read php-mysql</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.css">
<style>
    
    #stuDetails{
        background-color: whitesmoke;
        width: 700px;
        margin: 20px auto;
        box-shadow: 3px 3px 3px rgb(129, 127, 127);
        text-align: center;
        padding: 20px;
    }

    #stuDetails table{
        text-align: justify;
    }
    #stuDetails table tr td{
        padding: 2px 10px;
    }
</style>
</head>
<body>
    <div id="container">
        <?php
                include"header.php"
        ?>
        <h2 class="text-center py-3">READ</h2>
       
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" target="_self"  method="post">
           
            <input type="number" placeholder="Enter Student ID" name="sid" />  
            <button class="btn-info my-2 mx-2" name="search">Search</button>          
        </form>
           
           <?php

              if(isset($_POST['search'])){

                $conn  = mysqli_connect("localhost","root","","learn");

                $sid = $_POST['sid'];
                $sql = "select *from student where ID = {$sid}";

                $result = mysqli_query($conn, $sql) or die("Query Unsuccessfull !!!!");

                if(mysqli_num_rows($result) > 0){

                    $result_row = mysqli_fetch_assoc($result);

                   echo "<div id='stuDetails'>";
                   echo "<h5>Student Details<h5><br>";

            ?>
                <table>
                    <tr>
                        <td>Student ID  </td>
                        <td><?php echo ": ".$result_row['ID']?></td>
                    </tr>
                     <tr>
                        <td>Name  </td>
                        <td><?php echo ": ".$result_row['NAME']?></td>
                    </tr>
                    <tr>
                        <td>Branch  </td>
                        <td><?php echo ": ".$result_row['BRANCH']?></td>
                    </tr>
                    <tr>
                        <td>Age  </td>
                        <td><?php echo ": ".$result_row['AGE']?></td>
                    </tr>
                    <tr>
                        <td>City  </td>
                        <td><?php echo ": ".$result_row['CITY']?></td>
                    </tr>
                </table>
                     </div>
               <?php
                    }
                    else{
                        echo "<div style='color:red; text-align:center'>No such record found !!!</div>";
                    }
                    mysqli_close($conn);
                  }
               ?>  
    </div>
</body>
</html>