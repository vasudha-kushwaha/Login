<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Commercial</title>
</head>
<body>
    <h2>Welcome Commercial Home</h2>

    <h3>Commercial Details</h3>
    <h3>Commercial Id : <?php echo $_SESSION["id"]; ?></h3>
    <h3>Commercial Name : <?php echo $_SESSION["name"]; ?></h3>
    <h3>Commercial Address : <?php echo $_SESSION["address"]; ?></h3>
    
</body>
</html>