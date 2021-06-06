<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update php-mysql</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.css">
    <style>
        table{
            width: 100%;
        }
        table tr td{
            padding: 10px 0px;   
        }

        #btn{
            margin: 20px 0px;
        }

    </style>
</head>
<body>
    <div id="container">
        <?php
                include"header.php"
        ?>
        <h2 class="text-center py-3">UPDATE</h2>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" target="_self"  method="post">
           
           <input type="number" placeholder="Enter Student ID" name="sid" />  
           <button class="btn-info my-2 mx-2" name="search">Search to Edit</button>          
       </form>

       <?php

            if(isset($_POST['search'])){

                $conn  = mysqli_connect("localhost","root","","learn");
                $sid = $_POST['sid'];

                $sql = "select *from student where ID={$sid}";

                $result = mysqli_query($conn, $sql) or die("Query Unsuccessfull");

                if(mysqli_num_rows($result) > 0){

                    $result_set = mysqli_fetch_assoc($result);
              
       ?>

       <form action="updateData.php" method="post">
            <table>
                     <tr>
                        <td>Student ID : </td>
                        <td><input type="number" name="sid" required value="<?php echo $result_set['ID']; ?>" /></td>
                     </tr>
                     <tr>
                        <td>Name  : </td>
                        <td><input type="text" name="sname" required value="<?php echo $result_set['NAME']; ?>" /></td>
                    </tr>
                    <tr>
                        <td>Branch  : </td>
                        <td>
                        <select  id="branch" name="sbranch">
                            <option value="">--- Select Branch---</option>
                            <option value="Computer Science Engg">Computer Science Engg</option>
                            <option value="Mechanical Engg">Mechanical Engg</option>
                            <option value="Civil Engg">Civil Engg</option>
                             <option value="Electrical Engg">Electricl Engg</option>
                             <option value="Electronics & Comm. Engg">Electronics & Comm. Engg</option>
                     </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Age  : </td>
                        <td> <input type="number" name="sage" required value="<?php echo $result_set['AGE']; ?>" /> </td>
                    </tr>
                    <tr>
                        <td>City  : </td>
                        <td>  <input type="text" name="scity" required value="<?php echo $result_set['CITY']; ?>"/></td>
                    </tr>
            </table>
            <input type="submit" name="submit-btn" class="btn btn-success" id="btn">   
       </form>

   <?php 
              
            }
            else{
                echo "No such Record Found !!!";
            }        
        }
   ?>
    </div>
</body>
</html>