<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Production</title>
</head>
<body>
    <h2>Welcom Production Home</h2>
    
    <h3>Production Details</h3>
    <h3>Production Id : <?php echo $_SESSION["id"]; ?></h3>
    <h3>Production Name : <?php echo $_SESSION["name"]; ?></h3>
    <h3>Production Address : <?php echo $_SESSION["address"]; ?></h3>
    
</body>
</html>