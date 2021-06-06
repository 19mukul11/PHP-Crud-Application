<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add php-mysql</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
    <div id="container">
        <?php
                include"header.php";
        ?>
       
        <h2 class="text-center py-3">ADD</h2>
       
        <div id="content">
            <form action="saveData.php" method="post" target="_self">
                <input type="text" placeholder="Enter Student Name" name="sname" />
                <br>
                <input type="number" placeholder="Enter Age" name="sage" />
                <br>
                <input type="text" placeholder="Enter City" name="scity" />
                <br>
                <select  id="branch" name="sbranch">
                    <option value="">--- Select Branch---</option>
                    <option value="Computer Science Engg">Computer Science Engg</option>
                    <option value="Mechanical Engg">Mechanical Engg</option>
                    <option value="Civil Engg">Civil Engg</option>
                    <option value="Electrical Engg">Electricl Engg</option>
                    <option value="Electronics & Comm. Engg">Electronics & Comm. Engg</option>
                </select>
                <br><br>
                <input type="number" placeholder="Enter Student ID" name="sid" />
                <br>
                <input type="submit" placeholder="Add record" class="btn btn-success" />
            </form>
        </div>
    </div>
</body>
</html>