<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-MYSQL CRUD</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
    <div id="container">
       <?php
            include "header.php";
       ?>
       <h2 class="text-center py-3">Home</h2>

       <?php
            $conn = mysqli_connect("localhost","root","","learn") or die("Connection Failed !!!");

            $sql = "select *from student";

            $result_set = mysqli_query($conn, $sql) or die("Query Unsuccessful !!");

            if(mysqli_num_rows($result_set) > 0){
                        
       ?>
            <table id="record-table" class="table table-bordered table-stripped table-sm">
                <thead class="bg-dark text-light">
                    <td>Name</td>
                    <td>Age</td>
                    <td>City</td>
                    <td>Branch</td>
                    <td>StudentID</td>
                </thead>
                <tbody>

                <?php
                        while($row_result = mysqli_fetch_assoc($result_set)){

                ?>
                <tr>
                    <td><?php echo $row_result['NAME']; ?></td>
                    <td><?php echo $row_result['AGE'];  ?></td>
                    <td><?php echo $row_result['CITY']; ?></td>
                    <td><?php echo $row_result['BRANCH'];  ?></td>
                    <td><?php echo $row_result['ID'];  ?></td>
                </tr>
                            <?php }  ?>
                </tbody>
            </table>
        
              <?php
                    }
                    else{
                        echo "<h3 class='text-center text-danger'> No Record/s Found</h3>";
                    }

                    mysqli_close($conn);
                ?>
    </div>
</body>

</html>